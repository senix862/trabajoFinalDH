<?php $textoBanner="Contacto";
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/contacto.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
        <!-- Campos a llenar -->
      <label for="nombre">Nombre:</label>
      <br>
      <input id="nombre" type="text" name="nombre" value=""required>
      <br>
      <label for="email">E-mail:</label>
      <br>
      <input id="email" type="email" name="email" value=""required>
      <br>
      <label for="tel">Teléfono (opcional): </label>
      <br>
      <input id="tel" type="number" name="tel" value="">
      <br>
      <label for="mensaje">Mensaje:</label>
      <br>
      <textarea id="mensaje" name="mensaje" rows="" cols="" required></textarea>
      <br>
      <button type="submit" name="button">Enviar</button>
      <!-- Inicio Footer -->
        <?php require('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
