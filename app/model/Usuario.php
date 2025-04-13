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
    public static function add($nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaImagen)
    {
        global $conn;
        if ($rutaImagen) {
            $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, telefono, correo, estado, id_rol, img_url) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaImagen);
        } else {

            $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, telefono, correo, estado, id_rol) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssii", $nombre, $apellido, $telefono, $correo, $estado, $rol);
        }

        if ($stmt->execute()) {
            $stmt->close();
            return 1;
        } else {
            $stmt->close();
            return 0;
        }
    }

    public static function delete($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM usuario WHERE id_usuario = ?");

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $stmt->close();
            return 1;
        } else {
            $stmt->close();
            return 0;
        }
    }

    public static function update($id, $nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaImagen)
    {
        global $conn;
        if ($rutaImagen) {
            $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ?, correo = ?, estado = ?, id_rol = ?, img_url = ? WHERE id_usuario = ?");
            $stmt->bind_param("sssssssi", $nombre, $apellido, $telefono, $correo, $estado, $rol, $rutaImagen, $id);

            
        } else {

            $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ?, correo = ?, estado = ?, id_rol = ? WHERE id_usuario = ?");
            $stmt->bind_param("ssssssi", $nombre, $apellido, $telefono, $correo, $estado, $rol, $id);
        }
       
        if ($stmt->execute()) {
            $stmt->close();
            return 1;
        } else {
            $stmt->close();
            return 0;
        }
    }
    public static function buscarUsuario($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();
        $stmt->close();
        return $usuario;
    }

    public static function login($correo, $password)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                return $user;
                
            }
        } else {
            return 0;
        }
    }

    public static function registrar($correo, $nombre, $apellido, $password, $estado, $rol)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido,  correo, password, estado, id_rol) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $nombre, $apellido, $correo, $password, $estado, $rol);


        if ($stmt->execute()) {
            return 1;
        } else {
            return 0;
        }
    }
    public static function logout()
{
    session_start();
    session_unset();
    session_destroy();
    setcookie(session_name(), '', time() - 3600, '/');
    header("Location: index.php?p=inicio");
    exit();
}
}
