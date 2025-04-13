<?php require_once __DIR__ .'/../navbar.php'; ?>

    <body class="d-flex flex-column vh-100">

        <div class="login-container">
            <h3 class="mb-4 txt-azul-oscuro">Registrate</h3>
            <form  method="POST">
                <div class="mb-3 text-start">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control bg-celeste" id="registrarNombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3 text-start">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control bg-celeste" id="registrarApellido" placeholder="Ingresa tu apellido">
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control bg-celeste" id="registrarEmail" placeholder="Ingresa tu correo">
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control bg-celeste" id="password"
                        placeholder="Ingresa tu contraseña">
                
                        <input type="hidden" name="estado" id="registrarEstado" value="1">
                        <input type="hidden" name="rol" id="registrarRol" value="2">
                </div>
                <button type="button" class="btn bg-azul-oscuro txt-celeste w-100" id="registrarse">Registrarse</button>
            </form>
            <div class="mt-3">
                <p>¿Ya tienes una cuenta? Inicia sesion <a href="#" class="txt-azul-oscuro">aqui.</a></p>
            </div>
        </div>
 
        
    </body>
    <?php require_once  __DIR__ .'/../footer.php'; ?>