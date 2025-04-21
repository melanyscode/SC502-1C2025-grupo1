
<body class="d-flex flex-column min-vh-100 bg-light">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-white p-5 rounded-5 shadow">
                <h1 class="text-center txt-azul-oscuro mb-4"><?= htmlspecialchars($articulo['titulo']) ?></h1>

                <p class="text-muted text-center mb-4">
                    Publicado el <?= date("d/m/Y", strtotime($articulo['fecha'])) ?>
                </p>

                <?php if (!empty($articulo['imagen_url'])): ?>
                    <div class="text-center mb-4">
                        <img src="<?= htmlspecialchars($articulo['imagen_url']) ?>" alt="Imagen del artículo" class="img-fluid rounded">
                    </div>
                <?php endif; ?>

                <div class="contenido-articulo text-justify">
                    <p style="white-space: pre-line;">
                        <?= nl2br(htmlspecialchars($articulo['contenido'])) ?>
                    </p>
                </div>

                <div class="mt-4 text-end">
                    <a href="index.php?c=landing&a=blog" class="btn btn-outline-primary rounded-5 px-4">← Volver al blog</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
