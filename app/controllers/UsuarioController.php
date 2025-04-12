<?php
require_once '../model/Usuario.php';

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {  
        echo json_encode(Usuario::getAll());
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $action = $_POST['action'] ?? '';

        if ($action === 'add' && isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['estado'], $_POST['rol'])) {
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
                $directorioDestino = '../uploads/';
                $rutaImagen = $directorioDestino . $nombreArchivo;
                $rutaWeb = 'app/uploads/' . $nombreArchivo;
                if (!is_dir($directorioDestino)) {
                    mkdir($directorioDestino, 0755, true);
                }
        
                move_uploaded_file($rutaTemporal, $rutaImagen);
            }

            $resultado = Usuario::add($nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaWeb);
            echo json_encode($resultado);
        } elseif ($action === 'delete' && isset($_POST['id'])) {
            echo json_encode(Usuario::delete($_POST['id']));
        } elseif ($action === 'update' && isset($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['estado'], $_POST['rol'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $estado = $_POST['estado'];
            $rol = $_POST['rol'];
        
            $rutaWeb =null;
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
        
    
            $resultado = Usuario::update($id, $nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaWeb);
        
            echo json_encode($resultado);
        } else{

        }
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
