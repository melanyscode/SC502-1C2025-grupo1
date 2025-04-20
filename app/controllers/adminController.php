<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/MascotaAdopcion.php';
require_once __DIR__ . '/../models/Solicitante.php';
class adminController
{
    public function inicio()
    {
        $titulo = "Administrador";
        $usuarios = Usuario::getAll();
        $titulo = "Pefil de Usuario";
        require_once("app/views/head.php");

        require_once("app/views/admin/admin.php");
    }
    // CRUD USUARIOS
    public function usuario()
    {
        $titulo = "Administrador";
        $usuarios = Usuario::getAll();
        $titulo = "Usuarios";
        require_once("app/views/head.php");

        require_once("app/views/admin/usuarios.php");
    }
    public function agregarUsuario()
    {
        $titulo = "Agregar Usuario";
        require_once("app/views/head.php");
        require_once("app/views/admin/agregarUsuario.php");
    }
    //guarda el usuario
    public function guardarUsuario()
    {
        if (isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['estado'], $_POST['rol'])) {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $estado = $_POST['estado'];
            $rol = $_POST['rol'];

            $rutaWeb = null;
            $rutaImagen = null;
            if (isset($_FILES['addImageUsuario']) && $_FILES['addImageUsuario']['error'] === 0) {
                $rutaTemporal = $_FILES['addImageUsuario']['tmp_name'];
                $nombreArchivo = uniqid() . "_" . basename($_FILES['addImageUsuario']['name']);
                $directorioDestino = 'app/uploads/';
                $rutaImagen = $directorioDestino . $nombreArchivo;
                $rutaWeb = 'app/uploads/' . $nombreArchivo;
                if (!is_dir($directorioDestino)) {
                    mkdir($directorioDestino, 0755, true);
                }

                move_uploaded_file($rutaTemporal, $rutaImagen);
            }


            Usuario::add($nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaWeb);
            header("Location: index.php?c=admin&a=usuario");
        } else {
            echo "No se pudo agregar el usuario";
        }
    }
    public function editarUsuario()
    {
        $titulo = "Editar Usuario";
        require_once("app/views/head.php");
        require_once("app/views/admin/editarUsuario.php");
    }
    public function guardarEditUsuario()
    {
        session_start();
        if (isset($_POST['id'], $_POST['nombreEdit'], $_POST['apellidoEdit'], $_POST['telefonoEdit'], $_POST['correoEdit'], $_POST['estadoEdit'], $_POST['rolEdit'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombreEdit'];
            $apellido = $_POST['apellidoEdit'];
            $telefono = $_POST['telefonoEdit'];
            $correo = $_POST['correoEdit'];
            $estado = $_POST['estadoEdit'];
            $rol = $_POST['rolEdit'];
            $direccion = $_POST['direccionEdit'];

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


            Usuario::update($id, $nombre, $apellido, $telefono, $correo, $direccion, $estado, $rol, $rutaWeb);
            if ($_SESSION['user']['id_usuario'] == $id) {
                $_SESSION['user']['nombre'] = $nombre;
                $_SESSION['user']['correo'] = $correo;
                $_SESSION['user']['telefono'] = $telefono;
                $_SESSION['user']['estado'] = $estado;
                $_SESSION['user']['id_rol'] = (int)$rol;

                if ($rutaImagen) {
                    $_SESSION['user']['img_url'] = $rutaWeb;
                }
                header("Location: index.php?c=admin&a=usuario");
            } else {
                header("Location: index.php?c=admin&a=usuario");
            }
        }
    }

    public function eliminarUsuario()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            if (Usuario::delete($id)) {
                header('Location: index.php?c=admin&a=usuario');
                exit;
            } else {
                echo "Error al eliminar el usuario.";
            }
        } else {
            echo "Acceso no permitido.";
        }
    }

    //CRUD ADOPCIONES
    public function adopciones()
    {
        $titulo = "Adopciones";
        $adopciones = MascotaAdopcion::getAll();
        require_once("app/views/head.php");

        require_once("app/views/admin/adopcionesAdmin.php");
    }
    public function editarAnuncio()
    {
        $titulo = "Editar Anuncio";
        require_once("app/views/head.php");

        require_once("app/views/admin/editarAnuncio.php");
    }
    public function agregarAdopcion()
    {
        $titulo = "Agregar Anuncio";
        require_once("app/views/head.php");

        require_once("app/views/admin/agregarAnuncio.php");
    }
    public function eliminarAdopcion()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            if (MascotaAdopcion::delete($id)) {

                header('Location: index.php?c=admin&a=adopciones');
                exit;
            } else {
                echo "Error al eliminar la publicacion de adopcion.";
            }
        } else {
            echo "Acceso no permitido.";
        }
    }

    //FIN CRUD ADOPCIONES



    public function blog()
    {
        $titulo = "Blog";
        require_once("app/views/head.php");

        require_once("app/views/admin/blogAdmin.php");
    }

    public function agregarArticulo()
    {
        $titulo = "Agregar Articulo";
        require_once("app/views/head.php");

        require_once("app/views/admin/agregarArticulo.php");
    }
    public function editarArticulo()
    {
        $titulo = "Agregar Articulo";
        require_once("app/views/head.php");

        require_once("app/views/admin/aditarArticulo.php");
    }
    //CRUD SOLICITANTES
    public function solicitantes()
    {
        $titulo = "Solicitantes";
        $solicitantes = Solicitante::getAll();
        require_once("app/views/head.php");

        require_once("app/views/admin/solicitante.php");
    }

    public function eliminarSolicitante()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            if (Solicitante::delete($id)) {
                header('Location: index.php?c=admin&a=solicitantes');
                exit;
            } else {
                echo "Error al eliminar el solicitante.";
            }
        } else {
            echo "Acceso no permitido.";
        }
    }

    public function agregarSolicitante()
    {
        $titulo = "Agregar Solicitante";
        require_once("app/views/head.php");
        require_once("app/views/admin/agregarSolicitante.php");
    }
    //guarda el Solicitante
    public function guardarSolicitante()
    {
        if (isset($_POST['acuerdo'], $_POST['tipo_vivienda'], $_POST['descripcion_vivienda'], $_POST['patio'], $_POST['mudanza'], $_POST['cuido'], $_POST['gastos'], $_POST['post_adopcion'])) {

            $acuerdo = $_POST['acuerdo'];
            $tipo_vivienda = $_POST['tipo_vivienda'];
            $descripcion_vivienda = $_POST['descripcion_vivienda'];
            $patio = $_POST['patio'];
            $mudanza = $_POST['mudanza'];
            $cuido = $_POST['cuido'];
            $gasto = $_POST['gastos'];
            $post_adopcion = $_POST['post_adopcion'];

            $resultado = Solicitante::add($acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gasto, $post_adopcion);
            var_dump($resultado);
            /*
        header("Location: index.php?c=admin&a=solicitantes");
        } else {
        echo "No se pudo agregar el Solicitante";
        }
        */
        }
    }
    public function editarSolicitante()
    {
        $titulo = "Editar Solicitante";
        require_once("app/views/head.php");
        require_once("app/views/admin/editarSolicitante.php");
    }
    public function guardarEditSolicitante()
    {
        if (isset($_POST['id'], $_POST['acuerdo'], $_POST['tipo_vivienda'], $_POST['descripcion_vivienda'], $_POST['patio'], $_POST['mudanza'], $_POST['cuido'], $_POST['gastos'], $_POST['post_adopcion'])) {
            $id = $_POST['id'];
            $acuerdo = $_POST['acuerdo'];
            $tipo_vivienda = $_POST['tipo_vivienda'];
            $descripcion_vivienda = $_POST['descripcion_vivienda'];
            $patio = $_POST['patio'];
            $mudanza = $_POST['mudanza'];
            $cuido = $_POST['cuido'];
            $gasto = $_POST['gastos'];
            $post_adopcion = $_POST['post_adopcion'];
            $resultado = Solicitante::update($id, $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gasto, $post_adopcion);



            if ($resultado) {
                header("Location: index.php?c=admin&a=solicitantes");
            } else {
                echo "error en la base de datos";
            }
        } else {
            echo "No se pudo agregar el solicitante";
        }
    }
    //FIN CRUD SOLICITANTES

    public function error()
    {
        echo "Error en el controller de admin";
    }
}
