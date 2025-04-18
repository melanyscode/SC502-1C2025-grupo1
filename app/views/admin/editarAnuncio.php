<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once  'app/models/MascotaAdopcion.php';

    $mascota = MascotaAdopcion::buscarMascota($id);
}
?>


<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Editar Anuncio</h1>

        <div class="container  mt-5 pt-5">
            <div class="row">
                <div class="col">
                    <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="img-preview m-5 ">
                            <img src="" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                        </div>
                        <input type="file" multiple hidden id="inputAdopciones" data-input>
                        <div class="text-center">
                            <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgAdopciones" data-btn>Subir Imagen</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <form action="index.php?c=admin&a=guardarEditAdopcion" method="POST" class="mt-5" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" class="input-adopcion bg-celeste" value="<?php echo $mascota['nombre']?>">

                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Raza</label>
                                <input type="text" class="input-adopcion bg-celeste" value="<?php echo $mascota['raza']?>">
                            </div>

                            <div class="col mb-3">
                                <label>Edad</label>
                                <input type="text" class="input-adopcion bg-celeste" value="<?php echo $mascota['edad']?>">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Peso</label>
                                <input type="text" class="input-adopcion bg-celeste" 
                                value="<?php echo $mascota['peso']?>">
                            </div>

                            <div class="col mb-3">
                            <label>Tipo</label>
                                <select name="estadoEdit" id="addEstadoUsuario" class="input-adopcion bg-celeste">
                                    <option value="Perro" <?= ($mascota['tipo'] == 'Perro') ? 'selected' : '' ?>>Perro</option>
                                    <option value="Gato" <?= ($mascota['tipo'] == 'Gato') ? 'selected' : '' ?>>Gato</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            

                            <div class="col mb-3">
                            <label>Estado</label>
                                <select name="estadoEdit" id="addEstadoUsuario" class="input-adopcion bg-celeste">
                                    <option value="Disponible" <?= ($mascota['estado'] == 'Disponible') ? 'selected' : '' ?>>Disponible</option>
                                    <option value="No disponible" <?= ($mascota['estado'] == 'No Disponible') ? 'selected' : '' ?>>No Disponible</option>
                                </select>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Descripcion</label>
                            <textarea type="text" class="input-adopcion bg-celeste"> </textarea>
                        </div>
                        <div class="text-end">
                            <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>