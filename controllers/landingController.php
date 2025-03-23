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
            $titulo = "Nosotros";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/contacto.php");
            require_once("views/footer.php");
        }
        public function encuentrame(){
            $titulo = "Nosotros";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/encuentrame/nosotros.php");
            require_once("views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>