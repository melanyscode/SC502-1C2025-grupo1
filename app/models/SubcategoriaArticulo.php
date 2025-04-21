<?php
require_once __DIR__ . '/../../config/database.php';

class SubcategoriaArticulo{
    public static function getAll(): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM subcategoria_articulo ORDER BY nombre ASC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener subcategorías: " . $e->getMessage()];
        }
    }

    public static function getByCategoria($id_categoria): array
    {
        global $conn;

        try {
            $stmt = $conn->prepare("SELECT * FROM subcategoria_articulo WHERE id_categoria = ?");
            $stmt->bind_param("i", $id_categoria);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al filtrar subcategorías: " . $e->getMessage()];
        }
    }
}
