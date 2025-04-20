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
    
           
                $mascotas[$i]['imagenes'] = $imagenes;
            }
    
            return $mascotas;
            

        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener mascotas: " . $e->getMessage()];
        }
    }

    public static function buscarMascota($id)
    {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM mascota_adopcion WHERE id_mascota_adopcion = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $mascota = $resultado->fetch_assoc();
            $stmt->close();
            if (!$mascota) {
                return null; 
            }
    
            
            $sqlImg = "SELECT url_uno, url_dos, url_tres, url_cuatro FROM imagen_adopcion WHERE id_mascota_adopcion = ?";
            $stmtImg = $conn->prepare($sqlImg);
            $stmtImg->bind_param("i", $id);
            $stmtImg->execute();
            $resImg = $stmtImg->get_result();
    
            $imagenes = [];
            if ($row = $resImg->fetch_assoc()) {
                foreach (['url_uno', 'url_dos', 'url_tres', 'url_cuatro'] as $campo) {
                    if (!empty($row[$campo])) {
                        $imagenes[] = $row[$campo];
                    }
                }
            }
            $stmtImg->close();
    
         
            $mascota['imagenes'] = $imagenes;
          
            return $mascota;
        } catch (mysqli_sql_exception $e) {
            return ["error" => "Error al obtener mascota: " . $e->getMessage()];
        }
    }

    public static function delete($id){
        global $conn; 
        try{
            $stmt = $conn->prepare("DELETE FROM mascota_adopcion WHERE id_mascota_adopcion = ?");
            $stmt->bind_param("i", $id);
            if($stmt->execute()){
                return true; 
            } else {
                return false;
            }
            $stmt->close();
        }catch (mysqli_sql_exception $e) {
            return false;
        }
    }
    public static function cantidadMascotas(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT COUNT(*) FROM mascota_adopcion WHERE estado = 'Disponible'");
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

}
   

