<?php

namespace Controllers;

use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Categoria;


class EventosController {

    public static function index(Router $router){
        $router->render('admin/eventos/index', [
            'titulo' => 'Conferencias / WorkShops',
        ]);
        
    }

    public static function crear(Router $router) {

        $alertas = [];
        $categorias = Categoria::all();
        $dias = Dia::all('ASC');
        $horas = Hora::all('ASC');

        

        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar Eventos',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas
        ]);
    }
}