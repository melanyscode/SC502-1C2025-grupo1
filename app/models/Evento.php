<?php
require_once __DIR__ . '/../../config/database.php';

class Evento
{
    public static function getAll(): array
    {
        global $conn;
        try {
            $sql = "SELECT * FROM evento";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener eventos: " . $e->getMessage()];
        }
    }

    public static function add($id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion, $imagen_url)
    {
        global $conn;
        try {
            if ($imagen_url) {
                $stmt = $conn->prepare("INSERT INTO evento (id_usuario, id_categoria, nombre, descripcion, fecha, hora, ubicacion, imagen_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iissssss", $id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion, $imagen_url);
            } else {
                $stmt = $conn->prepare("INSERT INTO evento (id_usuario, id_categoria, nombre, descripcion, fecha, hora, ubicacion) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iisssss", $id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion);
            }

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al agregar evento: " . $e->getMessage()];
        }
    }

    public static function update($id_evento, $id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion, $imagen_url)
    {
        global $conn;
        try {
            if ($imagen_url) {
                $stmt = $conn->prepare("UPDATE evento SET id_usuario = ?, id_categoria = ?, nombre = ?, descripcion = ?, fecha = ?, hora = ?, ubicacion = ?, imagen_url = ? WHERE id_evento = ?");
                $stmt->bind_param("iissssssi", $id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion, $imagen_url, $id_evento);
            } else {
                $stmt = $conn->prepare("UPDATE evento SET id_usuario = ?, id_categoria = ?, nombre = ?, descripcion = ?, fecha = ?, hora = ?, ubicacion = ? WHERE id_evento = ?");
                $stmt->bind_param("iisssssi", $id_usuario, $id_categoria, $nombre, $descripcion, $fecha, $hora, $ubicacion, $id_evento);
            }

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al actualizar evento: " . $e->getMessage()];
        }
    }

    public static function delete($id_evento)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("DELETE FROM evento WHERE id_evento = ?");
            $stmt->bind_param("i", $id_evento);

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al eliminar evento: " . $e->getMessage()];
        }
    }

    public static function buscarEvento($id_evento)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM evento WHERE id_evento = ?");
            $stmt->bind_param("i", $id_evento);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $evento = $resultado->fetch_assoc();
            $stmt->close();
            return $evento;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener evento: " . $e->getMessage()];
        }
    }

    public static function getProximosEventos($limite = 3)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM evento WHERE fecha >= CURDATE() ORDER BY fecha ASC LIMIT ?");
            $stmt->bind_param("i", $limite);
            $stmt->execute();
            $result = $stmt->get_result();
            $eventos = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            return $eventos;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener eventos: " . $e->getMessage()];
        }
    }

    public static function buscarEventos($busqueda = '', $id_categoria = null)
{
    global $conn;
    try {
        $query = "SELECT * FROM evento WHERE 1=1";
        $params = [];
        $types = '';

        // Agregar búsqueda por nombre o descripción
        if (!empty($busqueda)) {
            $query .= " AND (nombre LIKE ? OR descripcion LIKE ?)";
            $busquedaParam = '%' . $busqueda . '%';
            $params[] = $busquedaParam;
            $params[] = $busquedaParam;
            $types .= 'ss';
        }

        // Agregar filtro por categoría
        if (!empty($id_categoria)) {
            $query .= " AND id_categoria = ?";
            $params[] = $id_categoria;
            $types .= 's';
        }

        // Preparar consulta
        $stmt = $conn->prepare($query);

        if (!empty($params)) {
            // Unir tipos y referencias de parámetros
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $eventos = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $eventos;
    } catch (mysqli_sql_exception $e) {
        return ["error" => "Error al buscar eventos: " . $e->getMessage()];
    }
}

    

}
