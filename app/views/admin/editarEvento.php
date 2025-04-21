<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once 'app/models/Evento.php';
    $evento = Evento::buscarEvento($id); 
}
?>

<body class="body-admin bg-celeste">

    <div class="bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class="m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class="text-center txt-azul-oscuro mt-5">Editar Evento</h1>

        <div class="container mt-5 pt-5">
            <form action="index.php?c=admin&a=guardarEditEvento" method="POST" enctype="multipart/form-data" class="mt-5">
                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="img-preview m-5">
                                <img src="<?php echo $evento['imagen_url']; ?>" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                            </div>
                            <input type="file" multiple hidden name="imagenEventoEdit" id="inputEvento" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgEvento" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <input type="hidden" name="id" value="<?php echo $evento['id_evento']; ?>">

                        <div class="mb-3">
                            <label>Nombre del Evento</label>
                            <input type="text" name="nombre" class="input-adopcion bg-celeste" value="<?php echo $evento['nombre']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Descripción</label>
                            <textarea name="descripcion" class="input-adopcion bg-celeste"><?php echo $evento['descripcion']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="input-adopcion bg-celeste" value="<?php echo $evento['fecha']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Hora</label>
                            <input type="time" name="hora" class="input-adopcion bg-celeste" value="<?php echo $evento['hora']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Ubicación</label>
                            <input type="text" name="ubicacion" class="input-adopcion bg-celeste" value="<?php echo $evento['ubicacion']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Usuario Responsable (ID)</label>
                            <input type="text" name="id_usuario" class="input-adopcion bg-celeste" value="<?php echo $evento['id_usuario']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Categoría (ID)</label>
                            <input type="text" name="id_categoria" class="input-adopcion bg-celeste" value="<?php echo $evento['id_categoria']; ?>">
                        </div>

                        <div class="text-end">
                            <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>