
<?php
session_start();

if (isset($_POST['id']) && $_POST['id'] == $_SESSION['user']['id_usuario']) {
    $_SESSION['user']['nombre'] = $_POST['nombre'];
    $_SESSION['user']['correo'] = $_POST['correo'];
    $_SESSION['user']['telefono'] = $_POST['telefono'];
    $_SESSION['user']['estado'] = $_POST['estado'];
    $_SESSION['user']['id_rol'] = (int)$_POST['rol'];

    if (isset($_POST['img_url'])) {
        $_SESSION['user']['img_url'] = $_POST['img_url'];
    }

    echo 1;
    exit();
}

echo 0;