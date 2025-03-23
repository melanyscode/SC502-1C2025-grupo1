<?php
    class inicioController{
        public function inicio(){
            $titulo = "Inicio";
            require_once("views/head.php");
            require_once("views/navbar.php");
            require_once("views/inicio/inicio.php");
            require_once("views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>