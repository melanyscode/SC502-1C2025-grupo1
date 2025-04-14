<?php
require_once __DIR__ . '/../../config/database.php';

class MascotaAdopcion{
    public static function getAll() : array {
        global $conn;

        try {
            $sql = "SELECT * FROM mascota_adopcion";
            $result = $conn->query($sql);

            if ($result->num_rows === 0) {
               return [];
            } 
            $mascotas = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($mascotas as $i => $mascota) {
                $id = $mascota['id_mascota_adopcion'];
                $sqlImg = "SELECT url_uno, url_dos, url_tres, url_cuatro FROM imagen_adopcion WHERE id_mascota_adopcion = ?";
                $stmt = $conn->prepare($sqlImg);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $resultado = $stmt->get_result();
    
                $imagenes = [];
                if ($row = $resultado->fetch_assoc()) {
                    foreach (['url_uno', 'url_dos', 'url_tres', 'url_cuatro'] as $campo) {
                        if (!empty($row[$campo])) {
                            $imagenes[] = $row[$campo];
                        }
                    }
                }
    
                // Guardamos las imágenes en el array original
                $mascotas[$i]['imagenes'] = $imagenes;
            }
    
            return $mascotas;
            

        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener usuarios: " . $e->getMessage()];
        }
    }
}