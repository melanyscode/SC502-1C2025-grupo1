</head>

<body class="body-admin bg-celeste">

    <div class=" bg-celeste">
        <?php include "aside.php" ?>
    </div>

    <div class=" m-3 ms-1 p-4 bg-white rounded-5">
        <h1 class=" text-center txt-azul-oscuro mt-5">Usuarios</h1>
        <div class="ms-4">
            <div class="input-group my-3 d-flex align-items-center">
                <input type="text" class="border-0 bg-celeste rounded-pill px-3 py-2" placeholder="Buscar" style="width: 90%;">
                <button class="p-0 bg-transparent border-0"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="25px" class="ms-2">
                        <path fill="#176b87" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg></button>
            </div>
        </div>
        <div class="ms-4 my-5">
            <a href="index.php?p=usuarioagregar"  class="my-5  py-2 px-4 bg-celeste rounded-pill text-decoration-none">Agregar</a>
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
                        <th scope="col " style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="usuarios" >
                 
                </tbody>
             
            </table>
</body>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>