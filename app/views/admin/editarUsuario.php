<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once  'app\model\Usuario.php';

    $usuario = Usuario::buscarUsuario($id);
}
?>


<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Editar Usuario</h1>

        <div class="container  mt-5 pt-5">
            <form action="" method="POST"  enctype="multipart/form-data" class="mt-5">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="img-preview m-5 ">
                                <img src="<?php echo $usuario['img_url'];?>" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                            </div>
                            <input type="file" multiple hidden id="editImagenUsuario" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgAdopciones" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="row">
                            <div class="col mb-3">
                                <input type="hidden" value="<?php echo $usuario['id_usuario']?>" id="editIdUsuario">
                                <label>Nombre</label>
                                <input type="text" class="input-adopcion bg-celeste" value="<?php echo $usuario['nombre'] ?>" id="editNombreUsuario">
                            </div>
                            <div class="col mb-3">
                                <label>Apellido</label>
                                <input type="text" class="input-adopcion bg-celeste" id="editApellidoUsuario" value="<?php echo $usuario['apellido']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Telefono</label>
                                <input type="text" class="input-adopcion bg-celeste" id="editTelefonoUsuario" value="<?php echo $usuario['telefono']?>">
                            </div>

                        </div>
                        <div class=" col mb-3">
                                <label>Correo</label>
                                <input type="text" class="input-adopcion bg-celeste"id="editCorreoUsuario" value="<?php echo $usuario['correo']?>">
                        </div>

                        <div class=" row">
                                <div class="col mb-3">
                                    <label>Estado</label>
                                    <select name="estado" id="editEstadoUsuario" class="input-adopcion bg-celeste">
                                        <option value="1" <?= ($usuario['estado'] == 1) ? 'selected' : '' ?>>Activo</option>
                                        <option value="0" <?= ($usuario['estado'] == 0) ? 'selected' : '' ?>>Inactivo</option>
                                       
                                    </select>
                            </div>
                            <div class=" col mb-3">
                                    <label>Rol</label>

                                    <select name="rol" id="editRolUsuario" class="input-adopcion bg-celeste">
                                        <option value="1" <?= ($usuario['id_rol'] == 1) ? 'selected' : '' ?>>Administrador</option>
                                        <option value="2" <?= ($usuario['id_rol'] == 2) ? 'selected' : '' ?>>Usuario</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="button" id="editarUsuario">Guardar</button>
                            </div>


                        </div>
                    </div>
            </form>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>