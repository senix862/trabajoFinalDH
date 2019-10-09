<?php

require_once('partials/paises.php');
require_once('funciones/usuarios.php');
/*require_once('funciones/curl.php');*/
require_once('funciones/validarRegistro.php');
require_once('funciones/autoload.php');

if (isset($_COOKIE['recuerdame'])) {
      logear($_COOKIE['recuerdame']);
  }

//FALTA GUARDAR LOS CAMPOS AL INGRESAR UN CAMPO INCORRECTO; Y FALTA VALIDAR EL CHECK;
  $nombre = "";
  $apellido = "";
  $email = "";

  if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
  }

  if (estaElUsuarioLogeado() == true) {
    header('location:profile.php');
  }

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
  if (empty($error) && empty($errores)) {
    // Acá se sube la imagen
    if ($_FILES["avatar"]["error"]===0) {
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      if ($ext != "png" && $ext != "jpg" && $ext !="jpeg") {
        $errorArchivo= "Formato de archivo inválido";
      } else {
        $usuario["avatar"] = subirAvatar($_FILES['avatar'], $_POST["email"]);
      }
    }
    // Acá guardamos la contraseña
      if ($_POST["password"] === $_POST["password2"]) {
        $usuario["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
      //Aca creamos el usuario
        $usuarios = file_get_contents("dataBase/usuarios.json");
        $usuariosArray= json_decode($usuarios,true);
        $usuariosArray[]=$usuario;
        $usuariosJson= json_encode($usuariosArray);
        file_put_contents('dataBase/usuarios.json', $usuariosJson);
      }
  //deberia hacerse solo si no hay errores

      $datos = [
          'team' => 'grupo5',
          'commission' => 'tarde',
          'json_data' => $usuario,
        ];
      // $usuario = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'POST', $datos);
    }
}
// guardarUsuario($usuario);

//logear($email);

if (empty($errores)) header("location:profile.php");


$textoBanner="Registro";

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
              <!-- Campos a llenar -->

              <form class="" action="registro.php" method="post" enctype="multipart/form-data">

                <label for="nombre">Nombre:</label>
                <br>
                <input type="text" name="nombre" value="<?=$nombre?>">
                <br>
                  <?= $errores['nombre'] ?? '' ?>
                  <br>
                <label for="apellido">Apellido:</label>
                <br>
                <input type="text" name="apellido" value="<?=$apellido?>" >
                <br>
                  <?= $errores['apellido'] ?? '' ?>
                  <br>
                <label for="avatar">Subir foto de perfil</label>
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
                <button type="submit" name="button">Registro</button>
          </form>
            </main>
    <!-- Inicio Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
