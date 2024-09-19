<?php

namespace Controllers;

use Model\Paquete;
use MVC\Router;
use Model\Registro;
use Model\Usuario;

class RegistroController {

    public static function crear(Router $router){
        if(!is_auth()) {
            header('Location: /');
        }

        //Verificar si el usuario ya esta registrado
        $registro = Registro::where('usuario_id', $_SESSION['id']);
         
         if(isset($registro) && $registro->paquete_id === "3") {
            header('Location: /boleto?id=' . urlencode($registro->token));
         }

        $router->render('registro/crear', [
            'titulo' => 'Finalizar Registro',
        ]);

    }

    public static function gratis(Router $router) {
       
       if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!is_auth()) {
                header('Location: /login');
            }

            //Verificar si el usuario existe, y si si, redirecciona al tike

            $registro = Registro::where('usuario_id', $_SESSION['id']);
         
            if(isset($registro) && $registro->paquete_id === "3") {
               header('Location: /boleto?id=' . urlencode($registro->token));
            }

           $token = substr( md5(uniqid( rand(), true )), 0, 8);
            
            // crear registro
            $datos = array(
                'paquete_id' => 3,
                'pago_id' => '',
                'token' => $token,
                'usuario_id' => $_SESSION['id']
            );

            $registro = new Registro($datos); 
            $resultado = $registro->guardar();

            if($resultado) {
                header('Location: /boleto?id=' . urlencode($registro->token));
                
          } 
       }
    }

    public static function boleto(Router $router){

        $id = $_GET['id'];

        if(!$id || !strlen($id) === 8 ) {
            header('Location: /');
        }

        // buscar en la BD
        $registro = Registro::where('token', $id);
        if(!$registro) {
            header('Location: /');
            
        }

       //lenar las tablas de referencias
       $registro->usuario = Usuario::find($registro->usuario_id);
       $registro->paquete = Paquete::find($registro->paquete_id);
       
       
        $router->render('registro/boleto', [
            'titulo' => 'Asistencia a DevWebCamp',
            'registro' => $registro
        ]);
    }

    public static function pagar(Router $router) {
       
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
             if(!is_auth()) {
                 header('Location: /login');
             }
             
             //validar que el post no venga vacio
             if(empty($_POST)){
                echo json_encode([]);
                return;
             }
             
             // crear registro
             $datos = $_POST;
             $datos['token'] = substr( md5(uniqid( rand(), true )), 0, 8);
             $datos['usuario_id'] = $_SESSION['id'];
             
             
             try {
             $registro = new Registro($datos); 
             $resultado = $registro->guardar();
                echo json_encode($resultado); 
             } catch (\Throwable $th) {
                echo json_encode([
                    'resultado' => 'error'
                ]);
             }
         }
    }

 
    public static function conferencias(Router $router) {

        if(!is_auth()) {
            header('Location: /login');
        }


        //validar que el usuario tenga el plan presencial
        $usuario_id = $_SESSION['id'];
        $registro = Registro::where('usuario_id', $usuario_id);

        if($registro->paquete_id !== "1") {
            header('Location: /');
        }



        $router->render('registro/conferencias', [
            'titulo' => 'Elige Workshops y Conferencias',
            

        ]);
    }


}