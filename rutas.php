<?php


function call($controller, $action)
{
    require_once('app/controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'inicio':
            $controller = new inicioController();
            break;
        case 'landing':
            $controller = new landingController();
            break;
        case 'usuario':
            $controller = new usuarioController();
            break;
        case 'admin':
            $controller = new adminController();

            break;

        default:

            $action = 'error';
            break;
    }

    $controller->{$action}();
}

$controller = isset($_GET['c']) ? $_GET['c'] : 'inicio';
$action = isset($_GET['a']) ? $_GET['a'] : 'inicio';

$controllers = array(
    'inicio' => ['inicio', 'error'],




    'landing' => ['nosotros', 'contacto', 'encuentrame', 'blog', 'calendario', 'adopta', 'detalle', 'solicitud', 'articulo'],
    'usuario' => ['perfil', 'login', 'registro', 'loginPost', 'registroPost', 'logout', 'perdido', 'editarPerfil', 'editarPerfilPost', 'mascotaPerdida', 'editarPerdido', 'editMascotaPerdida'],
    'admin' => ['inicio', 'adopciones', 'articulo', 'agregarArticulo', 'editarArticulo', 'anuncio', 'agregarAnuncio', 'blog', 'solicitantes', 'usuario', 'agregarUsuario', 'guardarUsuario', 'editarUsuario', 'eliminarUsuario', 'guardarEditUsuario', 'editarAnuncio',  'eliminarAdopcion', 'eliminarSolicitante', 'editarSolicitante', 'agregarSolicitante', 'guardarEditSolicitante', 'guardarSolicitante', 'solicitante', 'guardarAnuncio', 'guardarEditAnuncio',  'guardarArticulo', 'guardarEditArticulo', 'eliminarArticulo']

);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        //llamada al controller y la action
        call($controller, $action);
    } else {
        //devolver un mensaje de error de que la action no existe
        call($controller, 'error accion no existe');
    }
} else {
    //devolver un mensaje que el controller no existe       
    call('inicio', 'error no existe');
}
