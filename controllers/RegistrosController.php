<?php

namespace Controllers;


use MVC\Router;


class RegistrosController {

    public static function crear(Router $router){
       
        $router->render('registro/crear', [
            'titulo' => 'Finalizar Registro',
        ]);

    }

public static function gratis(Router $router){
       
        $router->render('registro/gratis', [
            'titulo' => 'Finalizar Registro',
        ]);

    }

    

   
}