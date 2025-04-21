<?php
require_once 'config/database.php'; // archivo donde se conecta a la BD

$sql = "SELECT id_usuario, password FROM usuario";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $id = $row['id_usuario'];
    $passwordPlano = $row['password'];

    $hashedPassword = password_hash($passwordPlano, PASSWORD_DEFAULT);

    $update = $conn->prepare("UPDATE usuario SET password = ? WHERE id_usuario = ?");
    $update->bind_param("si", $hashedPassword, $id);
    $update->execute();
}

echo "Contraseñas actualizadas correctamente.";
