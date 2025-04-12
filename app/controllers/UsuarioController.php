<?php
require_once '../model/Usuario.php';

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"), true);
        $action = $data['action'] ?? '';

        if ($action === 'add' && !empty($data['title'])) {
            echo json_encode(Usuario::add($data['title']));
        } elseif ($action === 'delete' && !empty($data['id'])) {
            echo json_encode(Usuario::delete($data['id']));
        } elseif ($action === 'update' && !empty($data['id'])) {
            echo json_encode(Usuario::update($data['id'], $data['nombre'], $data['apellido'], $data['telefono'], $data['correo'], $data['estado'], $data['rol']));
        } else {
            throw new Exception("Acción no válida o parámetros incorrectos.");
        }
    } else {
        echo json_encode(Usuario::getAll());
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
