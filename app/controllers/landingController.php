<?php
require_once __DIR__ . '/../models/MascotaAdopcion.php';
require_once __DIR__ . '/../models/CategoriaArticulo.php';
require_once __DIR__ . '/../models/SubcategoriaArticulo.php';
require_once __DIR__ . '/../models/Articulo.php';
require_once __DIR__ . '/../models/Solicitante.php';
require_once __DIR__ . '/../models/MascotaPerdida.php';
require_once __DIR__ . '/../models/Evento.php';
require_once __DIR__ . '/../models/Usuario.php';
class landingController
{
    public function nosotros()
    {
        $titulo = "Nosotros";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/nosotros.php");
        require_once("app/views/footer.php");
    }
    public function contacto()
    {
        $titulo = "Contacto";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/contacto.php");
        require_once("app/views/footer.php");
    }

    public function blog()
    {
        $titulo = "Blog";
        $categorias = CategoriaArticulo::getAll();
        $subcategorias = SubcategoriaArticulo::getAll();
        $articulos = Articulo::getAll();
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/blog.php");
        require_once("app/views/footer.php");
    }
    public function calendario()
{ 
    $titulo = "Eventos";

  
    $busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
    $id_categoria = isset($_GET['categoria']) ? (int)$_GET['categoria'] : null; 

   


    if (!empty($busqueda) || !is_null($id_categoria)) {
        $eventos = Evento::buscarEventos($busqueda, $id_categoria); 
    } else {
      
        $eventos = Evento::getAll(); 
    }

    if (is_null($eventos)) {
        $eventos = []; 
    }

    $eventosCarrusel = Evento::getProximosEventos(3);

    foreach ($eventos as &$evento) {
        $usuario = Usuario::buscarUsuario($evento['id_usuario']);
        $evento['nombre_organizador'] = $usuario ? $usuario['nombre'] . ' ' . $usuario['apellido'] : 'Desconocido';
    }

    foreach ($eventosCarrusel as &$evento) {
        $usuario = Usuario::buscarUsuario($evento['id_usuario']);
        $evento['nombre_organizador'] = $usuario ? $usuario['nombre'] . ' ' . $usuario['apellido'] : 'Desconocido';
    }

    require_once("app/views/head.php");
    require_once("app/views/navbar.php");
    require_once("app/views/landing/calendario.php");
    require_once("app/views/footer.php");
}
public function calendarioBusqueda()
{
    $titulo = "Eventos";
    $busqueda = isset($_GET['busqueda']) ? trim($_GET['busqueda']) : '';
    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

    if (!empty($busqueda) || ($categoria !== '' && $categoria !== null)) {
        $eventos = Evento::buscarEventos($busqueda, $categoria); 
    } else {
    
        $eventos = Evento::getAll(); 
    }
    if (is_null($eventos)) {
        $eventos = []; 
    }

  

    foreach ($eventos as &$evento) {
        $usuario = Usuario::buscarUsuario($evento['id_usuario']);
        $evento['nombre_organizador'] = $usuario ? $usuario['nombre'] . ' ' . $usuario['apellido'] : 'Desconocido';
    }
    $resultados = Evento::buscarEventos($busqueda, $categoria);
    require_once("app/views/head.php");
    require_once("app/views/navbar.php");
    require_once("app/views/landing/calendario.php");
    require_once("app/views/footer.php");
}


    //ADOPCIONES
    public function adopta()
    {

        $titulo = "Adopta";
        $cantidad = MascotaAdopcion::cantidadMascotas();
        $adopciones = MascotaAdopcion::getAll();
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/adoptante.php");
        require_once("app/views/footer.php");
    }
    public function detalle()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user'])) {
            $usuario = $_SESSION['user'];
        } 
        $titulo = "Detalle";
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/adoptanteDetalle.php");
        require_once("app/views/footer.php");
    }
    public function articulo()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $articulo = Articulo::buscarArticulo($id);

            if ($articulo) {
                $titulo = $articulo['titulo'];

                require_once("app/views/head.php");
                require_once("app/views/navbar.php");
                require_once("app/views/landing/articulo.php");
                require_once("app/views/footer.php");
            }
        }
    }
    public function error()
    {
        echo "error";
    }

    public function encuentrame()
    {
        $titulo = "Encuentrame";
        $titulo = "Encuentrame";
        $cantidad = MascotaPerdida::cantidadMascotas();
        $perdidas = MascotaPerdida::getAll();
        require_once("app/views/head.php");
        require_once("app/views/navbar.php");
        require_once("app/views/landing/encuentrame.php");
        require_once("app/views/footer.php");
    }



    public function solicitud()
    {
        $idMascota = $_POST['id'];
        $idUsuario = $_POST['idUsuario'];
        $acuerdo = $_POST['acuerdoAdopcion'];
        $tipo_vivienda = $_POST['tipoVivienda'];
        $descripcion_vivienda = $_POST['descripcionVivienda'];
        $patio = $_POST['patio'];
        $mudanza = $_POST['mudanza'];
        $cuido = $_POST['cuido'];
        $gastos = $_POST['costo'];
        $post_adopcion = $_POST['seguimiento'];

        $solicitud = Solicitante::add($idUsuario, $idMascota, $acuerdo, $tipo_vivienda, $descripcion_vivienda, $patio, $mudanza, $cuido, $gastos, $post_adopcion);
        if ($solicitud = false) {
            header("Location: index.php?c=landing&a=detalle&id=" . $idMascota . "&mensaje=Solicitud enviada");
            exit;
        } else {
            header("Location: index.php?c=landing&a=detalle&id=" . $idMascota . "&mensaje=error");
            exit;
        }
    }
}
