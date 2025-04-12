<?php require_once __DIR__ .'/../navbar.php'; ?>

<body class="d-flex flex-column min-vh-100">


    <div class="header-encuentrame pb-5">

        <div class="container">
            <div class="row mt-5">
                <div class="col-6">
                    <h3 class="my-5">Ayuda a reunirlos con sus familias</h3>
                    <p class="mt-5 mb-3">Cada pista cuenta para devolverles la tranquilidad a sus familias</p>
                </div>

            </div>
        </div>

    </div>
    <div class="container my-5">
        <div class="">
            <nav aria-label="breadcrumb" class="mt-7">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Encuéntrame</li>
                </ol>
            </nav>
        </div>

        <div class="outside-container d-flex align-items-center mt-4">
            <i class="fa-solid fa-paw fs-3 text-primary"></i>
            <p class="ms-2 fs-5 txt-black">Más de (50) mascotas perdidas</p>
        </div>

        <div class="d-flex align-items-center border container-border-two rounded p-3 bg-white mt-2">

            <div class="d-flex flex-column align-items-start me-3">
                <img src="public/img/bg-7.jpg" alt="Mascota perdida" class="rounded me-3" style="width: 300px; height: 300px; object-fit: cover;">
                <h5 class="fw-bold fs-4 txt-azul-oscuro mt-3">Estado: Encontrado</h5>
            </div>

            <div class="w-100">
                <div class="p-3 rounded w-70 bg-celeste">
                    <div class="d-flex align-items-start mb-0">
                        <img src="public/img/bg-16.jpg" alt="Spike" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="d-flex flex-column">
                            <p class="mb-0">Rebecca Jimenez Alpizar</p>
                            <p class="mb-0">+506 8888 8888</p>
                        </div>
                    </div>
                </div>
                <p class="fw-bold fs-4 txt-azul-oscuro mt-3">Spike</p>
                <p><strong>Raza:</strong> Golden Retriever</p>
                <p><strong>Edad:</strong> 2 años</p>
                <p><strong>Última ubicación:</strong> Fue visto por última vez en el área de San José, calle 29, barrio Z</p>
                <p>Si lo has visto o sabes algo sobre su paradero, por favor contáctanos inmediatamente.</p>
            </div>
        </div>
    </div>

</body>


<?php require_once  __DIR__ .'/../footer.php'; ?>