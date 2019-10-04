<?php
  require_once('funciones/autoload.php');
  $secciones = [
    "Home" => "index.php",
    "Preguntas Frecuentes" => "faq.php",
    "Contacto" => "contacto.php",
    "Registrarse" => "registro.php",
    "Ingresar" => "login.php",
    "Mi Perfil" => "profile.php",
    "Salir" => "partials/logout.php"
  ];
 ?>

  <link rel="stylesheet" href="css/header.css">

<header>
  <div class="hamburguesa">
    <i class="fas fa-bars"><nav>
      <ul>
        <?php
        foreach ($secciones as $seccion => $url) :?>
          <li><a href="<?=$url?>"><?=$seccion?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </i>
  </div>

  <div class="logo">
    <a href="index.php"><img src="img/logo.png" alt="logo">
    <p>
      BLACKBIRD
    </p></a>
  </div>
  <div class="lupa">
   <a href="productos.php"><i class="fas fa-search"></i></a>
 </div>
 <div class="carrito">
    <a href="carrito.php"><i class="fas fa-shopping-basket"></i></a>
  </div>


</header>
<div class="banner">
  <div class="ban">
    <img src="img/banner.png" alt="BANNER">
    <h1><?php echo $textoBanner ?></h1>
  </div>
</div>
