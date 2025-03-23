<?php
    class nosotrosController{
        public function nosotros(){
            $titulo = "Nosotros";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/landing/nosotros.php");
            require_once("views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>