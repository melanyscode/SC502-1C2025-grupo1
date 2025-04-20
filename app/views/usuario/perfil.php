<?php
require_once 'app/models/MascotaPerdida.php';

$user = $_SESSION['user']['id_usuario'];

$mascotas = MascotaPerdida::buscarMascotaPerdida($user);


?>

<body class="d-flex flex-column min-vh-100">



    <div class="header-perfil pb-5 flex-grow-1">
        <div class="container d-flex align-items-end justify-content-end" style="min-height: 20vh;">
            <a href="index.php?c=usuario&a=perdido">
                <button class="btn btn-postear-anuncio mt-5" style="width: auto;">+ Postear Anuncio</button>
            </a>
        </div>
    </div>



    <div class="container-fluid perfil-container">
        <!-- Parte izquierda -->

        <div class="perfil-left">
            <div class="text-end">
                <a href="index.php?c=usuario&a=editarPerfil">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px">
                        <path fill="white" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>
                </a>
            </div>
            <img src="<?= $_SESSION['user']['img_url'] != '' ? htmlspecialchars($_SESSION['user']['img_url']) : 'app/uploads/default.jpg' ?>" alt="Imagen de perfil" class="perfil-img">

            <h4 class="perfil-nombre"><?php echo $_SESSION['user']['nombre'] . ' ' .  $_SESSION['user']['apellido'] ?></h4>

           

            <div class="perfil-contacto">
                <div class="contacto-item">
                    <img src="assets/img/bg-phone.png" alt="Teléfono" height="20px">
                    <span><?= $_SESSION['user']['telefono'] != '' ? htmlspecialchars($_SESSION['user']['telefono']) : 'No tiene teléfono guardado' ?></span>
                </div>
                <div class="contacto-item">
                    <img src="assets/img/bg-email.png" alt="Correo" height="20px">
                    <span><?php echo $_SESSION['user']['correo'] ?></span>
                </div>
                <div class="contacto-item">
                    <img src="assets/img/bg-address.png" alt="Dirección" height="20px">
                    <span> <?= $_SESSION['user']['direccion'] != '' ? htmlspecialchars($_SESSION['user']['direccion']) : 'No tiene direccion guardada' ?></span>
                </div>
                <div class="contacto-item ">
                    <a href="index.php?c=usuario&a=logout" class="btn-blanco">Cerrar sesión</a>
                </div>
            </div>
        </div>

        <!-- Parte derecha -->
        <div class="perfil-right">
        <?php
            if ($mascotas != null) { ?>
            <h2>Mis compañeros</h2>
            <?php foreach ($mascotas as $m): ?>
            <div class="perfil-mascotas-right">
                <div class="row">
                    <div class="col-md-6">
                        <div class="perfil-card-right">
                            <img src="assets/img/bg-7.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right d-flex justify-content-around">
                                <h5><?= htmlspecialchars($m['nombre']) ?></h5> <a href="index.php?c=usuario&a=editarPerdido&id=<?= htmlspecialchars($m['id_mascota_perdida']) ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20px">
                        <path fill="#176B87" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                    </svg>
                            </div>
                            <div class="text-end">
                
                </a>
            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
            <?php }  else{?>
                
                    <p class="text-center">No tienes mascotas registradas como perdidas, ¡que alivio!</p>
                
                <?php } ?>
        </div>


    </div>


</body>

</html>