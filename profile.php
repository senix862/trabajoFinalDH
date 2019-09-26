<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/profile.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Perfil - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
        <!-- Banner -->
        <section class="banner">
          <div class="ban">
            <img src="img/banner.png" alt="BANNER">
            <h1>Mi Perfil</h1>
          </div>
        </section>
        <section class="main-profile">
            <div class="img-background">
              <img src="https://rotary6690.org/wp-content/plugins/dacdbplus/img/no_image.jpg">
              <!-- <i id="pencil" class="fas fa-pencil-alt"></i> -->
            </div>
            <h2>Homero J. Simpson</h2>
            <br>
            <h4> Email: amantedelacomida53@aol.com</h4>
            <br>
            <button class="editar" type="submit" name="button">Editar Perfil</button>
        </section
      </main>
      <!-- Footer -->
        <?php require('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
