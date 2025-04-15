<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pawfind";

try {
    $conn = new mysqli($host, $user, $password, $database);

} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage());
    error_log("[" . date('Y-m-d H:i:s') . "] Error de conexión: " . $e->getMessage() . "\n", 3, __DIR__ . '/errores.log');
}
