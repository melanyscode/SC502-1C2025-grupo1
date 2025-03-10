<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php include "componentes/links.php"; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once("componentes/navbar.php"); ?>


    <div class="header-perfil pb-5 flex-grow-1">
    <div class="container d-flex align-items-end justify-content-end" style="min-height: 20vh;">
        <a href="formPerdida.php">
            <button class="btn btn-postear-anuncio mt-5" style="width: auto;">+ Postear Anuncio</button>
        </a>
    </div>
</div>



    <div class="container-fluid perfil-container">
        <!-- Parte izquierda -->

        <div class="perfil-left">
            <img src="assets/bg-16.jpg" alt="Imagen de perfil" class="perfil-img">

            <h4 class="perfil-nombre">Rebecca Jimenez Alpizar</h4>
            <h5 class="perfil-usuario">Usuario</h5>
            <hr>

            <h3 class="perfil-num-adopciones">2</h3>
            <h4 class="perfil-adopciones">Adopciones</h4>
            <hr>

            <div class="perfil-contacto">
                <div class="contacto-item">
                    <img src="assets/bg-phone.png" alt="Teléfono" height="20px">
                    <span> +506 8888-8888</span>
                </div>
                <div class="contacto-item">
                    <img src="assets/bg-email.png" alt="Correo" height="20px">
                    <span> rebe.alpizar@gmail.com</span>
                </div>
                <div class="contacto-item">
                    <img src="assets/bg-address.png" alt="Dirección" height="20px">
                    <span> Alajuela, Grecia</span>
                </div>
            </div>
        </div>

        <!-- Parte derecha -->
        <div class="perfil-right">
            <h2>Mis compañeros</h2>
            <div class="perfil-mascotas-right">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="perfil-card-right">
                            <img src="assets/bg-7.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right">
                                <h5>Spike</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="perfil-card-right">
                            <img src="assets/dog-1.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right">
                                <h5>Ares</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


    <?php include "componentes/footer.php"; ?>
</body>

</html>