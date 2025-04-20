<body class="body-admin bg-celeste">

    <div class="bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class="m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class="text-center txt-azul-oscuro mt-5">Agregar Evento</h1>

        <div class="container mt-5 pt-5">
            <form action="index.php?c=admin&a=guardarEvento" method="POST" class="mt-5" enctype="multipart/form-data">

                <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['user']['id_usuario']; ?>">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="img-preview m-5">
                                <img src="" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                            </div>
                            <input type="file" multiple hidden name="imagen_url" id="inputImagen" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImg" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="row">
                            <div class="col mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="input-adopcion bg-celeste" required>
                            </div>
                            <div class="col mb-3">
                                <label for="descripcion">Descripción</label>
                                <input type="text" name="descripcion" class="input-adopcion bg-celeste" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="fecha">Fecha</label>
                                <input type="date" name="fecha" class="input-adopcion bg-celeste" required>
                            </div>
                            <div class="col mb-3">
                                <label for="hora">Hora</label>
                                <input type="time" name="hora" class="input-adopcion bg-celeste" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" name="ubicacion" class="input-adopcion bg-celeste" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="id_categoria">Categoría</label>
                                <select name="id_categoria" id="id_categoria" class="input-adopcion bg-celeste" required>
                                    <option value="1">Jornadas de Adopción</option>
                                    <option value="2">Charlas Educativas</option>
                                    <option value="3">Campañas de Vacunación</option>
                                    <option value="4">Voluntariado</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Publicar</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
