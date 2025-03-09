<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php include "componentes/links.php"; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class=" header-inicio pb-5">
        <?php include_once("componentes/navbar.php"); ?>
        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
                    <h3 class="my-5">Encuentra a tu mascota</h3>
                    <p class="mt-5 mb-3">En este sitio podrás encontrar a tu compañero
                        ideal. Ofrecemos un espacio donde diversas
                        mascotas están buscando un hogar lleno de
                        amor y cuidados</p>
                       
                        <a href="" class="mt-3 mb-5 py-2 px-4 bg-white rounded-pill">Vamos a adoptar</a>
                </div>
            </div>
            <div class="row d-flex flex-colum justify-content-between mt-4">
                <div class="col-2 bg-white text-center rounded-5 mt-3">
                    <img src="assets/paw-solid.svg" alt="" height="80px">
                    <p>Adopta</p>
                </div>
                <div class="col-2 bg-white text-center rounded-5 mt-3">
                <img src="assets/paw-solid.svg" alt="" height="25px">
                <p>Reporta</p>
                    </div>
                    <div class="col-2 bg-white text-center rounded-5 mt-3">
                    <img src="assets/paw-solid.svg" alt="" height="25px">
                    <p>Participa</p>
                
                    </div>
            </div>
        </div>
    </div>


    <?php include "componentes/footer.php"; ?>
</body>

</html>