<?php
<<<<<<< HEAD
  $nombre = "";
  $apellido = "";
  $email = "";

  require_once('partials/paises.php');

  if($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
  }
/*
  $adventencia = ["No llenaste el nombre", "No llenaste el apellido", "No llenaste el apellido"];

  if($_POST){
    if (strlen($_POST["nombre"]) == 0) {
      echo $adventencia[0];
    }
    if (strlen($_POST["apellido"]) == 0) {
      echo $adventencia[1];
    }
    if (cstrlen($_POST["email"]) == 0) {
      echo $adventencia[2];
    }
*/

 ?>
=======



$errorArchivo="";

if($_POST){
  // Acá ingresan los datos
  $usuario=[
    "nombre" => $_POST["nombre"],
    "apellido" => $_POST["apellido"],
    "nacimiento" => $_POST["date"],
    "pais" => $_POST["pais"],
    "email" => $_POST["email"]
  ];
  // Acá se sube la imagen
  if ($_FILES["avatar"]["error"]===0) {
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    if ($ext != "png" && $ext != "jpg" && $ext !="jpeg") {
      $errorArchivo= "Formato de archivo inválido";
    }
    $usuario["avatar"]= $_FILES["name"].$ext;
    move_uploaded_file($_FILES["avatar"]["tmp_name"],"dataBase/".$_POST["email"]. $ext);
    }

  // Acá guardamos la contraseña
  if ($_POST["password"] === $_POST["password2"]) {
    $usuario["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
  }
  $usuarios= file_get_contents("dataBase/usuarios.json");
  $usuariosArray= json_decode($usuarios,true);
  $usuariosArray[]=$usuario;
  $usuariosJSON= json_encode($usuariosArray);
  file_put_contents("dataBase", $usuariosJSON);
}

?>
>>>>>>> cee3533d68d87ccc600035f176f995982735750b

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/registro.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO - Blackbird</title>
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
                  <h1>REGISTRARSE</h1>
                </div>
              <!-- Campos a llenar -->
<<<<<<< HEAD
              <form class="" action="" method="post" enctype="multipart/form-data">
=======
              <form class="" action="registro.php" method="post" enctype="multipart/form-data">


>>>>>>> cee3533d68d87ccc600035f176f995982735750b
                <label for="nombre">Nombre:</label>
                <br>
                <input type="text" name="nombre" value="<?=$nombre?>" required>
                <br>
                <label for="apellido">Apellido:</label>
                <br>
                <input type="text" name="apellido" value="<?=$apellido?>" required>
                <br>
                <label for="avatar">Subir foto</label>
                <input type="file"  id="avatar" name="avatar">
                <br>
                <?php
                echo $errorArchivo;
                 ?>
                <label for="date">Fecha de nacimiento:</label>
                <br>
                <input id="date" type="date" name="date" value="" required>
                <br>
                <label for="pais">País:</label>
                <br>
                <select name="pais">
                  <?php foreach ($paises as $pais) : ?>
                    <?php if ($_POST["pais"] == $pais) : ?>
                      <option value="<?=$pais?>" selected>
                        <?=$pais?>
                      </option>
                    <?php else: ?>
                    <option value="<?=$pais?>">
                      <?=$pais?>
                    </option>
                  <?php endif; ?>
                    <<?php endforeach; ?>
                </select>
                <br>
                <label for="email">E-mail:</label>
                <br>
                <input type="email" name="email" value="<?php echo $email?>" required>
                <br>
                <label for="password">Contraseña:</label>
                <br>
                <input id="password" type="password" name="password" value="" required>
                <br>
                <label for="password2">Repetir contraseña:</label>
                <br>
                <input id="password2" type="password" name="password2" value="" required>
                <br>
                <br>
                <input class="check" type="checkbox" name="terminos" value="" required> Acepto los <a href="#">Términos y condiciones</a>.
                <br>
                <input class="check" type="checkbox" name="newsletter" value=""> Deseo recibir ofertas por mail.
                <br>
                <button type="submit" name="button">REGISTRO</button>
          </form>
            </main>
    <!-- Inicio Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
