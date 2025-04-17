

<body class="d-flex flex-column min-vh-100">


    <div class="blog-header">
        <div class=" container  d-flex flex-row align-items-center my-5">
            <div class="col-6">
                <h2 class="my-5">Todo lo que necesitas saber</h2>
                <p class="mt-5 mb-3">Información útil para mejorar la vida de tu mascota.</p>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <nav class="blog-nav d-flex justify-content-center gap-5">
            <button class="btn blog-tab border-0 active" data-bs-toggle="collapse" data-bs-target="#cuidadoMenu" aria-expanded="true">Cuidado</button>
            <button class="btn blog-tab border-0" data-bs-toggle="collapse" data-bs-target="#articulosMenu" aria-expanded="false">Artículos</button>
        </nav>

       <div class="row">
       <div id="blogSecciones row">
            <!-- Sección de Cuidado -->
            <div id="cuidadoMenu" class="col collapse show blog-seccion " data-bs-parent="#blogSecciones">
                <h2 class="txt-azul-oscuro">Cuidado</h2>
                <div class="card-container">
                    <div class="card">
                        <img src="assets/img/salud.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Salud y Bienestar</h5>
                            <p class="card-text">Consejos sobre prevención de enfermedades, alimentación y vacunación.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/img/higiene.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Higiene y Estética</h5>
                            <p class="card-text">Todo sobre el baño, cepillado y cuidados estéticos de tu mascota.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Artículos -->
            <div id="articulosMenu" class="collapse blog-seccion col" data-bs-parent="#blogSecciones">
                <h2 class="txt-celeste">Artículos</h2>
                <div class="card-container">
                    <div class="card">
                        <img src="assets/perdidos.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Seguimiento: Mascotas Perdidas</h5>
                            <p class="card-text">Guías sobre qué hacer cuando una mascota se pierde.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/exito.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Historias de Éxito</h5>
                            <p class="card-text">Casos de mascotas perdidas que fueron encontradas y adoptadas.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/ayudar.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cómo Ayudar</h5>
                            <p class="card-text">Consejos sobre cómo puedes colaborar con la comunidad animal.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>

</body>

