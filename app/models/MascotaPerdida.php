<?php
require_once __DIR__ . '/../../config/database.php';

class MascotaPerdida
{
    public static function getAll(): array
    {
        global $conn;

        try {
            $sql = "SELECT * FROM mascota_perdida";
            $result = $conn->query($sql);

            if ($result->num_rows === 0) {
                return [];
            }
            $mascotas = $result->fetch_all(MYSQLI_ASSOC);


            return $mascotas;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener mascotas: " . $e->getMessage()];
        }
    }

    public static function buscarMascotaPerdida($id){
        global $conn;
        try{

            $stmt = $conn->prepare("SELECT * FROM mascota_perdida WHERE id_usuario = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $mascota = $resultado->fetch_assoc();
            $stmt->close();
            
            return $mascota;
        }catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener mascota: " . $e->getMessage()];
        }
    }
}
