<body class="d-flex flex-column min-vh-100">


    <div class="contenedor-publicacion">
        <h1 class="titulo-publicacion">Editar Perfil</h1>

        <div class="formulario">
            <form action="index.php?c=usuario&a=editarPerfilPost" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Columna 1: Subida de imagen -->
                    <div class="columna">
                        <div class="contenedor-imagen">
                            <div class="img-preview">
                                <img src="<?= $_SESSION['user']['img_url'] != '' ? htmlspecialchars($_SESSION['user']['img_url']) : 'app/uploads/default.jpg' ?>" alt="Vista previa" id="imgpreview" data-preview>
                            </div>
                            <input type="file" hidden id="inputEditPerfil" data-input name="inputEditPerfil">
                            <button class="btn-subir-imagen" id="btnImgMascota" data-btn>Subir Imagen</button>
                        </div>
                    </div>

                    <!-- Columna 2: Datos del usuario y mascota -->
                    <div class="columna">
                        <input type="number" hidden name="idEditPerfil" class="input-personalizado" value="<?php echo $_SESSION['user']['id_usuario'] ?>">

                        <input type="number" hidden name="estadoEditPerfil" value="<?php echo $_SESSION['user']['estado'] ?>">
                        <input type="number" hidden name="rolEditPerfil" value="<?php echo $_SESSION['user']['id_rol'] ?>">
                        <label>Nombre</label>
                        <input type="text" class="input-personalizado" name="nombreEditPerfil" value="<?php echo $_SESSION['user']['nombre'] ?>">

                        <label>Apellido</label>
                        <input type="text" class="input-personalizado" name="apellidoEditPerfil" value="<?php echo $_SESSION['user']['apellido'] ?>">
                        <label>Correo</label>
                        <input type="text" class="input-personalizado" name="correoEditPerfil" value="<?php echo $_SESSION['user']['correo'] ?>">

                        <label>Teléfono</label>

                        <input type="text" class="input-personalizado" name="telefonoEditPerfil" value=" <?= $_SESSION['user']['telefono'] != '' ? htmlspecialchars($_SESSION['user']['telefono']) : 'No tiene telefono guardado' ?>" > 

                        <label>Dirección</label>
                        <input type="text" class="input-personalizado" name="direccionEditPerfil" value="<?= $_SESSION['user']['direccion'] != '' ? htmlspecialchars($_SESSION['user']['direccion']) : 'No tiene direccion guardada' ?>" >


                    </div>



                    <button class="btn-publicar" type="submit">Guardar cambios</button>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>