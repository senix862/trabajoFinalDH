<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/carrito.css">
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
      <!-- Banner -->
        <section class="banner">
          <div class="ban">
            <img src="img/banner.png" alt="BANNER">
            <h1>CARRITO</h1>
          </div>
        </section>
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
              </ul>
            </article>
          <article class="cantidad">
            <ul>
              <li>2</li>
              <li>3</li>
              <li>4</li>
            </ul>
          </article>
          <article class="precio">
            <ul>
              <li>200</li>
              <li>300</li>
              <li>400</li>
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
