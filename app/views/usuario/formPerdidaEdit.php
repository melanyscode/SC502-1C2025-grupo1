<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once  'app/models/MascotaPerdida.php';

    $mascota = MascotaPerdida::buscarMascota($id);
 
}
?>

<body class="d-flex flex-column min-vh-100">
  

    <div class="contenedor-publicacion">
        <h1 class="titulo-publicacion">Editar Mascota Perdida</h1>

        <div class="formulario">
            <form action="index.php?c=usuario&a=editMascotaPerdida" method="POST">
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
                    <input type="text" hidden name="id_usuario" value="<?php echo $id ?>">

                        <label>Nombre de la Mascota</label>
                        <input type="text" name="nombreMascota" class="input-personalizado" value="<?php echo $mascota['nombre'] ?>">

                        <label>Raza</label>
                        <input type="text" name="razaPerdido" class="input-personalizado" value="<?php echo $mascota['raza'] ?>">
                        <label>Tipo</label>
                        <select class="input-personalizado" name="tipoPerdido">
                            <option value="Perro" <?= ($mascota['tipo'] == 'Perro') ? 'selected' : '' ?>>Perro</option>
                            <option value="Gato" <?= ($mascota['tipo'] == 'Gato') ? 'selected' : '' ?>>Gato</option>
                        </select>

                      

                        <label>Descripción</label>
                        <textarea class="input-personalizado" rows="3" name="descripcionPerdido" ><?php echo htmlspecialchars($mascota['descripcion']); ?></textarea>
                    </div>

                    <!-- Columna 3: Información del suceso -->
                    <div class="columna">
                        <label>Fecha</label>
                        <input type="date" class="input-personalizado" value="<?php echo htmlspecialchars($mascota['fecha_perdida']); ?>" name="fechaPerdido">

                        <label>Ubicación</label>
                        <input type="text" class="input-personalizado" name="ubicacionMascota" value="<?php echo htmlspecialchars($mascota['ubicacion_perdida']); ?>">

                        <label>Comentario</label>
                        <textarea class="input-personalizado" name="comentarioMascota" rows="3"> <?php echo htmlspecialchars($mascota['comentario']); ?></textarea>

                        <label>Estado</label>
                        <select class="input-personalizado" name="estadoMascota">
                        <option value="Perdido" <?= ($mascota['tipo'] == 'Perdido') ? 'selected' : '' ?>>Perdido</option>
                        <option value="Encontrado" <?= ($mascota['tipo'] == 'Encontrado') ? 'selected' : '' ?>>Encontrado</option>
                        </select>
                      

                        <button class="btn-publicar" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>