<?php

function call($controller, $action)
{
    require_once('controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'inicio':
            $controller = new inicioController();
            break;
        case 'landing':
            $controller = new landingController();
            break;

        default:
           
            $action = 'error';
            break;
    }

    $controller->{$action}();
}

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'inicio';
$action = isset($_GET['action']) ? $_GET['action'] : 'inicio';

$controllers = array('inicio' => ['inicio', 'error'],
                    'landing' => ['nosotros', 'contacto', 'encuentrame']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        //llamada al controller y la action
        call($controller, $action);
    } else {
        //devolver un mensaje de error de que la action no existe
        call($controller, 'error');
    }
} else {
    //devolver un mensaje que el controller no existe       
    call('inicio', 'error');
}
