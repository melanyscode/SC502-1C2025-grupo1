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
        <h1 class=" text-center txt-azul-oscuro mt-5">Aplicaciones de Adopcion</h1>

        <div class="row">
            <div class="col-2 ms-4 my-5 py-3 text-center bg-celeste rounded-5 txt-azul-oscuro">
                <p>Total de aplicaciones</p>
                <p class="fw-bold fs-4">4</p>
            </div>
        </div>
        <div class="ms-4 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col text-center" style="text-align: center;">Ver</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Anny Acevedo</td>
                        <td>12/03/2025</td>
                        <td>Enviada</td>
                        <td class=" text-center " style="vertical-align: middle;">
                            <a href="" class="mx-2 bg-celeste-oscuro text-white fw-bold py-1 px-4 rounded-pill text-decoration-none">Editar</a>
                        </td>
                        <td class="text-center" style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-1 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>
                    </tr>

                    <th scope="row">2</th>
                        <td>Anny Acevedo</td>
                        <td>12/03/2025</td>
                        <td>Enviada</td>
                        <td class=" text-center " style="vertical-align: middle;">
                            <a href="" class="mx-2 bg-celeste-oscuro text-white fw-bold py-1 px-4 rounded-pill text-decoration-none">Editar</a>
                        </td>
                        <td class="text-center" style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-1 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>
                    </tr>
                    <th scope="row">3</th>
                        <td>Anny Acevedo</td>
                        <td>12/03/2025</td>
                        <td>Enviada</td>
                        <td class=" text-center " style="vertical-align: middle;">
                            <a href="" class="mx-2 bg-celeste-oscuro text-white fw-bold py-1 px-4 rounded-pill text-decoration-none">Editar</a>
                        </td>
                        <td class="text-center" style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-1 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>
                    </tr>
                    <th scope="row">4</th>
                        <td>Anny Acevedo</td>
                        <td>12/03/2025</td>
                        <td>Enviada</td>
                        <td class=" text-center " style="vertical-align: middle;">
                            <a href="" class="mx-2 bg-celeste-oscuro text-white fw-bold py-1 px-4 rounded-pill text-decoration-none">Editar</a>
                        </td>
                        <td class="text-center" style="vertical-align: middle;">
                            <a href="" class=" mx-2 bg-red text-white fw-bold py-1 px-4 rounded-pill text-decoration-none my-2 ">Eliminar</a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>