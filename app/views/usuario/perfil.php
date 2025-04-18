

<body class="d-flex flex-column min-vh-100">
  


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
            <img src="<?= $usuario['img_url'] != '' ? htmlspecialchars($usuario['img_url']) : 'app/uploads/default.jpg' ?>" alt="Imagen de perfil" class="perfil-img">

            <h4 class="perfil-nombre"><?php echo $usuario['nombre']?></h4>
            
            <hr>

            <h3 class="perfil-num-adopciones">2</h3>
            <h4 class="perfil-adopciones">Adopciones</h4>
            <hr>

            <div class="perfil-contacto">
                <div class="contacto-item">
                    <img src="assets/img/bg-phone.png" alt="Teléfono" height="20px">
                    <span><?= $usuario['telefono'] != '' ? htmlspecialchars($usuario['telefono']) : 'No tiene teléfono guardado' ?></span>
                </div>
                <div class="contacto-item">
                    <img src="assets/img/bg-email.png" alt="Correo" height="20px">
                    <span><?php echo $usuario['correo']?></span>
                </div>
                <div class="contacto-item">
                    <img src="assets/img/bg-address.png" alt="Dirección" height="20px">
                    <span> <?= $usuario['direccion'] != '' ? htmlspecialchars($usuario['direccion']) : 'No tiene direccion guardada' ?></span>
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
                            <img src="assets/img/bg-7.jpg" class="card-img-top" alt="Mascota">
                            <div class="card-body-right">
                                <h5>Spike</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="perfil-card-right">
                            <img src="assets/img/dog-1.jpg" class="card-img-top" alt="Mascota">
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