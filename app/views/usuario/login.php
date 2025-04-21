

<body>

    <body class="d-flex flex-column vh-100">

        <div class="login-container">


            <div class="">
                <h3 class="mb-4 txt-azul-oscuro">Inicio Sesion</h3>
                <form action="index.php?c=usuario&a=loginPost" method="POST" >
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" name="correo"class="form-control bg-celeste" id="email" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control bg-celeste" id="password"
                            placeholder="Ingresa tu contraseña">
                    </div>
                    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
                    <button type="submit" class="btn bg-azul-oscuro txt-celeste w-100" >Iniciar Sesión</button>
                <div class="mt-3">
                    <p>¿No tienes una cuenta aun? <a href="index.php?c=usuario&a=registro" class="txt-azul-oscuro">Registrate aqui</a></p>
                    
                </div>
            </div>
        </div>
    </body>

</html>