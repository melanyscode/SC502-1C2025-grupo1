<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/MascotaPerdida.php';

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

            $_SESSION['user'] = [
                'id_usuario' => $usuario['id_usuario'],
                'nombre' => $usuario['nombre'],
                'apellido' => $usuario['apellido'],
                'correo' => $usuario['correo'],
                'telefono' => $usuario['telefono'],
                'direccion' => $usuario['direccion'],
                'estado' => $usuario['estado'],
                'id_rol' => $usuario['id_rol'],
                'img_url' => $usuario['img_url'] ?? null
            ];

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
    public function editarPerfil()
    {
        $titulo = "Editar perfil";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/editarPerfil.php");
        require_once("app/views/footer.php");
    }
    public function perdido()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user'])) {
            $usuario = $_SESSION['user'];
        }
        $titulo = "Form mascota perdida";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/formPerdida.php");
        require_once("app/views/footer.php");
    }
    public function mascotaPerdida()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        session_start();
        $id = $_POST['id_usuario'];
        $nombre = $_POST['nombreMascota'];
        $raza = $_POST['razaPerdido'];
        $fecha = $_POST['fechaPerdido'];
        $descripcion = $_POST['descripcionPerdido'];
        $ubicacionMascota = $_POST['ubicacionMascota'];
        $estado = $_POST['estadoMascota'];
        $tipo = $_POST['tipoPerdido'];
        $comentario = $_POST['comentarioMascota'];
        $direccion = $_POST['descripcionPerdido'];
        $rutaWeb = "";
        $rutaImagen = null;
        if (isset($_FILES['imagenMascota']) && $_FILES['imagenMascota']['error'] === 0) {
            $rutaTemporal = $_FILES['imagenMascota']['tmp_name'];
            $nombreArchivo = uniqid() . "_" . basename($_FILES['imagenMascota']['name']);
            $directorioDestino = '../uploads/';
            $rutaImagen = $directorioDestino . $nombreArchivo;
            $rutaWeb = 'app/uploads/' . $nombreArchivo;
            if (!is_dir($directorioDestino)) {
                mkdir($directorioDestino, 0755, true);
            }

            move_uploaded_file($rutaTemporal, $rutaImagen);
        }
        $exito = MascotaPerdida::add($id, $nombre, $raza, $tipo, $fecha, $descripcion, $ubicacionMascota, $estado, $comentario, $direccion, $rutaWeb);
        if ($exito) {
            header("Location: index.php?c=usuario&a=perfil");
            exit();
        } else {
            echo "No sirvio";
            exit();
        }
    }
    public function editarPerdido(){
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/usuario/formPerdidaEdit.php");
        require_once("app/views/footer.php");
    }
    public function editMascotaPerdida(){

    }

    public function editarPerfilPost()
    {
        session_start();
        $id = $_POST['idEditPerfil'];
        $nombre = $_POST['nombreEditPerfil'];
        $apellido = $_POST['apellidoEditPerfil'];
        $correo = $_POST['correoEditPerfil'];
        $telefono = $_POST['telefonoEditPerfil'];
        $estado = $_POST['estadoEditPerfil'];
        $rol = $_POST['rolEditPerfil'];
        $direccion = $_POST['direccionEditPerfil'];
        $rutaWeb = "";
        $rutaImagen = null;
        if (isset($_FILES['editFotoUsuario']) && $_FILES['editFotoUsuario']['error'] === 0) {
            $rutaTemporal = $_FILES['editFotoUsuario']['tmp_name'];
            $nombreArchivo = uniqid() . "_" . basename($_FILES['editFotoUsuario']['name']);
            $directorioDestino = 'app/uploads/';
            $rutaImagen = $directorioDestino . $nombreArchivo;
            $rutaWeb = 'app/uploads/' . $nombreArchivo;
            if (!is_dir($directorioDestino)) {
                mkdir($directorioDestino, 0755, true);
            }

            move_uploaded_file($rutaTemporal, $rutaImagen);
        }


        $exito = Usuario::update($id, $nombre, $apellido, $telefono, $correo, $direccion, $estado, $rol, $rutaWeb);
        if ($exito && $_SESSION['user']['id_usuario'] == $id) {
            $_SESSION['user']['nombre'] = $nombre;
            $_SESSION['user']['correo'] = $correo;
            $_SESSION['user']['telefono'] = $telefono;
            $_SESSION['user']['estado'] = $estado;
            $_SESSION['user']['id_rol'] = (int)$rol;

            if ($rutaImagen) {
                $_SESSION['user']['img_url'] = $rutaWeb;
            }
            header("Location: index.php?c=usuario&a=perfil");
        }
    }
    public function logout()
    {
        Usuario::logout();
    }

    public function error()
    {
        echo "error";
    }

    public function guardarPerdido() {}
}
