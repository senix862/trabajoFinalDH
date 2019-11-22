@extends('layout')

  @section("main")

      @section('css')
        <link rel="stylesheet" href="/css/login.css">
      @endsection

      @section('title')
        Ingreso
      @endsection

      @section('texto')
        Ingresar
      @endsection
      
<div class="datos">
  <form class="" action="login.php" method="post">
    <label for="email">E-mail:</label>
    <br>
    <input id="email" type="text" name="email" value="<?= $email?>">

    <div class="errores">
      <?= (isset($errores["email"]) ? $errores["email"] : "")?>
    </div>
    <label for="password">Contraseña:</label>
    <br>
    <input id="password" type="password" name="password" value="">
    <div class="errores">
      <?= (isset($errores["password"]) ? $errores["password"] : "")?>
    </div>
    <div class="cookie">

    <input type="checkbox" id="recuerdame" name="recuerdame" class="form-check">
    <label id="recuerd" for="recuerdame">Mantenerme Conectado</label>

    </div>
    <a href="#">olvidé mi contraseña</a>
    <br>
    <button id="ingresar" type="submit" name="button">Ingresar</button>
  </form>
    <a href="registro.php">Registrarme</a>
</div>
