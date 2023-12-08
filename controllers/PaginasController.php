<?php
namespace Controllers;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {
        $router->render('paginas/index', [
            'titulo' => 'Inicio'

        ]);
    }

    public static function evento(Router $router) {
        $router->render('paginas/devwebcamp', [
            'titulo' => 'Sobre DevWebCam'
    
        ]);
    }

    public static function  paquetes(Router $router) {
        $router->render('paginas/paquetes', [
            'titulo' => 'Paquetes DevWebCam'
        
        ]);
    }   

    public static function conferencia(Router $router) {
        $router->render('paginas/workshops-conferencias', [
            'titulo' => 'Conferencias & WorkShops'
    
        ]);
    }
}
