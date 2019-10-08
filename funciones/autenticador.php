<?php
session_start();

 function estaElUsuarioLogeado () {
   if (isset($_SESSION['email'])) {
       return true;
   }
   return false;
 }

 function logear($email) {
   //Busco al usuario en la BD
   $usuario = buscarUsuarioEmail($email);

   if ($usuario) {
    //si existe lo logeo
       $_SESSION['email'] = $email;
       $_SESSION['avatar'] = $usuario['avatar'];
   } else {
       destruirRecuerdame();
       //sino lo redirijo a login
       header('location:login.php');
   }
 }

 function destruirRecuerdame() {
   setcookie('recuerdame', '', time() - 1);
 }

 function deslogear() {
   session_destroy();
   destruirRecuerdame();
 }
