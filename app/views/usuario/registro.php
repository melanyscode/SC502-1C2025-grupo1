

<body>
    <?php include_once("app/views/navbar.php"); ?>

    <body class="d-flex flex-column vh-100">

        <div class="login-container">
            <h3 class="mb-4 txt-azul-oscuro">Registrate</h3>
            <form action="index.php?c=usuario&a=registroPost" method="POST">
                <div class="mb-3 text-start">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control bg-celeste" name="nombreRegistro" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3 text-start">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control bg-celeste" name="apellidoRegistro" placeholder="Ingresa tu apellido">
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control bg-celeste" id="email" placeholder="Ingresa tu correo" name="correoRegistro">
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control bg-celeste" id="password" placeholder="Ingresa tu contraseña" name="password">
                    <input type="hidden" name="estado" value="1">
                        <input type="hidden" name="rol"  value="2">
                </div>
                <button type="submit" class="btn bg-azul-oscuro txt-celeste w-100">Registrarse</button>
                <?php if (!empty($mensaje)) echo "<p class='mt-3' >$mensaje</p>"; ?>
            </form>
            <div class="mt-3">
                <p>¿Ya tienes una cuenta? Inicia sesion <a href="index.php?c=usuario&a=login" class="txt-azul-oscuro">aqui.</a></p>
            </div>
        </div>
        <?php include_once("app/views/footer.php"); ?>
        
    </body>

</html>