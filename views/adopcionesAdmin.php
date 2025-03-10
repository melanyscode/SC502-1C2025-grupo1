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
        <h1 class=" text-center txt-azul-oscuro mt-5">Adopciones</h1>
        <div class="ms-4">
            <?php include "componentes/buscar.php" ?>
        </div>
        <div class="ms-4 my-5">
            <a href="agregarAnuncio.php" class="my-5  py-2 px-4 bg-celeste rounded-pill text-decoration-none">Crear anuncio</a>
        </div>
        <div class="ms-4">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Publicacion</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Fecha de publicacion</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="assets/pexels-ingewallu-177809.jpg" class="table-img" alt=""> </td>
                        <td style="width: 600px;">
                            <p>Tonet</p>
                            <p>
                                Tonet es un gato juguetón y cariñoso que disfruta de la compañía humana, es sociable con otras mascotas y se adapta fácilmente a nuevos espacios.
                            </p>
                        </td>
                        <td>12/02/2024</td>

                        <td class=" " style="vertical-align: middle;">

                            <a href="editarAnuncio.php" class="mx-2 bg-celeste-oscuro text-white fw-bold py-2 px-4 rounded-pill text-decoration-none">Editar</a>

                        </td>
                        <td style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-2 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>


                    </tr>
                    <tr>
                        <td><img src="assets/pexels-ingewallu-177809.jpg" class="table-img" alt=""> </td>
                        <td style="width: 600px;">
                            <p>Tonet</p>
                            <p>
                                Tonet es un gato juguetón y cariñoso que disfruta de la compañía humana, es sociable con otras mascotas y se adapta fácilmente a nuevos espacios.
                            </p>
                        </td>
                        <td>12/02/2024</td>


                        <td class=" " style="vertical-align: middle;">

                            <a href="" class="mx-2 bg-celeste-oscuro text-white fw-bold py-2 px-4 rounded-pill text-decoration-none my-2">Editar</a>

                        </td>
                        <td style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-2 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>

                    </tr>
                </tbody>
            </table>
</body>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>