<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIEventos;
use Controllers\APIPonentes;
use Controllers\AuthController;
use Controllers\EventosController;
use Controllers\RegalosController;
use Controllers\PonentesController;
use Controllers\DashboardController;
use Controllers\RegistradosController;


$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

//dashboardadmin
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

//ponentes
$router->get('/admin/ponentes', [PonentesController::class, 'index']);
$router->get('/admin/ponentes/crear', [PonentesController::class, 'crear']);
$router->post('/admin/ponentes/crear', [PonentesController::class, 'crear']);
$router->get('/admin/ponentes/editar', [PonentesController::class, 'editar']);
$router->post('/admin/ponentes/editar', [PonentesController::class, 'editar']);
$router->post('/admin/ponentes/eliminar', [PonentesController::class, 'eliminar']);

//Eventos
$router->get('/admin/eventos', [EventosController::class, 'index']);
$router->get('/admin/eventos/crear', [EventosController::class, 'crear']);
$router->post('/admin/eventos/crear', [EventosController::class, 'crear']);

//API
$router->get('/api/eventos-horario', [APIEventos::class, 'index']);
$router->get('/api/ponentes', [APIPonentes::class, 'index']);


//Registrados
$router->get('/admin/registrados', [RegistradosController::class, 'index']);

//Regalos
$router->get('/admin/regalos', [RegalosController::class, 'index']);

$router->comprobarRutas();

//AREA de ADMINISTRACION


