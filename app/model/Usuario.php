<?php
require_once __DIR__ . '/../../config/database.php';


class Usuario
{
    public static function getAll(): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }
    public static function add($title)
    {
        global $conn;

        $sql = "INSERT INTO usuario (title) VALUES ('$title')";

        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function delete($id)
    {
        global $conn;

        $sql = "DELETE FROM tasks WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function update($id, $nombre, $apellido, $telefono, $correo, $estado, $rol)
    {
        global $conn;
        $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ?, correo = ?, estado = ?, rol = ? WHERE id_usuario = ?");

        $stmt->bind_param("ssssiii", $nombre, $apellido, $telefono, $correo, $estado, $rol, $id);
        if ($stmt->execute()) {
            $stmt->close();
            return 1;
        } else {
            $stmt->close();
            return 0;
        }
    }
    public static function buscarUsuario($id){
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();
        $stmt->close();
        return $usuario;
    }
}
