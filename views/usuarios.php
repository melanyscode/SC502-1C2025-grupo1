<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <?php include "componentes/links.php"; ?>

    </style>
</head>

<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "componentes/aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Inicio</h1>
        <div class="ms-4">
            <?php include "componentes/buscar.php" ?>
        </div>
        <div class="ms-4 my-5">
            <a href="agregarUsuario.php" class="my-5  py-2 px-4 bg-celeste rounded-pill text-decoration-none">Agregar</a>
        </div>
        <div class="ms-4">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Anny</td>
                        <td>Acevedo</td>
                        <td>8888888</td>
                        <td>anny@gmail.com</td>
                        <td>Activo</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                        <td>Melany</td>
                        <td>Gutierrez</td>
                        <td>8888888</td>
                        <td>melany@gmail.com</td>
                        <td>Activo</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                        <td>Isabel</td>
                        <td>Gutierrez</td>
                        <td>8888888</td>
                        <td>isabel@gmail.com</td>
                        <td>Activo</td>
                        <td>Admin</td>
                    </tr>
                </tbody>
                <th scope="row">1</th>
                        <td>Wishman</td>
                        <td>Gaitan</td>
                        <td>8888888</td>
                        <td>wishman@gmail.com</td>
                        <td>Activo</td>
                        <td>Admin</td>
                    </tr>
            </table>
</body>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>