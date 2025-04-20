<?php
require_once __DIR__ . '/../../config/database.php';

class Solicitante
{
    public static function getAll(): array
    {

        global $conn;

        try {
            $sql = "SELECT * FROM solicitud";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener solicitantes: " . $e->getMessage()];
        }
    }
    public static function add($id, $idMascota, $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gastos, $post_adopcion)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO solicitud (id_usuario, id_mascota_adopcion, acuerdo, tipo_vivienda, descripcion_vivienda, patio, mudanza, cuido, gastos, post_adopcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("iisssissii", $id, $idMascota, $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gastos, $post_adopcion);

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener solicitantes: " . $e->getMessage()];
        }
    }

    public static function delete($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("DELETE FROM solicitud WHERE id_solicitud = ?");

            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener solicitud: " . $e->getMessage()];
        }
    }

    public static function update($id, $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gastos, $post_adopcion)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("UPDATE solicitud SET acuerdo = ?, tipo_vivienda = ?, descripcion_vivienda = ?, patio = ?, mudanza = ?, cuido = ?, gastos = ?, post_adopcion = ? WHERE id_solicitud = ?");
            $stmt->bind_param("ississiii", $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gastos, $post_adopcion, $id);

            if ($stmt->execute()) {
                $stmt->close();
                return 1;
            } else {
                $stmt->close();
                return 0;
            }
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener solicitud: " . $e->getMessage()];
        }
    }
    public static function buscarSolicitud($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM solicitud WHERE id_solicitud = ?");
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
    public static function envioSolicitud($idUsuario, $idMascotaAdopcion){

        global $conn; 
        try{
            $stmt = $conn->prepare("SELECT * FROM solicitud WHERE id_usuario = ? AND id_mascota_adopcion = ?");
            $stmt->bind_param("ii", $idUsuario, $idMascotaAdopcion);
            $resultado = $stmt->get_result();
            if ($resultado->num_rows > 0) {
                $usuario = $resultado->fetch_assoc();
                return true; 
            } else {
                return false; 
            }
        }catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }


}
