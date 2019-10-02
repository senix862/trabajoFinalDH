<?php

var_dump($_POST);
//FALTA GUARDAR LOS CAMPOS AL INGRESAR UN CAMPO INCORRECTO; Y FALTA VALIDAR EL CHECK;
  $nombre = "";
  $apellido = "";
  $email = "";

  require_once('partials/paises.php');
  require_once('funciones/usuarios.php');
  require_once('funciones/curl.php');
  require_once('funciones/validarRegistro.php');

$errorArchivo = "";
$error = "";
$errores=[
  "email" => "",
  "password" => "",
  "nombre" => "",
  "apellido" => "",
   "paises" => "",

];

if($_POST){
 $terminos = "";
  if(isset($_POST['terminos'])){
    $terminos = $_POST['terminos'];
  }
  $usuario=[
    "nombre" => $_POST["nombre"],
    "apellido" => $_POST["apellido"],
    "paises" => $_POST["pais"],
    "email" => $_POST["email"],
    "password" => $_POST["password"],
      ];
$password2 = $_POST["password2"];

 $errores = validarRegistro($usuario, $password2, $terminos);
  if (empty($error)) {
    // Acá se sube la imagen
    if ($_FILES["avatar"]["error"]===0) {
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      if ($ext != "png" && $ext != "jpg" && $ext !="jpeg") {
        $errorArchivo= "Formato de archivo inválido";
      } else {
        $usuario["avatar"] = subirAvatar($_FILES['avatar'], $_POST["email"]);
      }
    }
  //deberia hacerse solo si no hay errores


    // Acá guardamos la contraseña
      if ($_POST["password"] === $_POST["password2"]) {
        $usuario["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
      }
      $usuarios = file_get_contents("dataBase/usuarios.json");
      $usuariosArray= json_decode($usuarios,true);
      $usuariosArray[]=$usuario;
      $usuariosJson= json_encode($usuariosArray);
      file_put_contents('dataBase/usuarios.json', $usuariosJson);

      $datos = [
          'team' => 'grupo5',
          'commission' => 'tarde',
          'json_data' => $usuario,
        ];
      // $usuario = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'POST', $datos);
    }
}
if (empty($errores)) header("location:profile.php");
?>

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

              <form class="" action="registro.php" method="post" enctype="multipart/form-data">

                <label for="nombre">Nombre:</label>
                <br>
                <input type="text" name="nombre" value="<?=$nombre?>" >
                <br>
                  <?= $errores['nombre'] ?? '' ?>
                  <br>
                <label for="apellido">Apellido:</label>
                <br>
                <input type="text" name="apellido" value="<?=$apellido?>" >
                <br>
                  <?= $errores['apellido'] ?? '' ?>
                  <br>
                <label for="avatar">Subir foto</label>
                <input type="file"  id="avatar" name="avatar">
                <br>
                <?= $errorArchivo ?>
                <label for="date">Fecha de nacimiento:</label>
                <br>
                <input id="date" type="date" name="date" value="" >
                <br>
                <label for="pais">País:</label>
                <br>
                <select name="pais">
                  <?php foreach ($paises as $key => $pais) : ?>
                    <?php if ($_POST["pais"] == $pais) : ?>
                      <option value="<?=$key?>" selected>
                        <?=$pais?>
                      </option>
                    <?php else: ?>
                    <option value="<?=$key?>">
                      <?=$pais?>
                    </option>
                  <?php endif; ?>
                    <<?php endforeach; ?>
                </select>
                <br>
                <?= $errores['paises'] ?? '' ?>
                <br>
                <label for="email">E-mail:</label>
                <br>
                <input type="email" name="email" value="<?= $email?>" >
                <br>
                <?= $errores['email'] ?? '' ?>
                <br>
                <label for="password">Contraseña:</label>
                <br>
                <input id="password" type="password" name="password" value="" >
                <br>
                <?= $errores['password'] ?? '' ?>
                <?=$error?>
                <br>
                <label for="password2">Repetir contraseña:</label>
                <br>
                <input id="password2" type="password" name="password2" value="" >
                <br>
                <br>
                <input class="check" type="checkbox" name="terminos" value="1" > Acepto los <a href="#">Términos y condiciones</a>.
                <br>
                <?= $errores['terminos'] ?? '' ?>
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
