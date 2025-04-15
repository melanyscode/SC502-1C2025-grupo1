<?php
require_once '../model/MascotaAdopcion.php';
require_once __DIR__ . '/../../config/errores.php';

header('Content-Type: application/json');
try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {  
        echo json_encode(MascotaAdopcion::getAll());
    }
} catch (Exception $e) {
    error_log("[" . date('Y-m-d H:i:s') . "] Error de conexión: " . $e->getMessage() . "\n", 3, __DIR__ . '/../../errores.log');
    echo json_encode(["error" => $e->getMessage()]);
   
}
