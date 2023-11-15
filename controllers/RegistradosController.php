<?php

namespace Controllers;


use MVC\Router;

class RegistradosController {

    public static function index(Router $router){
        if(!is_admin()) {
            header('Location: /login');
        }
        
        $router->render('admin/Registrados/index', [
            'titulo' => 'Usuario Registrados',
        ]);
        
    }

}