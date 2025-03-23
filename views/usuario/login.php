

<body>

    <body class="d-flex flex-column vh-100">

        <div class="login-container">


            <div class="">
                <h3 class="mb-4 txt-azul-oscuro">Inicio Sesion</h3>
                <form>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control bg-celeste" id="email" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control bg-celeste" id="password"
                            placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="button" class="btn bg-azul-oscuro txt-celeste w-100" onclick="window.location.href='index.php?controller=usuario&action=perfil'">Iniciar Sesión</button>
                <div class="mt-3">
                    <p>¿No tienes una cuenta aun? <a href="" class="txt-azul-oscuro">Registrate aqui</a></p>
                    <p><a href="#" class="txt-azul-oscuro">¿Olvidaste tu contraseña?</a></p>
                </div>
            </div>
        </div>
    </body>

</html>