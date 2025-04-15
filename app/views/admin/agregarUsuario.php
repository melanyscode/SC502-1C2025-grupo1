

<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Usuario</h1>

        <div class="container  mt-5 pt-5">
            <form action="" method="POST" class="mt-5" enctype="multipart/form-data">

                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <div class="img-preview m-5 ">
                                <img src="" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                            </div>
                            <input type="file" multiple hidden id="addImageUsuario"  name="addImageUsuario" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgAdopciones" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="row">
                            <div class="col mb-3">
                                <label>Nombre</label>
                                <input type="text" id="addNombreUsuario" class="input-adopcion bg-celeste">
                            </div>
                            <div class="col mb-3">
                                <label>Apellido</label>
                                <input type="text" id="addApellidoUsuario" class="input-adopcion bg-celeste">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Telefono</label>
                                <input type="text" id="addTelefonoUsuario" class="input-adopcion bg-celeste">
                            </div>

                        </div>
                        <div class="col mb-3">
                            <label>Correo</label>
                            <input type="text" id="addCorreoUsuario" class="input-adopcion bg-celeste">
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label>Estado</label>
                                <select name="estado" id="addEstadoUsuario" class="input-adopcion bg-celeste">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                  
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label>Rol</label>

                                <select name="rol" id="addRolUsuario" class="input-adopcion bg-celeste">
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                </select>
                            </div>
                        </div>
                       <div class="text-end">
                       <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" id="agregarUsuario" type="button">Guardar</button>
                       </div>


                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
