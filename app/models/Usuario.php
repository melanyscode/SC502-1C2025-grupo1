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
        try {
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
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }

    public static function delete($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("DELETE FROM usuario WHERE id_usuario = ?");

            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }

    public static function update($id, $nombre, $apellido, $telefono, $correo, $direccion, $estado, $rol, $rutaImagen)
    {
        global $conn;
        try {
            if ($rutaImagen) {
                $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ?, correo = ?,  direccion = ?, estado = ?, id_rol = ?, img_url = ? WHERE id_usuario = ?");
                $stmt->bind_param("ssssssssi", $nombre, $apellido, $telefono, $correo, $direccion, $estado, $rol, $rutaImagen, $id);
            } else {

                $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ?, correo = ?,  direccion = ?, estado = ?, id_rol = ? WHERE id_usuario = ?");
                $stmt->bind_param("sssssssi", $nombre, $apellido, $telefono, $correo, $direccion, $estado, $rol, $id);
            }

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }
    public static function buscarUsuario($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $usuario = $resultado->fetch_assoc();
            $stmt->close();
            return $usuario;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }

    public static function login($correo, $password)
    {
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($password, $usuario['password'])) {
                return $usuario;
                var_dump($usuario);
            } else {
                echo "<p><strong>Contraseña ingresada:</strong> $password</p>";
                echo "<p><strong>Hash en BD:</strong> " . $usuario['password'] . "</p>";
                echo "<p>Verificación fallida.</p>";
                exit();
            }
        } else {
            echo "<p>Usuario no encontrado.</p>";
            exit();
        }
    }

    public static function registrar($correo, $nombre, $apellido, $password, $estado, $rol)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT id_usuario FROM usuario WHERE correo = ?");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                return ["error" => "Ya existe un usuario con ese correo."];
            }

            $stmt->close();

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, correo, password, estado, id_rol) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $nombre, $apellido, $correo, $passwordHash, $estado, $rol);

            if ($stmt->execute()) {
                return 1;
            } else {
                return ["error" => "Error al registrar usuario."];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al registrar usuario: " . $e->getMessage()];
        }
    }
    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
        header("Location: index.php?c=usuario&a=login");
        exit();
    }

    public static function getAdmins(): array
    {
        global $conn;
        try {
            $sql = "SELECT * FROM usuario WHERE id_rol = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener administradores: " . $e->getMessage()];
        }
    }
}
