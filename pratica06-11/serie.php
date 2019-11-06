<?php
require_once('pruebaConexion.php');
$sql="SELECT * FROM series WHERE id = :id";
$coca=$conex->prepare($sql);
$coca->bindValue(":id",$_GET["id"]);
$coca->execute();
$serie=$coca->fetchAll(PDO::FETCH_ASSOC);
$sql="SELECT name FROM genres WHERE id = :id";
$cocu=$conex->prepare($sql);
$cocu->bindValue(":id",$serie[0]["genre_id"]);
$cocu->execute();
$genero=$cocu->fetch(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1><?= $serie[0]["title"];?></h1>

     <ul>
       <li>Fecha de Inicio: <?= $serie[0]["release_date"];?></li>
       <li>Fecha de Finalización: <?= $serie[0]["end_date"];?></li>
       <li>Género: <?= $genero["name"];?></li>
     </ul>
   </body>
 </html>
