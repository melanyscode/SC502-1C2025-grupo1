<?php
    class inicioController{
        public function inicio(){
            $titulo = "Inicio";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/inicio/inicio.php");
            require_once("app/views/footer.php");
        }
        public function error() {
            echo "error";
        }
    }
    
?>