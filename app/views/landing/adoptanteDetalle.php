<?php require_once __DIR__ .'/../navbar.php'; ?>
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
                <img src="public/img/bg-10.jpg" alt="Imagen de Tonet" class="img-fluid custom-img">
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mb-3 ps-0">
                <img src="public/img/bg-10.jpg" alt="Imagen 1" class="rounded-circle mb-5" style="width: 100px; height: 100px; object-fit: cover;">
                <img src="public/img/bg-10.jpg" alt="Imagen 2" class="rounded-circle mb-5" style="width: 100px; height: 100px; object-fit: cover;">
                <img src="public/img/bg-10.jpg" alt="Imagen 3" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
            </div>

            <div class="col-md-4 ps-0">
                <div class="custom-name p-3">
                    <h4 class="text-start mb-0">Tonet</h4>
                </div>

                <p class="pt-2 pb-3">Tonet es un gato juguetón y cariñoso que disfruta de la compañía humana, es sociable con otras mascotas y se adapta fácilmente a nuevos espacios.</p>

                <p class="pt-2 pb-2"><strong>Edad:</strong> 1 año y 2 meses</p>
                <p class="pt-2 pb-2"><strong>Peso:</strong> 4.1 kg</p>
                <p class="pt-2 pb-2"><strong>Raza:</strong> Mestizo</p>
                <p class="pt-2 pb-2"><strong>Estado de salud:</strong> Sano</p>
                <p class="pt-2 pb-2"><strong>Enfermedades:</strong> Ninguna conocida</p>
                <p class="pt-2 pb-2"><strong>Atenciones especiales:</strong> No requiere</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
    <div class="col-12">
    <div class="card custom-card-detail p-4" style="max-width: 1200px; margin: 0 auto;">
            <h2 class="mb-4 text-center">¿Te gustaría adoptar a Tonet?</h2>
            <h6 class="mb-4">Si estás interesado en darle un hogar a Tonet, por favor completa el siguiente formulario y nos pondremos en contacto contigo:</h6>

            <form class="adoption-form">
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">Nombre completo:</label>
                    <input type="text" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">Edad:</label>
                    <input type="number" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">Dirección completa:</label>
                    <input type="text" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">Teléfono:</label>
                    <input type="tel" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">Ocupación:</label>
                    <input type="text" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Vive solo/a o con familia?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Solo/a</button>
                        <button type="button" class="btn form-btn-custom">Con familia</button>
                    </div>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Todos en casa están de acuerdo con la adopción?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Sí</button>
                        <button type="button" class="btn form-btn-custom">No</button>
                    </div>
                </div>

                <h5 class="mb-3">Información sobre el Hogar</h5>
                <div class="form-group-custom mb-4">

                    <div class="form-group-custom mb-4">
                        <label class="adoption-form">Tipo de vivienda:</label>
                        <input type="text" class="form-control input-rounded" required>
                    </div>

                    <label class="adoption-form">¿Vive en casa propia o alquilada?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Propia</button>
                        <button type="button" class="btn form-btn-custom">Alquilada</button>
                    </div>
                </div>

                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Cuenta con un patio o jardín? ¿Está cercado?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Sí</button>
                        <button type="button" class="btn form-btn-custom">No</button>
                    </div>
                </div>

                <h5 class="mb-3">Compromiso y Responsabilidad</h5>

                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Qué hará si tiene que mudarse a otro lugar?</label>
                    <input type="text" class="form-control input-rounded" required>
                </div>
                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Qué haría si ya no puede cuidar de la mascota en el futuro?</label>
                    <input type="text" class="form-control input-rounded" required>
                </div>

                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Está dispuesto a asumir los gastos de alimentación, salud y bienestar de la mascota?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Sí</button>
                        <button type="button" class="btn form-btn-custom">No</button>
                    </div>
                </div>

                <div class="form-group-custom mb-4">
                    <label class="adoption-form">¿Está de acuerdo en realizar visitas de seguimiento post-adopción?</label>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn form-btn-custom">Sí</button>
                        <button type="button" class="btn form-btn-custom">No</button>
                    </div>
                </div>

                <button type="submit" class="btn form-btn-submit mt-3">Enviar Solicitud</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>

<?php require_once  __DIR__ .'/../footer.php'; ?>