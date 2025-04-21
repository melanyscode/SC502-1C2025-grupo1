<?php
function renderArticulosPorSubcategoria($subcat_id, $articulos)
{
    foreach ($articulos as $articulo) {
        if ($articulo['id_subcategoria'] == $subcat_id) {
?>
            <div class="articulo-card card mb-3" data-subcategoria="<?= $subcat_id ?>">
                <img src="<?= $articulo['imagen_url'] ?>" class="card-img-top" alt="<?= htmlspecialchars($articulo['titulo']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($articulo['titulo']) ?></h5>
                    <p class="card-text"><?= substr(strip_tags($articulo['contenido']), 0, 100) ?>...</p>
                    <a href="index.php?c=landing&a=articulo&id=<?= $articulo['id_articulo'] ?>" class="btn btn-primary">Leer más</a>
                </div>
            </div>
<?php
        }
    }
}
?>

<body class="d-flex flex-column min-vh-100">
    <div class="blog-header">
        <div class="container d-flex flex-row align-items-center my-5">
            <div class="col-6">
                <h2 class="my-5">Todo lo que necesitas saber</h2>
                <p class="mt-5 mb-3">Información útil para mejorar la vida de tu mascota.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">

        <!--Categorías-->
        <div class="bg-light p-3 rounded-4 shadow-sm mb-4">
            <div class="row text-center">
                <?php foreach ($categorias as $cat): ?>
                    <div class="col">
                        <button class="btn w-100 fw-bold categoria-btn text-uppercase" data-categoria="<?= $cat['id_categoria'] ?>">
                            <?= htmlspecialchars($cat['nombre']) ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!--Subcategorías-->
        <div class="bg-white p-3 rounded-4 shadow-sm mb-4">
            <div class="row text-center">
                <?php foreach ($subcategorias as $sub): ?>
                    <div class="col d-none subcategoria-btn-wrapper" data-categoria="<?= $sub['id_categoria'] ?>">
                        <button class="btn w-100 fw-semibold subcategoria-btn text-capitalize"
                            data-subcategoria="<?= $sub['id_subcategoria'] ?>">
                            <?= htmlspecialchars($sub['nombre']) ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <!--Artículos-->
        <?php foreach ($subcategorias as $sub): ?>
            <div class="subcategoria-articulos d-none row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"
                data-subcategoria-articulos="<?= $sub['id_subcategoria'] ?>">
                <?php renderArticulosPorSubcategoria($sub['id_subcategoria'], $articulos); ?>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/script.js"></script>
</body>