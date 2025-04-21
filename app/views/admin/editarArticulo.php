<body class="body-admin bg-celeste">
    <div class="bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class="m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class="text-center txt-azul-oscuro mt-5">Editar Articulo</h1>

        <div class="container mt-5 pt-5">
            <form action="index.php?c=admin&a=guardarEditArticulo" method="POST" enctype="multipart/form-data" class="mt-5">
                <input type="hidden" name="id_articulo" value="<?= $articulo['id_articulo'] ?>">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <p>Imagen actual</p>
                            <div class="img-preview mx-5 mb-3 mt-3">
                                <img src="<?= $articulo['imagen_url'] ?>" alt="Imagen actual" class="text-center imgpreview" style="max-height: 200px;" data-preview>
                            </div>
                            <input type="file" hidden name="imagenArticulo" id="inputArticulo" data-input>
                            <input type="hidden" name="imagen_actual" value="<?= $articulo['imagen_url'] ?>">
                            <div class="text-center">
                                <button type="button" class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgArticulo" data-btn>Subir Nueva Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-3">
                            <label>Titulo</label>
                            <input type="text" name="titulo" class="input-adopcion bg-celeste" value="<?= htmlspecialchars($articulo['titulo']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="input-adopcion bg-celeste" value="<?= $articulo['fecha'] ?>" required>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="categoria">Categoría</label>
                                <select name="id_categoria" id="categoria" class="input-adopcion bg-celeste w-100">
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?= $categoria['id_categoria'] ?>" <?= $articulo['id_categoria'] == $categoria['id_categoria'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($categoria['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col mb-3">
                                <label for="subcategoria">Subcategoría</label>
                                <select name="id_subcategoria" id="subcategoria" class="input-adopcion bg-celeste w-100">
                                    <?php foreach ($subcategorias as $sub): ?>
                                        <option value="<?= $sub['id_subcategoria'] ?>"
                                            data-categoria="<?= $sub['id_categoria'] ?>"
                                            <?= $sub['id_subcategoria'] == $articulo['id_subcategoria'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($sub['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label>Usuario</label>
                            <select name="id_usuario" class="input-adopcion bg-celeste">
                                <?php foreach ($usuariosAdmin as $usuario): ?>
                                    <option value="<?= $usuario['id_usuario'] ?>" <?= $articulo['id_usuario'] == $usuario['id_usuario'] ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($usuario['nombre']) . ' ' . htmlspecialchars($usuario['apellido']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <label>Contenido</label>
                        <textarea name="contenido" class="input-adopcion bg-celeste" required><?= htmlspecialchars($articulo['contenido']) ?></textarea>
                    </div>
                </div>

                <div class="text-end">
                    <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/script.js"></script>
</body>