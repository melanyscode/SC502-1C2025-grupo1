<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Mascota Perdida</title>
    <link rel="stylesheet" href="styles/publicar_mascota.css">
    <?php include "componentes/links.php"; ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once("componentes/navbar.php"); ?>

    <div class="contenedor-publicacion">
        <h1 class="titulo-publicacion">Publicar Mascota Perdida</h1>

        <div class="formulario">
            <form action="" method="POST">
                <div class="row">
                    <!-- Columna 1: Subida de imagen -->
                    <div class="columna">
                        <div class="contenedor-imagen">
                            <div class="img-preview">
                                <img src="assets/bg-11.jpg" alt="Vista previa" id="imgpreview" data-preview>
                            </div>
                            <input type="file" hidden id="inputMascota" data-input>
                            <button class="btn-subir-imagen" id="btnImgMascota" data-btn>Subir Imagen</button>
                        </div>
                    </div>

                    <!-- Columna 2: Datos del usuario y mascota -->
                    <div class="columna">
                        <label>Nombre</label>
                        <input type="text" class="input-personalizado">

                        <label>Apellido</label>
                        <input type="text" class="input-personalizado">

                        <label>Teléfono</label>
                        <input type="text" class="input-personalizado">

                        <label>Nombre de la Mascota</label>
                        <input type="text" class="input-personalizado">

                        <label>Raza</label>
                        <input type="text" class="input-personalizado">

                        <label>Edad</label>
                        <input type="text" class="input-personalizado">

                        <label>Descripción</label>
                        <textarea class="input-personalizado" rows="3"></textarea>
                    </div>

                    <!-- Columna 3: Información del suceso -->
                    <div class="columna">
                        <label>Fecha</label>
                        <input type="date" class="input-personalizado">

                        <label>Ubicación</label>
                        <input type="text" class="input-personalizado">

                        <label>Comentario</label>
                        <textarea class="input-personalizado" rows="3"></textarea>

                        <label>Estado</label>
                        <select class="input-personalizado">
                            <option value="">Perdido</option>
                            <option value="">Encontrado</option>
                        </select>

                        <button class="btn-publicar" type="submit">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>