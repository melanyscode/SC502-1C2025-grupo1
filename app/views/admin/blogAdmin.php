

<body class="body-admin bg-celeste">

    <div class="bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class="m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class="text-center txt-azul-oscuro mt-5">Blogs y Artículos</h1>

        <div class="ms-4 my-5">
            <a href="index.php?c=admin&a=agregarArticulo" class="my-5 py-2 px-4 bg-celeste rounded-pill text-decoration-none">Agregar</a>
        </div>

        <div class="ms-4">
            <div class="row mt-3">

                <?php if (!empty($articulos)): ?>
                    <?php foreach ($articulos as $articulo): ?>
                        <div class="col-12 d-flex mb-4 p-3 rounded bg-light shadow-sm">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="standard-image">
                                    <img src="<?= !empty($articulo['imagen_url']) ? htmlspecialchars($articulo['imagen_url']) : 'assets/img/owner-pet.jpg' ?>" alt="Imagen del artículo" class="text-center">
                                </div>
                            </div>

                            <div class="col-md-9 d-flex justify-content-center flex-column text-center text-xl-start px-4">
                                <h3 class="txt-azul-oscuro"><?= htmlspecialchars($articulo['titulo']) ?></h3>
                                <p class="text-muted">Fecha de publicación: <?= htmlspecialchars(date("d/m/Y", strtotime($articulo['fecha']))) ?></p>
                                <div class="d-flex justify-content-center justify-content-xl-start flex-wrap gap-3">
                                    <a href="index.php?c=admin&a=editarArticulo&id=<?= $articulo['id_articulo'] ?>" class="btn btn-primary rounded-pill px-4 fw-bold">Editar</a>

                                    <form action="index.php?c=admin&a=eliminarArticulo" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este artículo?');">
                                        <input type="hidden" name="id" value="<?= $articulo['id_articulo'] ?>">
                                        <button type="submit" class="btn btn-danger rounded-pill px-4 fw-bold">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">No hay artículos disponibles por el momento.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>