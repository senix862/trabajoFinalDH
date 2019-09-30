<?php

function validarLogin($datos) {
    $errores = [];

    $email = trim($datos['email']);
    $password = $datos['password'];

    if (strlen($email) === 0) {
        $errores['email'] = 'Escribe el email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El e-mail no es válido';
    }
    if (strlen($password) < 8) {
        $errores['password'] = 'La contraseña es muy corta (minimo 8 caracteres)';
    }
    $usuario= file_get_contents("usuarios.json");
    $usuarios=json_decode($usuario, true);

    foreach ($usuarios as $user) {
      if ($user["email"] == $email && password_verify($user["email"], $password)) {
        $_SESSION["email"] = $email;
        $_SESSION["avatar"] = $user["avatar"];

        header('location:profile.php');
      }
    }
    //deberia de buscar al usuario en la base de datos
        //y si no esta lanzar un error


    return $errores['email'] = "Usuario o clave incorrectos";
}
