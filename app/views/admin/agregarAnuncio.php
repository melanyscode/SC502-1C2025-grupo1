
<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Anuncio</h1>

        <div class="container  mt-5 pt-5">
        <form action="index.php?c=admin&a=guardarAnuncio" method="POST" enctype="multipart/form-data" class="mt-5">
        
            <div class="row">
                <div class="col">
                    <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="img-preview m-5 ">
                            <img src="" alt="Image preview" id="imgpreview" class="imgpreview text-center" data-preview>
                        </div>
                        <input type="file" multiple hidden id="inputAdopciones" name="imagenes[]" accept="image/*" data-input>

                        <div class="text-center">
                        <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" name="ImgAdopciones" data-btn>Subir Imagen</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                 
                        <div class="mb-3">
                        <input type="text" hidden name="usuario" class="input-adopcion bg-celeste" value="<?php echo $_SESSION['user']['id_usuario'] ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombreMascota" class="input-adopcion bg-celeste">
                        </div>
                        <div class="row">
                        <div class="col mb-3">
                            <label>Raza</label>
                            <input type="text" name="raza" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Edad</label>
                            <input type="text" name="edad" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Peso</label>
                            <input type="text" name="peso" class="input-adopcion bg-celeste">
                        </div>
                        
                        </div>
                        <div class="mb-3">
                            <label>Tipo</label>
                          
                            <select name="tipo" class="input-adopcion bg-celeste">
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                </select>
                        </div>
                        <div class="col mb-3">
                            <label>Descripcion</label>
                            <input type="text" name="descripcion" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Enfermedad</label>
                            <input type="text" name="enfermedad" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Atencion</label>
                            <input type="text" name="atencion" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Estado</label>
                            <select name="estado" id="addRolUsuario" class="input-adopcion bg-celeste">
                                    <option value="Disponible">Disponible</option>
                                    <option value="No disponible">No Disponible</option>
                                </select>
                        </div>
                        <div class="text-end">
                       <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Publicar</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

