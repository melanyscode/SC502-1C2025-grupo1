<?php
if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; 

    require_once  'app/models/MascotaAdopcion.php';
    require_once  'app/models/Solicitante.php';
    $mascota = MascotaAdopcion::buscarMascota($id);

    if (isset($_SESSION['user'])) {
        $idUsuario = (int)$_SESSION['user']['id_usuario'];
        $envio = Solicitante::envioSolicitud($idUsuario, $id);
    }
}
?>

<body class="d-flex flex-column min-vh-100">


    <nav aria-label="breadcrumb " class="mt-3 px-5c container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
            <li class="breadcrumb-item"><a href="adoptante.php" class="text-dark">Adoptantes</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">Detalle</li>
        </ol>
    </nav>

    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-md-4 pe-0">
                <img src="<?php echo $mascota['imagenes'][0] ?>" alt="Imagen de Tonet" class="img-fluid custom-img">
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mb-3 ps-0">
                <img src="<?php echo $mascota['imagenes'][1] ?>" alt="Imagen 1" class="rounded-circle mb-5" style="width: 100px; height: 100px; object-fit: cover;">
                <img src="<?php echo $mascota['imagenes'][2] ?>" alt="Imagen 2" class="rounded-circle mb-5" style="width: 100px; height: 100px; object-fit: cover;">
                <img src="<?php echo $mascota['imagenes'][3] ?>" alt="Imagen 3" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
            </div>

            <div class="col-md-4 ps-0">
                <div class="custom-name p-3">
                    <h4 class="text-start mt-2"><?php echo $mascota['nombre'] ?></h4>
                </div>

                <p class="pt-2 pb-3"><?php echo $mascota['descripcion'] ?></p>

                <p class="pt-2 pb-2"><strong>Edad:</strong> <?php echo $mascota['edad'] ?></p>
                <p class="pt-2 pb-2"><strong>Peso:</strong> <?php echo $mascota['peso'] ?></p>
                <p class="pt-2 pb-2"><strong>Raza:</strong> <?php echo $mascota['raza'] ?></p>

                <p class="pt-2 pb-2"><strong>Enfermedades:</strong> <?php echo $mascota['enfermedad'] ?></p>
                <p class="pt-2 pb-2"><strong>Atenciones especiales:</strong> <?php echo $mascota['atencion'] ?></p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-4 text-center">¿Te gustaría adoptar a <?php echo $mascota['nombre'] ?>?</h2>
            <?php
            if (isset($_SESSION['user']) && !$envio) { ?>
                <div class="card custom-card-detail p-4" style="max-width: 1200px; margin: 0 auto;">

                    <h6 class="mb-4">Si estás interesado en darle un hogar a Tonet, por favor completa el siguiente formulario y nos pondremos en contacto contigo:</h6>

                    <form class="adoption-form" action="index.php?c=landing&a=solicitud" method="POST">

                    <input type="text" hidden class="form-control input-rounded" name="idUsuario" value="<?php echo $_SESSION['user']['id_usuario'] ?>" required>
                    <input type="text" hidden class="form-control input-rounded" name="id" value="<?php echo $id ?>" required>
                        <div class=" d-flex form-group-custom mb-4">
                            <label class="adoption-form">¿Todos en casa están de acuerdo con la adopción?</label>
                            <div class="d-flex align-items-center" role="group">
                                <input class="form-check-input m-0" type="radio" name="acuerdoAdopcion" id="acuerdoSi" value="1">
                                <label class="form-check-label text-white ms-2" for="acuerdoSi">Sí</label>
                            </div>
                            <div class="d-flex align-items-center" role="group">
                                <input class="form-check-input m-0" type="radio" name="acuerdoAdopcion" id="acuerdoSi" value="0">
                                <label class="form-check-label text-white ms-2" for="acuerdoSi">No</label>
                            </div>
                        </div>

                        <h5 class="mb-3">Información sobre el Hogar</h5>
                        <div class="form-group-custom mb-4">

                            <div class="form-group-custom mb-4">
                                <label class="adoption-form">Tipo de vivienda:</label>
                                <input type="text" class="form-control input-rounded" name="descripcionVivienda" required>
                            </div>

                            <label class="adoption-form">¿Vive en casa propia o alquilada?</label>
                            <div class="btn-group" role="group">

                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="tipoVivienda" id="acuerdoSi" value="Propia">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">Propia</label>
                                </div>
                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="tipoVivienda" id="acuerdoSi" value="Alquilada">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">Alquilada</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-custom mb-4">
                            <label class="adoption-form">¿Cuenta con un patio o jardín? ¿Está cercado?</label>
                            <div class="btn-group" role="group">
                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="patio" id="acuerdoSi" value="1">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">Sí</label>
                                </div>
                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="patio" id="acuerdoSi" value="0">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">No</label>
                                </div>
                            </div>
                        </div>

                        <h5 class="mb-3">Compromiso y Responsabilidad</h5>

                        <div class="form-group-custom mb-4">
                            <label class="adoption-form">¿Qué hará si tiene que mudarse a otro lugar?</label>
                            <input type="text" class="form-control input-rounded" name="mudanza" required>
                        </div>
                        <div class="form-group-custom mb-4">
                            <label class="adoption-form">¿Qué haría si ya no puede cuidar de la mascota en el futuro?</label>
                            <input type="text" class="form-control input-rounded" name="cuido" required>
                        </div>

                        <div class="form-group-custom mb-4">
                            <label class="adoption-form">¿Está dispuesto a asumir los gastos de alimentación, salud y bienestar de la mascota?</label>
                            <div class="btn-group" role="group">
                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="costo" id="acuerdoSi" value="1">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">Sí</label>
                                </div>
                                <div class="d-flex align-items-center" role="group">
                                    <input class="form-check-input m-0" type="radio" name="costo" id="acuerdoSi" value="0">
                                    <label class="form-check-label text-white ms-2" for="acuerdoSi">No</label>
                                </div>
                            </div>

                            <div class="form-group-custom mb-4">
                                <label class="adoption-form">¿Está de acuerdo en realizar visitas de seguimiento post-adopción?</label>
                                <div class="btn-group" role="group">
                                    <div class="d-flex align-items-center" role="group">
                                        <input class="form-check-input m-0" type="radio" name="seguimiento" id="acuerdoSi" value="1">
                                        <label class="form-check-label text-white ms-2" for="acuerdoSi">Sí</label>
                                    </div>
                                    <div class="d-flex align-items-center" role="group">
                                        <input class="form-check-input m-0" type="radio" name="seguimiento" id="acuerdoSi" value="0">
                                        <label class="form-check-label text-white ms-2" for="acuerdoSi">No</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn form-btn-submit mt-3">Enviar Solicitud</button>
                    </form>
                </div>

                <?php } elseif( isset($_SESSION['user']) && $envio) { ?>
                <div class="bg-celeste text-center my-5 p-4 rounded-5" style="max-width: 600px; margin: 0 auto;">
                    <h5 class="mb-3">Ya enviaste una solicitud, te estaremos contacto pronto</h5>
                    
                </div>


            <?php } else { ?>
                <div class="bg-celeste text-center my-5 p-4 rounded-5" style="max-width: 600px; margin: 0 auto;">
                    <h5 class="mb-3">Debes iniciar sesión para llenar el formulario de adopción.</h5>
                    <a href="login.php" class="btn-subir-imagen mt-3">Iniciar sesión</a>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>