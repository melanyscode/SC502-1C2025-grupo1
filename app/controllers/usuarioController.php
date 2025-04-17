<?php
    class usuarioController{
       

        public function perfil(){ 
            //aqui va la logica que se trae de la base de datos
            //para enviar variables a al vista se declara la variable como la del titulo
            // se usa esa misma variable en la vista dentro de codigo php y ya se puede utilizar la variable

            $titulo = "Pefil de Usuario";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/usuario/perfil.php");
            require_once("app/views/footer.php");
        }

        public function login(){
            $titulo = "Inicio de Sesión";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/usuario/login.php");
            require_once("app/views/footer.php");
        }
        
        public function registro(){
            $titulo = "Registrarse";
            require_once("app/views/head.php");
            require_once("app/views/navbar.php");
            require_once("app/views/usuario/registro.php");
            require_once("app/views/footer.php");
        }
        
        public function error() {
            echo "error";
        }
    }
    
?>