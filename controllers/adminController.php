<?php
    class adminController{
        public function inicio(){
            $titulo = "Administrador";
            require_once("views/head.php");
            
            require_once("views/admin/admin.php");
          
        }
        public function adopciones(){
            $titulo = "Adopciones";
            require_once("views/head.php");
            
            require_once("views/admin/adopcionesAdmin.php");
          
        }
        public function solicitantes(){
            $titulo = "Solicitantes";
            require_once("views/head.php");
            
            require_once("views/admin/solicitante.php");
          
        }
        public function usuario(){
            $titulo = "Usuarios";
            require_once("views/head.php");
            
            require_once("views/admin/usuarios.php");
          
        }
        public function agregarUsuario(){
            $titulo = "Agregar Usuario";
            require_once("views/head.php");
            
            require_once("views/admin/agregarUsuario.php");
          
        }
        public function blog(){
            $titulo = "Blog";
            require_once("views/head.php");
            
            require_once("views/admin/blogAdmin.php");
          
        }
        public function editarAnuncio(){
            $titulo = "Editar Anuncio";
            require_once("views/head.php");
            
            require_once("views/admin/editarAnuncio.php");
          
        }
        public function agregarAnuncio(){
            $titulo = "Agregar Anuncio";
            require_once("views/head.php");
            
            require_once("views/admin/agregarAnuncio.php");
          
        }
        public function agregarArticulo(){
            $titulo = "Agregar Articulo";
            require_once("views/head.php");
            
            require_once("views/admin/agregarArticulo.php");
          
        }

        public function error() {
            echo "error";
        }
    }
    
?>