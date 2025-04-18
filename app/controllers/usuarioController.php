<?php
require_once __DIR__ . '/../models/Usuario.php';

class usuarioController
{



    public function perfil()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        file_put_contents('session_id_debug.txt', session_id());
        var_dump($_SESSION);

        if (isset($_SESSION['user'])) {
            $usuario = $_SESSION['user'];
        } else {
          
            echo "no sirvio";
            exit();
        }
        $titulo = "Pefil de Usuario";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/perfil.php");
        require_once("app/views/footer.php");
    }

    public function login()
    {
        session_start();
        session_destroy();
        $titulo = "Inicio de Sesión";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/login.php");
        require_once("app/views/footer.php");
    }
    public function loginPost()
    {
        session_start();
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $usuario = Usuario::login($correo, $password);
        if ($usuario != false) {
            
            $_SESSION['user'] = $usuario;
            file_put_contents('session_id.txt', session_id());

            session_write_close(); // asegura el guardado
            header("Location: index.php?c=usuario&a=perfil");
            exit;
        } else {
            $error = "Correo o contraseña incorrectos";
            $titulo = "Pefil de Usuario";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/usuario/perfil.php");
            require_once("app/views/footer.php");
          
        }
    }

    public function registro()
    {

        $titulo = "Registrarse";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/registro.php");
        require_once("app/views/footer.php");
    }
    public function registroPost()
    {
        $nombre = $_POST['nombreRegistro'];
        $apellido = $_POST['apellidoRegistro'];
        $correo = $_POST['correoRegistro'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $rol = $_POST['rol'];
        if (Usuario::registrar($correo, $nombre, $apellido,  $password, $estado, $rol)) {
            $titulo = "Registrarse";
            $mensaje = "Usuario registrado satisfactoriamente";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/usuario/registro.php");
            require_once("app/views/footer.php");
        }
    }

    public function error()
    {
        echo "error";
    }
}
