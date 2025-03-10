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
        <h1 class=" text-center txt-azul-oscuro mt-5">Agregar Anuncio</h1>

        <div class="container  mt-5 pt-5">
            <div class="row">
                <div class="col">
                    <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                        <div class="img-preview m-5 ">
                            <img src="" alt="Image preview" id="imgpreview" class="imgpreview text-center">
                        </div>
                        <input type="file" multiple hidden id="inputAdopciones">
                        <div class="text-center">
                        <button class="d-inline border-0 px-4 py-2 bg-celeste-oscuro rounded-5 text-white fw-bold" id="btnImgAdopciones">Subir Imagen</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <form action="" method="POST" class="mt-5"> 
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" class="input-adopcion bg-celeste">
                        </div>
                        <div class="row">
                        <div class="col mb-3">
                            <label>Nombre</label>
                            <input type="text" class="input-adopcion bg-celeste">
                        </div>
                        <div class="col mb-3">
                            <label>Nombre</label>
                            <input type="text" class="input-adopcion bg-celeste">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" class="input-adopcion bg-celeste">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>