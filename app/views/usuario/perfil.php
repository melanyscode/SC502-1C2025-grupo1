<?php
require_once __DIR__ .'/../navbar.php'; 

if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}


//imagen 
$default = "app/uploads/default.jpg";
$foto = !empty($user['img_url']) ? $user['img_url'] : $default;

//direccion 
$sinDireccion= "No tiene una dirección registrada";
$direccion = !empty($user['direccion']) ? $user['direccion'] : $sinDireccion;

//telefono
$sinTelefono = "No tiene telefono registrado";
$telefono = !empty($user['telefono']) ? $user['telefono'] : $sinTelefono;
?>

<body class="d-flex flex-column min-vh-100">
  


    <div class="header-perfil pb-5 flex-grow-1">
    <div class="container d-flex align-items-end justify-content-end" style="min-height: 20vh;">
        <a href="index.php?p=crearpost">
            <button class="btn btn-postear-anuncio mt-5" style="width: auto;">+ Postear Anuncio</button>
        </a>
    </div>
</div>



    <div class="container-fluid perfil-container">
        <!-- Parte izquierda -->

        <div class="perfil-left">
            <img src="<?php echo $foto ?>" alt="Imagen de perfil" class="perfil-img">

            <h4 class="perfil-nombre"> <?php echo $user['nombre'] .' ' . $user['apellido'] ?> </h4>
            
            <hr>

            <h3 class="perfil-num-adopciones">2</h3>
            <h4 class="perfil-adopciones">Adopciones</h4>
            <hr>

            <div class="perfil-contacto">
                <div class="contacto-item">
                    <img src="public/img/bg-phone.png" alt="Teléfono" height="20px">
                    <span> <?php echo $telefono; ?></span>
                </div>
                <div class="contacto-item">
                    <img src="public/img/bg-email.png" alt="Correo" height="20px">
                    <span> <?php echo $user['correo']; ?></span>
                </div>
                <div class="contacto-item">
                    <img src="public/img/bg-address.png" alt="Dirección" height="20px">
                    <span> <?php echo $direccion; ?></span>
                </div>
                <div class="contacto-item">
                <a href="index.php?p=logout" class="btn-blanco">Cerrar sesión</a>
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
                            <img src="public/img/bg-7.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right">
                                <h5>Spike</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="perfil-card-right">
                            <img src="public/img/dog-1.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right">
                                <h5>Ares</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


</body>

</html>