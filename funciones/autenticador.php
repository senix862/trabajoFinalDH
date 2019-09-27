<?php
session_start();
 function estaElUsuarioLogeado () {
     if (isset($_SESSION["email"])) {
       return true;
     } else {
       return false;
     }

 }
