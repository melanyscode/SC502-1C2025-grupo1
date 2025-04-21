<?php
require_once __DIR__ . '/../../config/database.php';

class Articulo
{
    public static function getAll(): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM articulo ORDER BY fecha DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener artículos: " . $e->getMessage()];
        }
    }

    public static function add($id_categoria, $id_usuario, $titulo, $contenido, $fecha, $imagen_url)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO articulo (id_categoria, id_usuario, titulo, contenido, fecha, imagen_url) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("iissss", $id_categoria, $id_usuario, $titulo, $contenido, $fecha, $imagen_url);
            return $stmt->execute() ? 1 : 0;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al agregar artículo: " . $e->getMessage()];
        }
    }

    public static function delete($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("DELETE FROM articulo WHERE id_articulo = ?");
            $stmt->bind_param("i", $id);
            return $stmt->execute() ? 1 : 0;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al eliminar artículo: " . $e->getMessage()];
        }
    }

    public static function update($id_articulo, $id_categoria, $id_usuario, $titulo, $contenido, $fecha, $imagen_url)
{
    global $conn;
    try {
        $stmt = $conn->prepare("UPDATE articulo SET id_categoria = ?, id_usuario = ?, titulo = ?, contenido = ?, fecha = ?, imagen_url = ? WHERE id_articulo = ?");
        $stmt->bind_param("iissssi", $id_categoria, $id_usuario, $titulo, $contenido, $fecha, $imagen_url, $id_articulo);

        if ($stmt->execute()) {
            return 1;
        } else {
            return ["error" => "Error al ejecutar UPDATE: " . $stmt->error];
        }

    } catch (mysqli_sql_exception $e) {
        return ["error" => "Excepción al editar artículo: " . $e->getMessage()];
    }
}


    public static function buscarArticulo($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM articulo WHERE id_articulo = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $articulo = $resultado->fetch_assoc();
            $stmt->close();
            return $articulo;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener artículo: " . $e->getMessage()];
        }
    }
}
?>