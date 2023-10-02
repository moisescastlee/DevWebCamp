<?php

namespace Controllers;

use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Categoria;
use Model\Evento;

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
        $eventos = Evento::all();

        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar Eventos',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas
        ]);
    }
}