    <?php
        if(isset($_GET['controller']) && isset($_GET['action']))
        {
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        }else{
            $controller = 'inicio';
            $action = 'inicio';
        }

        require_once("rutas.php");
    ?>

