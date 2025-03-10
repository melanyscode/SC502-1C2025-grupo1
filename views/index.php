<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawFind</title>
    <?php include "componentes/links.php"; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once("componentes/navbar.php"); ?>
    <div class=" header-inicio py-3">

        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
                    <h3 class="my-5">Encuentra a tu mascota</h3>
                    <p class="mt-5 mb-3">En este sitio podrás encontrar a tu compañero
                        ideal. Ofrecemos un espacio donde diversas
                        mascotas están buscando un hogar lleno de
                        amor y cuidados</p>

                   <div class="mt-3 mb-5 ">
                   <a href="" class=" py-2 px-4 bg-white rounded-pill text-decoration-none txt-azul-oscuro fw-semibold mt-2">Vamos a adoptar</a>
                   </div>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row d-flex flex-colum justify-content-between mt-4">
            <div class="col-2 bg-white p-2 border-azul text-center rounded-5 mt-3">
                <img src="assets/paw-solid.svg" alt="" class="mt-2" height="70px">
                <p class="mt-3">Adopta</p>
            </div>
            <div class="col-2 bg-white p-2  border-azul text-center rounded-5 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="70px" class="mt-2"><path fill="#176b87" d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
                <p class="mt-3">Reporta</p>
            </div>
            <div class="col-2 bg-white p-2 border-azul text-center rounded-5 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="70px" class="mt-2"><path fill="#176b87" d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
                <p class="mt-3">Participa</p>

            </div>
        </div>
    </div>


    <?php include "componentes/footer.php"; ?>
</body>

</html>