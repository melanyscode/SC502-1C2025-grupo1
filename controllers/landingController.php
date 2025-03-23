<?php
    class landingController{
        public function nosotros(){
            $titulo = "Nosotros";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/nosotros.php");
            require_once("views/footer.php");
        }
        public function contacto(){
            $titulo = "Contacto";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/contacto.php");
            require_once("views/footer.php");
        }
        public function encuentrame(){
            $titulo = "Encuentrame";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/encuentrame.php");
            require_once("views/footer.php");
        }
        public function blog(){
            $titulo = "Blog";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/blog.php");
            require_once("views/footer.php");
        }
        public function calendario(){
            $titulo = "Calendario";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/calendario.php");
            require_once("views/footer.php");
        }
        public function adopta(){
            $titulo = "Adopta";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/adoptante.php");
            require_once("views/footer.php");
        }
        public function detalle(){
            $titulo = "Detalle";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/adoptanteDetalle.php");
            require_once("views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>