<?php
namespace Controllers;
use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Evento;
use Model\Ponente;
use Model\Categoria;

class PaginasController {
    public static function index(Router $router) {

        $eventos = Evento::ordenar('hora_id', 'ASC');

        $eventos_formateados = [];
        foreach($eventos as $evento) {

            $evento->categoria = Categoria::find($evento->categoria_id);
            $evento->dia = Dia::find($evento->dia_id);
            $evento->ponente = Ponente::find($evento->ponente_id);
            $evento->hora = Hora::find($evento->hora_id);

            if($evento->dia_id === "1" && $evento->categoria_id === "1"){
                $eventos_formateados['conferencias_v'][] = $evento;
            }

            if($evento->dia_id === "2" && $evento->categoria_id === "1"){
                $eventos_formateados['conferencias_s'][] = $evento;
            }

            if($evento->dia_id === "1" && $evento->categoria_id === "2"){
                $eventos_formateados['workshops_v'][] = $evento;
            }

            if($evento->dia_id === "2" && $evento->categoria_id === "2"){
                $eventos_formateados['workshops_s'][] = $evento;
            }
        }

        //Obtener el total de cada ponente 
        $ponentes = Ponente::total();
        $conferencias = Evento::total('categoria_id', 1);
        $workshops = Evento::total('categoria_id', 2);
        $asistentes = Ponente::total('nombre', 3);

        debuguear($asistentes);
        


        $router->render('paginas/index', [
            'titulo' => 'Inicio',
            'eventos' => $eventos_formateados,
            'ponentes' => $ponentes,
            'conferencias' => $conferencias,
            'workshops' => $workshops
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

        $eventos = Evento::ordenar('hora_id', 'ASC');

        $eventos_formateados = [];
        foreach($eventos as $evento) {

            $evento->categoria = Categoria::find($evento->categoria_id);
            $evento->dia = Dia::find($evento->dia_id);
            $evento->ponente = Ponente::find($evento->ponente_id);
            $evento->hora = Hora::find($evento->hora_id);

            if($evento->dia_id === "1" && $evento->categoria_id === "1"){
                $eventos_formateados['conferencias_v'][] = $evento;
            }

            if($evento->dia_id === "2" && $evento->categoria_id === "1"){
                $eventos_formateados['conferencias_s'][] = $evento;
            }

            if($evento->dia_id === "1" && $evento->categoria_id === "2"){
                $eventos_formateados['workshops_v'][] = $evento;
            }

            if($evento->dia_id === "2" && $evento->categoria_id === "2"){
                $eventos_formateados['workshops_s'][] = $evento;
            }
        }

        $router->render('paginas/conferencias', [
            'titulo' => 'Conferencias & WorkShops',
            'eventos' => $eventos_formateados
        ]);
    }
}
