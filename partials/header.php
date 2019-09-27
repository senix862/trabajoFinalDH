<?php
  $secciones = [
    "Home" => "index.php",
    "Preguntas Frecuentes" => "faq.php",
    "Contacto" => "contacto.php",
    "Registrarse" => "registro.php",
    "Ingresar" => "login.php",
    "Mi Perfil" => "profile.php"
  ];
 ?>

  <link rel="stylesheet" href="css/header.css">

<header>
  <div class="hamburguesa">
    <i class="fas fa-bars"><nav>
      <ul>
        <?php
        foreach ($secciones as $seccion => $url) :?>
          <li><a href="<?php echo $url?>"><?php echo $seccion?></a></li>
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

<<<<<<< HEAD
  <div class="carrito">
    <div class="carrit">
      <a href="productos.php"><i class="fas fa-search"></i></a>
=======
     <div class="lupa">
      <a href="productos.php"><i class="fas fa-search"></i></a>
    </div>
    <div class="carrito">
>>>>>>> 251eb44c66b870d96cf2ca88ffc33785bf5d1701
      <a href="carrito.php"><i class="fas fa-shopping-basket"></i></a>
    </div>
  </div>

</header>
