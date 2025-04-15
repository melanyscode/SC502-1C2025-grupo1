<?php
require_once '../model/MascotaPerdida.php';
require_once __DIR__ . '/../../config/errores.php';

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input"), true);
        $action = $data['action'] ?? '';

        if ($action === 'add' && !empty($data['title'])) {
            echo json_encode(MascotaPerdida::add($data['title']));
        } elseif ($action === 'delete' && !empty($data['id'])) {
            echo json_encode(MascotaPerdida::delete($data['id']));
        } elseif ($action === 'completed' && !empty($data['id'])) {
            echo json_encode(MascotaPerdida::update($data['id']));
        } else {
            throw new Exception("Acción no válida o parámetros incorrectos.");
        }
    } else {
        echo json_encode(MascotaPerdida::getAll());
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>