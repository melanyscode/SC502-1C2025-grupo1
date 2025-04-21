<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



?>

<nav class="navbar m-0 py-3 text-center d-flex align-items-center justify-content-center">
  <div class="container-fluid mx-sm-5 px-sm-5 d-flex justify-content-center justify-content-lg-between">
    <div class="links">

      <ul class=" d-flex flex-row justify-content-around align-items-center mb-0 nav-list">
      <img src="assets/img/paw-solid.svg" alt="" class="" height="30px">
        <li class="ms-2"><a href="index.php" class="txt-black ">Inicio</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=nosotros" class="txt-black ">Nosotros</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=contacto" class="txt-black ">Contacto</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=blog" class="txt-black ">Blog</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=encuentrame" class="txt-black ">Encuentrame</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=adopta" class="txt-black ">Adopta</a></li>
        <li class="ms-2"><a href="index.php?c=landing&a=calendario" class="txt-black ">Calendario</a></li>
       <?php if (isset($_SESSION['user']) && $_SESSION['user']['id_rol'] == 1) { ?>
        <li class="ms-2"><a href="index.php?c=admin&a=usuario" class="txt-black ">Admin</a></li>
        <?php }?>
      </ul>
      </div>
      <div class="">
      <?php if (!isset($_SESSION['user'])) { ?>
        <a href="index.php?c=usuario&a=login"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
          </svg></a>
      </div>
      <?php }?>
      <?php if (isset($_SESSION['user'])) { ?>
        <a href="index.php?c=usuario&a=perfil"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
          </svg></a>
      </div>
      <?php }?>
    
  </div>
</nav>