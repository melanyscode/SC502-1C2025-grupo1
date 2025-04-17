<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once  'app/models/Usuario.php';

    $usuario = Usuario::buscarUsuario($id);
}
?>


<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Usuario</h1>

        <div class="container  mt-5 pt-5">
            <form action="index.php?c=admin&a=guardarEditUsuario" method="POST" class="mt-5" enctype="multipart/form-data">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="img-preview m-5 ">
                                <img src="<?php echo $usuario['img_url'];?>" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                            </div>
                            <input type="file" multiple hidden name="editFotoUsuario" id="inputAdopciones" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgAdopciones" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="row">
                            <div class="col mb-3">
                            <input type="hidden" value="<?php echo $usuario['id_usuario']?>" name="id" id="editIdUsuario">
                                <label>Nombre</label>
                                <input type="text" name="nombreEdit" value="<?php echo $usuario['nombre'] ?>" class="input-adopcion bg-celeste">
                            </div>
                            <div class="col mb-3">
                                <label>Apellido</label>
                                <input type="text" name="apellidoEdit" class="input-adopcion bg-celeste" value="<?php echo $usuario['apellido']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Telefono</label>
                                <input type="text" name="telefonoEdit" class="input-adopcion bg-celeste" value="<?php echo $usuario['telefono']?>">
                            </div>

                        </div>
                        <div class="col mb-3">
                            <label>Correo</label>
                            <input type="email" name="correoEdit" value="<?php echo $usuario['correo']?>" class="input-adopcion bg-celeste">
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <select name="estadoEdit" id="addEstadoUsuario" class="input-adopcion bg-celeste">
                                <option value="1" <?= ($usuario['estado'] == 1) ? 'selected' : '' ?>>Activo</option>
                                <option value="0" <?= ($usuario['estado'] == 0) ? 'selected' : '' ?>>Inactivo</option>

                                </select>
                            </div>
                            <div class="col mb-3">
                                <label>Rol</label>

                                <select name="rolEdit" id="addRolUsuario" class="input-adopcion bg-celeste">
                                <option value="1" <?= ($usuario['id_rol'] == 1) ? 'selected' : '' ?>>Administrador</option>
                                        <option value="2" <?= ($usuario['id_rol'] == 2) ? 'selected' : '' ?>>Usuario</option>
                                        
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>