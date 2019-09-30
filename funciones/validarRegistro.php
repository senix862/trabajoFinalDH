<?php

function validarRegistro($datos, $password2, $terminos) {
    $errores = [];

    $email = trim($datos['email']);
    $password = $datos['password'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $paises = $datos['paises'];


    if (strlen($email) === 0) {
        $errores['email'] = 'Escriba su email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El e-mail no es válido';
    }
    if (strlen($password) === 0) {
          $errores['password'] = 'Ingrese su contraseña';
        }
    if (strlen($password) < 8) {
        $errores['password'] = 'La contraseña es muy corta (minimo 8 caracteres)';
      } else if ($password != $password2) {
        $errores['password'] = "Las contraseñas no coinciden";
      }
    if (strlen($nombre) === 0) {
        $errores['nombre'] = 'Ingrese su nombre';
      }
      if (strlen($apellido) === 0) {
          $errores['apellido'] = 'Ingrese su apellido';
        }
        if (!$paises) {
            $errores['paises'] = 'Seleccione un país';
          }
          if(empty($terminos)){
            $errores['terminos'] = 'Debe aceptar los términos y condiciones';
          }
    return $errores;
}
