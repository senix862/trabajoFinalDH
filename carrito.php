<?php
$textoBanner="Mi Carrito";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/carrito.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>CARRITO - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
      <section class="main-carrito">
        <div class="main-productos">

          <h2>Productos</h2>
          <div class="caracteristicas">
            <h4>Descripcion</h4>
            <h4 class="num" id="cantidad">Cantidad</h4>
            <h4 class="num">Precio Unitario</h4>
          </div>
          </article>
          <div class="productos">
            <article class="nombre">
              <ul>
                <li>Anillo Amatista</li>
                <li>Dije piedra Luna</li>
                <li>Aros Cuarzo</li>
                <br>
                <li>TOTAL</li>
              </ul>
            </article>
          <article class="cantidad">
            <ul>
              <button class="masmenos" type="submit" name="masmenos">-</button>
              <li>2</li>
              <button class="masmenos" type="submit" name="masmenos">+</button>
              <button class="masmenos" type="submit" name="masmenos">-</button>
              <li>3</li>
              <button class="masmenos" type="submit" name="masmenos">+</button>
              <button class="masmenos" type="submit" name="masmenos">-</button>
              <li>4</li>
              <button class="masmenos" type="submit" name="masmenos">+</button>
              <li>9</li>
            </ul>
          </article>
          <article class="precio">
            <ul>
              <li>200</li>
              <br>
              <li>300</li>
              <br>
              <li>400</li>
              <br>
              <li>900</li>
            </ul>
          </article>
        </div>
        </div>
        <button type="submit" name="button">COMPRAR</button>
      </section>
      </main>
      <!-- Inicio Footer -->
        <?php require('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
