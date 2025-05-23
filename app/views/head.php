<?php // todos los links de css y javascript que se utilicen
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo isset($titulo) ? $titulo : "PawFind"; ?></title>
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="website icon" href="assets/img/paw-solid.svg">
    <script src="assets/javascript/script.js" defer></script>
</head>

<body>
<div id="modal-confirmacion" class="modal-confirmacion">
        <div class="contenido">
            <p id="mensaje"></p>
            <div class="botones">
                <button id="confirmar" class="confirmar">Aceptar</button>
                <button id="cancelar" class="cancelar">Cancelar</button>
            </div>
        </div>
    </div>

    <div id="modal-informacion" class="modal-confirmacion">
        <div class="contenido">
            <p id="mensaje-info"></p>
            <div class="botones">
                <button id="confirmar-info" class="confirmar">Aceptar</button>

            </div>
        </div>
    </div>
