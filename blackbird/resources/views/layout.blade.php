<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      @yield('css')
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Blackbird - Joyas y Bijouterie</title>
  </head>
  <body>
    <div class="container">
      <?php
      $secciones = [
        "Home" => "index.php",
        "Preguntas Frecuentes" => "faq.php",
        "Contacto" => "contacto.php",
        "Registrarse" => "registro.php",
        "Ingresar" => "login.php"
      ];
      // if (!estaElUsuarioLogeado()) {
      //   $secciones["Registrarse"] = "registro.php";
      //   $secciones["Ingresar"] = "login.php";
      // } elseif (estaElUsuarioLogeado()) {
      //   $secciones["Mi Perfil"] = "profile.php";
      //   $secciones["Salir"] = "logout.php";
      // }
      ?>



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
        <a href="index.php"><img src="/img/logo.png" alt="logo">
      </a>
       <a href="index.php">
         <p id="marca">
           BLACKBIRD
         </p>
       </a>
      </div>


      <!-- barra de busqueda -->
      <div class="active-purple-3 active-purple-4 mb-4">
      <input id="search"class="form-control" type="text" placeholder="Search" aria-label="Search">
      </div>
      <div class="lupa">
       <a href="productos.php"><i class="fas fa-search"></i></a>
      </div>
      <div class="carrito">
        <a href="carrito.php"><i class="fas fa-shopping-basket"></i></a>
      </div>


      </header>
      <div class="banner">
        <img src="/img/banner.png" alt="BANNER">
        <h1>@yield('texto')</h1>
      </div>

      <div class="menuHor">
        <ul>
          <?php
          foreach ($secciones as $seccion => $url) :?>
            <li>
              <a href="<?=$url?>"><?=$seccion?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      @yield('main')
      <footer>
        <section class="newsletter-redesSociales">
          <!-- Redes Sociales -->
            <h5>¡Síganos en nuestras redes sociales!</h5>
            <div class="redesSociales">
              <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Newsletter -->
            <h5>Suscribirme para conocer mas novedades:</h5>
            <div class="footer-Sociales">
              <input id="E-MAIL" type="email" name="E-MAIL" value=""  placeholder="example@example.com" required>
              <button id="subs" type="submit" name="button">
                  Suscribirse
              </button>
            </div>
        </section>
        <div class="cierre">
            <a href="contacto.php">CONTACTO</a>
            <a href="faq.php">PREGUNTAS FRECUENTES</a>
        </div>

      </footer>
      <a id="volver" href="#"><i class="fas fa-arrow-circle-up"></i></a>
