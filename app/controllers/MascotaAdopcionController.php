<?php
require_once '../model/MascotaAdopcion.php';

header('Content-Type: application/json');
try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {  
        echo json_encode(MascotaAdopcion::getAll());
    }
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
