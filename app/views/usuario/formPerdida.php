
<body class="d-flex flex-column min-vh-100">
  

    <div class="contenedor-publicacion">
        <h1 class="titulo-publicacion">Publicar Mascota Perdida</h1>

        <div class="formulario">
            <form action="index.php?c=usuario&a=mascotaPerdida" method="POST">
                <div class="row">
                    <!-- Columna 1: Subida de imagen -->
                    <div class="columna">
                        <div class="contenedor-imagen">
                            <div class="img-preview">
                                <img src="assets/bg-11.jpg" alt="Vista previa" id="imgpreview" data-preview>
                            </div>
                            <input type="file" hidden id="imagenMascota"  name="imagenMascota" data-input>
                            <button class="btn-subir-imagen" id="btnImgMascota" data-btn>Subir Imagen</button>
                        </div>
                    </div>

                    <!-- Columna 2: Datos del usuario y mascota -->
                    <div class="columna">
                    <input type="text" hidden name="id_usuario" value="<?php echo $_SESSION['user']['id_usuario'] ?>">

                        <label>Nombre de la Mascota</label>
                        <input type="text" name="nombreMascota" class="input-personalizado">

                        <label>Raza</label>
                        <input type="text" name="razaPerdido" class="input-personalizado">
                        <label>Tipo</label>
                        <select class="input-personalizado" name="tipoPerdido">
                            <option value="Perro">Perdido</option>
                            <option value="Gato">Encontrado</option>
                        </select>

                      

                        <label>Descripción</label>
                        <textarea class="input-personalizado" rows="3" name="descripcionPerdido"></textarea>
                    </div>

                    <!-- Columna 3: Información del suceso -->
                    <div class="columna">
                        <label>Fecha</label>
                        <input type="date" class="input-personalizado" name="fechaPerdido">

                        <label>Ubicación</label>
                        <input type="text" class="input-personalizado" name="ubicacionMascota">

                        <label>Comentario</label>
                        <textarea class="input-personalizado" name="comentarioMascota" rows="3"></textarea>

                        <label>Estado</label>
                        <select class="input-personalizado" name="estadoMascota">
                            <option value="Perdido">Perdido</option>
                            <option value="Encontrado">Encontrado</option>
                        </select>
                      

                        <button class="btn-publicar" type="submit">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>