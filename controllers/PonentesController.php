<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class PonentesController {

    public static function index(Router $router){

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1) {
            header('Location: /admin/ponentes?page=1');
        }

        $registros_por_pagina = 10;

        $total = Ponente::total();

        debuguear(count($total));

        $total = 100;

        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        debuguear($paginacion);
        
        $ponentes = Ponente::all();

        if(is_admin()) {
            header('Location: /login');
        }

        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes / Conferencistas',
            'ponentes' => $ponentes,
        ]);
        
    }

    public static function crear(Router $router){

        if(is_admin()) {
            header('Location: /login');
        }

        $alertas = [];
        $ponente = new Ponente;


        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if(is_admin()) {
                header('Location: /login');
            }

            if(!empty($_FILES['imagen']['tmp_name'])){
                
                $carpetas_imagenes = '../public/imagenes/speakers';

                // Crear la carpeta si no existe.
                if(!is_dir($carpetas_imagenes)) {
                    mkdir($carpetas_imagenes, 0755, true);
                }
                     $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                     $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));
                
                $_POST['imagen'] = $nombre_imagen;

            }

            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);

            $ponente->sincronizar($_POST);
            
            // Validar alertas
            $alertas = $ponente->validar();

            //guardar registro
            if(empty($alertas)) {


                //Guardar las imagenes
                $imagen_png->save($carpetas_imagenes . '/' . $nombre_imagen . ".png");
                $imagen_webp->save($carpetas_imagenes . '/' . $nombre_imagen . ".webp");

                //Guardar 
                $resultado = $ponente->guardar();

                if($resultado){
                    header('Location: /admin/ponentes');
                }
            }
        }

        $router->render('admin/ponentes/crear', [
            'titulo' => 'Ponentes crear / Conferencistas',
            'alertas' => $alertas,
            'ponente' => $ponente,
            'redes' => json_decode($ponente->redes)

        ]);
    }

    public static function editar(Router $router){

        if(is_admin()) {
            header('Location: /login');
        }
        
        $alertas = [];
        //validar el id
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id) {
            header('Location: /admin/ponentes');
        }

        $ponente = Ponente::find($id);

        if(!$ponente) {
            header('Location: /admin/ponentes');
        }
        
        $ponente->imagen_actual = $ponente->imagen;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            if(is_admin()) {
                header('Location: /login');
            }
            
            if(!empty($_FILES['imagen']['tmp_name'])){
                
                $carpetas_imagenes = '../public/imagenes/speakers';

                // Crear la carpeta si no existe.
                if(!is_dir($carpetas_imagenes)) {
                    mkdir($carpetas_imagenes, 0755, true);
                }
                     $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                     $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));
                
                $_POST['imagen'] = $nombre_imagen;

            } else {
                $_POST['imagen'] = $ponente->imagen_actual;
            }   

            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);
            
            $ponente->sincronizar($_POST);

            $alertas = $ponente->validar();

            if(empty($alertas)) {
                if(isset($nombre_imagen)) {
                    $imagen_png->save($carpetas_imagenes . '/' . $nombre_imagen . ".png");
                    $imagen_webp->save($carpetas_imagenes . '/' . $nombre_imagen . ".webp");
                }

                $resultado = $ponente->guardar();

                if($resultado) {
                    header('Location: /admin/ponentes');
                }
            }   
        }
        
        $router->render('admin/ponentes/editar', [
            'titulo' => 'Actualizar ponente',
            'alertas' => $alertas,
            'ponente' => $ponente,
            'redes' => json_decode($ponente->redes)
        ]);
    }

    public static function eliminar(){
        if(is_admin()) {
            header('Location: /login');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST' ){
            $id = $_POST['id'];
            $ponente = Ponente::find($id);

            if(!isset($ponente) ) {
                header('Location: /admin/ponentes');
            }

            $resultado = $ponente->eliminar();

            if($resultado) {
                header('Location: /admin/ponentes');
            }
        }
    }
}