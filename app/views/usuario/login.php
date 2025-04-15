<?php require_once __DIR__ .'/../navbar.php'; ?>

<body>

    <body class="d-flex flex-column vh-100">

        <div class="login-container">


            <div class="">
                <h3 class="mb-4 txt-azul-oscuro">Inicio Sesion</h3>
                <form method="POST">
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control bg-celeste" id="loginEmail" placeholder="Ingresa tu correo">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control bg-celeste" id="loginPassword"
                            placeholder="Ingresa tu contraseña">
                    </div>
                    <input type="hidden" name="action" value="login">
                    <button type="submit" id="login" class="btn bg-azul-oscuro txt-celeste w-100" >Iniciar Sesión</button>
                <div class="mt-3">
                    <p>¿No tienes una cuenta aun? <a href="index.php?p=registrarse" class="txt-azul-oscuro">Registrate aqui</a></p>
                   
                </div>
            </div>
        </div>
    </body>

</html>
<?php require_once  __DIR__ .'/../footer.php'; ?>