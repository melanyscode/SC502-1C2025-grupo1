<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php include "componentes/links.php"; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once("componentes/navbar.php"); ?>

    <div class="container">
        <div class=" blog-header">
            <div class="col-6">
                <h2 class="my-5">Todo lo que necesitas saber</h2>
                <p class="mt-5 mb-3">Información útil para mejorar la vida de tu mascota.</p>
            </div>
        </div>
        <div class="container mt-4">
            <nav class="blog-nav">
                <button class="btn blog-tab active" data-bs-toggle="collapse" data-bs-target="#cuidadoMenu" aria-expanded="true">Cuidado</button>
                <button class="btn blog-tab" data-bs-toggle="collapse" data-bs-target="#articulosMenu" aria-expanded="false">Artículos</button>
            </nav>

            <div id="blogSecciones">
                <!-- Sección de Cuidado -->
                <div id="cuidadoMenu" class="collapse show blog-seccion" data-bs-parent="#blogSecciones">
                    <h2 class="txt-azul-oscuro">Cuidado</h2>
                    <div class="card-container">
                        <div class="card">
                            <img src="../assets/salud.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Salud y Bienestar</h5>
                                <p class="card-text">Consejos sobre prevención de enfermedades, alimentación y vacunación.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../assets/higiene.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Higiene y Estética</h5>
                                <p class="card-text">Todo sobre el baño, cepillado y cuidados estéticos de tu mascota.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Artículos -->
                <div id="articulosMenu" class="collapse blog-seccion" data-bs-parent="#blogSecciones">
                    <h2 class="txt-celeste">Artículos</h2>
                    <div class="card-container">
                        <div class="card">
                            <img src="../assets/perdidos.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Seguimiento: Mascotas Perdidas</h5>
                                <p class="card-text">Guías sobre qué hacer cuando una mascota se pierde.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../assets/exito.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Historias de Éxito</h5>
                                <p class="card-text">Casos de mascotas perdidas que fueron encontradas y adoptadas.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../assets/ayudar.jpg" class="card-img-top" alt="Cómo Ayudar">
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

        <?php include "componentes/footer.php"; ?>
</body>

</html>