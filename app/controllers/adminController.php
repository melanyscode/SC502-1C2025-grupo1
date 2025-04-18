<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/MascotaAdopcion.php';
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
    public function guardarUsuario(){
        if(isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['estado'], $_POST['rol'])){
            
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $estado = $_POST['estado'];
            $rol = $_POST['rol'];

            $rutaWeb =null;
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
        }else{
            echo "No se pudo agregar el usuario";
        }    
       
    }
    public function editarUsuario(){
        $titulo = "Editar Usuario";
        require_once("app/views/head.php");
        require_once("app/views/admin/editarUsuario.php");
    }
    public function guardarEditUsuario(){
        if(isset($_POST['id'], $_POST['nombreEdit'], $_POST['apellidoEdit'], $_POST['telefonoEdit'], $_POST['correoEdit'], $_POST['estadoEdit'], $_POST['rolEdit'])){
            $id = $_POST['id'];
            $nombre = $_POST['nombreEdit'];
            $apellido = $_POST['apellidoEdit'];
            $telefono = $_POST['telefonoEdit'];
            $correo = $_POST['correoEdit'];
            $estado = $_POST['estadoEdit'];
            $rol = $_POST['rolEdit'];
        
            $rutaWeb ="";
            $rutaImagen = null;
            if (isset($_FILES['editFotoUsuario']) && $_FILES['editFotoUsuario']['error'] === 0) {
                $rutaTemporal = $_FILES['editFotoUsuario']['tmp_name'];
                $nombreArchivo = uniqid() . "_" . basename($_FILES['editFotoUsuario']['name']);
                $directorioDestino = '../uploads/';
                $rutaImagen = $directorioDestino . $nombreArchivo;
                $rutaWeb = 'app/uploads/' . $nombreArchivo;
                if (!is_dir($directorioDestino)) {
                    mkdir($directorioDestino, 0755, true);
                }
        
                move_uploaded_file($rutaTemporal, $rutaImagen);
            }
        
    
           Usuario::update($id, $nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaWeb);
           header("Location: index.php?c=admin&a=usuario");
        }else{
            echo "No se pudo agregar el usuario";
        }    
    }
    public function eliminarUsuario(){
        if(isset($_POST['id'])){
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
   
    public function solicitantes()
    {
        $titulo = "Solicitantes";
        require_once("app/views/head.php");

        require_once("app/views/admin/solicitante.php");
    }

    public function error()
    {
        echo "Error en el controller de admin";
    }
}
