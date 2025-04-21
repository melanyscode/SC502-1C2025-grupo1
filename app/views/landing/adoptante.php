<body class="d-flex flex-column min-vh-100">

    <div class="header-adoptante pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
                    <h3 class="my-5">El compañero ideal para ti</h3>
                    <p class="mt-5 mb-3">Adopta con amor, cuida con responsabilidad</p>
                </div>
            </div>
        </div>
    </div>


    <div class=" container">
        <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page" style="font-weight: normal;">Adoptantes</li>
            </ol>
        </nav>
    </div>

    <div class="container outside-container d-flex align-items-center mt-4">
        <i class="fa-solid fa-paw fs-3 text-primary"></i>
        <p class="ms-2 fs-5 text-dark">Más de (<?php echo $cantidad ?>) mascotas disponibles</p>
    </div>

    <div class="container py-5">
        <div class="row">

            <aside class="col-md-3 bg-white p-3">
                <h5 class="txt-azul-oscuro">Categorías de mascotas que tenemos disponibles</h5>
                <div class="form-check">
                    
              <p>Gatos</p>
                                  
              <p>Perros</p>
              
            </aside>

            <div class="col-md-9">
                <div class="row">

                    <?php foreach ($adopciones as $a): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-custom p-3 d-flex flex-column align-items-center" style="width: 330px; ;">
                                <img src="<?= htmlspecialchars($a['imagenes'][0])  ?>" class="card-img-top" alt="Mascota" style="height: 250px; object-fit: cover; padding-top: 8px; padding-left: 8px; padding-right: 8px;">
                                <div class="card-body text-start p-3 d-flex flex-column justify-content-between" style="width: 100%; height: 100%;">
                                    <div>
                                        <h5 class="text-dark m-0 mb-2"><?= htmlspecialchars($a['nombre'])  ?></h5>
                                        <p class="card-text m-0 mb-3"><?= htmlspecialchars($a['edad'])  ?></p>
                                    </div>
                                    <a href="index.php?c=landing&a=detalle&id=<?= $a['id_mascota_adopcion']?>" class="btn btn-publicar w-auto py-2 px-4 rounded-pill mt-auto">Ver más</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </div>
    </div>


</body>