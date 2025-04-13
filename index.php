
<?php



$pagina = $_GET['p'] ?? 'inicio';

switch ($pagina) {
    case 'inicio':
    case 'nosotros':
    case 'contacto':
        $view = './app/views/landing/'.$pagina.'.php';
        break;
    case 'blog': 
        $view = './app/views/landing/blog.php';
        break;
    case 'encuentrame': 
        $view = './app/views/landing/encuentrame.php';
        break;
    case 'calendario': 
        $view = './app/views/landing/calendario.php';
        break;
    case 'adopta': 
        $view = './app/views/landing/adoptante.php';
        break;
    case 'adopta': 
        $view = './app/views/landing/adoptante.php';
        break;
    case 'admin': 
        $view = './app/views/admin/usuarios.php';
        break;
    case 'usuarioagregar': 
        $view = './app/views/admin/agregarUsuario.php';
        break;
    case 'editarusuario': 
        $view = './app/views/admin/editarUsuario.php';
        break;
    case 'adopciones':
        $view = './app/views/admin/adopcionesAdmin.php';
        break;
    case 'perfil':
        $view = './app/views/usuario/perfil.php';
        break;
    case 'editarperfil':
        $view = './app/views/usuario/editarPerfil.php';
        break;
    case 'crearpost':
        $view = './app/views/usuario/formPerdida.php';
        break;
    case 'login':
        $view = './app/views/usuario/login.php';
        break;
    case 'registrarse':
        $view = './app/views/usuario/registro.php';
        break;
    case 'logout':
        require_once './app/model/Usuario.php';
        $controller = new Usuario();
        $controller->logout();
        $view ='./app/views/landing/inicio.php';
        break;
    default:
        $view = './app/views/layout.php';
        break;
}

require_once './app/views/layout.php';
