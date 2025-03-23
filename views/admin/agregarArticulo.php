<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include "componentes/links.php"; ?>

    </style>
</head>

<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "componentes/aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Articulo</h1>

        <div class="container  mt-5 pt-5">
            <form action="" method="POST" class="mt-5">
                <div class="row">
                    <div class="col">
                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <p>Ingrese una imagen</p>
                            <div class="img-preview mx-5 mb-5 mt-3 ">
                                <img src="" alt="Image preview" id="previewArticulo" class="text-center imgpreview" data-preview> 
                            </div>
                            <input type="file" multiple hidden id="inputArticulo" data-input>
                            <div class="text-center">
                                <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgArticulo" data-btn>Subir Imagen</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="mb-3">
                            <label>Titulo</label>
                            <input type="text" class="input-adopcion bg-celeste">
                        </div>
                        <div class="mb-3">
                            <label>Fecha</label>
                            <input type="date" class="input-adopcion bg-celeste">
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Categoría</label>
                                <select name="" id="" class="input-adopcion bg-celeste">
                                    <option value="">Articulo</option>
                                    <option value="">Cuidado</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label>Subcategoría</label>
                                <select name="" id="" class="input-adopcion bg-celeste">
                                    <option value="">Historias de Éxito</option>
                                    <option value="">Como ayudar</option>
                                    <option value="">Seguimiento de M</option>
                                </select>
                            </div>
                        </div>


                        
                       
                       

                    </div>
                    <div class="row">
                            <label>Contenido</label>
                            <textarea type="text" class="input-adopcion bg-celeste"> </textarea>
                        </div>
                </div>
                <div class="text-end">
                       <button class="d-inline border-0 px-4 py-2 bg-azul-oscuro rounded-5 text-white fw-bold mt-2 text-end" type="submit">Publicar</button>
                       </div>
            </form>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>