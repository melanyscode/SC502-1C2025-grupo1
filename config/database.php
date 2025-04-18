<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pawfind";

try {
    $conn = new mysqli($host, $user, $password, $database);

} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage());

    var_dump($e);
}
