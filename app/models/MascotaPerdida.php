<?php
require_once __DIR__ . '/../../config/database.php';

class MascotaPerdida
{
    public static function getAll(): array
    {
        global $conn;

        try {
            $sql = "SELECT mp.estado AS estado, mp.nombre as nombre_mascota, mp.imagen_url AS imagen_url, mp.raza AS raza, mp.ubicacion_perdida AS ubicacion, mp.comentario AS comentario, u.img_url AS img_url, u.telefono AS telefono, u.nombre AS nombre, u.apellido AS apellido FROM mascota_perdida mp INNER JOIN usuario u ON mp.id_usuario = u.id_usuario";
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
            $mascota = $resultado->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            
            return $mascota;
        }catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener mascota: " . $e->getMessage()];
        }
    }
    public static function buscarMascota($id){
        global $conn;
        try{

            $stmt = $conn->prepare("SELECT * FROM mascota_perdida WHERE id_mascota_perdida = ?");
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
    public static function cantidadMascotas(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT COUNT(*) FROM mascota_perdida WHERE estado = 'Perdido'");
            $stmt->execute();
            $resultado = $stmt->get_result();
            if($resultado){
                $cantidad = $resultado->fetch_assoc();
               
                return $cantidad['COUNT(*)'];
            }else{
                return false;
            }
            $stmt->close();
        }catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public static function add($id, $nombre, $raza, $tipo, $descripcion, $fechaPerdido, $ubicacion, $estado, $comentario, $imagen){{
        global $conn;
        try{
            $stmt = $conn->prepare("INSERT INTO mascota_perdida (id_usuario, nombre, raza, tipo, descripcion, fecha_perdida, ubicacion_perdida, estado, comentario, imagen_url) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("isssssssss", $id, $nombre, $raza, $tipo, $descripcion, $fechaPerdido, $ubicacion, $estado, $comentario, $imagen);

            if($stmt->execute()){
                $stmt->close();
                return 1;

            } else {
                $stmt->close();
                return 0;
            }

            $stmt->close();
        }catch (mysqli_sql_exception $e) {
            echo  "Error al guardar mascota perdida " . $e->getMessage();
        }
    }   

    }
}
