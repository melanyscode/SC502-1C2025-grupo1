<?php
require_once __DIR__ . '/../models/MascotaAdopcion.php';
    class landingController{
        public function nosotros(){
            $titulo = "Nosotros";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/nosotros.php");
            require_once("app/views/footer.php");
        }
        public function contacto(){
            $titulo = "Contacto";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/contacto.php");
            require_once("app/views/footer.php");
        }
        public function encuentrame(){
            $titulo = "Encuentrame";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/encuentrame.php");
            require_once("app/views/footer.php");
        }
        public function blog(){
            $titulo = "Blog";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/blog.php");
            require_once("app/views/footer.php");
        }
        public function calendario(){
            $titulo = "Calendario";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/calendario.php");
            require_once("app/views/footer.php");
        }
        //ADOPCIONES
        public function adopta(){
            
            $titulo = "Adopta";
            $cantidad = MascotaAdopcion::cantidadMascotas();
            $adopciones = MascotaAdopcion::getAll();
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/adoptante.php");
            require_once("app/views/footer.php");
        }
        public function detalle(){
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            
            file_put_contents('session_id_debug.txt', session_id());
            var_dump($_SESSION);
    
            if (isset($_SESSION['user'])) {
                $usuario = $_SESSION['user'];
            } else {
              
                echo "no sirvio";
                exit();
            }
            $titulo = "Detalle";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/landing/adoptanteDetalle.php");
            require_once("app/views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>