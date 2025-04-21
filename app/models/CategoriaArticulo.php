<?php
require_once __DIR__ . '/../../config/database.php';

class CategoriaArticulo
{
    public static function getAll(): array
    {
        global $conn;
        try {
            $sql = "SELECT * FROM categoria_articulo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener categorías: " . $e->getMessage()];
        }
    }
}
