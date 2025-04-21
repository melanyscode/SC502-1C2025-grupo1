    <?php   
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        var_dump($usuario);
    }

    require_once __DIR__ . '/config/database.php';

    if (isset($_GET['c']) && isset($_GET['a'])) {
        $controller = $_GET['c'];
        $action = $_GET['a'];
    } else {
        $controller = 'inicio';
        $action = 'inicio';
    }

    require_once("rutas.php");
    ?>

