<?php require_once __DIR__ .'/../navbar.php'; ?>

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
                <p class="ms-2 fs-5 text-dark">Más de (24) mascotas disponibles</p>
            </div>

            <div class="container py-5">
                <div class="row">

                    <aside class="col-md-3 bg-white p-3">
                        <h5 class="txt-azul-oscuro">Categorías</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gatos">
                            <label class="form-check-label" for="gatos">Gatos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="perros">
                            <label class="form-check-label" for="perros">Perros</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="conejos">
                            <label class="form-check-label" for="conejos">Conejos</label>
                        </div>
                    </aside>

                    <div class="col-md-9">
                        <div class="row" id="listAdopciones">

                            
             

                        </div>
                    </div>
                </div>
            </div>

      
</body>

<?php require_once  __DIR__ .'/../footer.php'; ?>