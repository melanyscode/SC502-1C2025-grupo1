<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <?php include "componentes/links.php"; ?>
</head>

<body>
    <?php include_once("componentes/navbar.php"); ?>

    <body>

        <div class="login-container">
            <h3 class="mb-4 txt-azul-oscuro">Registrate</h3>
            <form>
                <div class="mb-3 text-start">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control bg-celeste" id="nombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3 text-start">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control bg-celeste" id="apellido" placeholder="Ingresa tu apellido">
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control bg-celeste" id="email" placeholder="Ingresa tu correo">
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control bg-celeste" id="password"
                        placeholder="Ingresa tu contraseña">
                </div>
                <button type="submit" class="btn bg-azul-oscuro txt-celeste w-100">Registrarse</button>
            </form>
            <div class="mt-3">
                <p>¿Ya tienes una cuenta? Inicia sesion <a href="#" class="txt-azul-oscuro">aqui.</a></p>
            </div>
        </div>
    </body>

</html>