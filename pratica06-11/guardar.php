<?php
require_once('pruebaConexion.php');
$sql="INSERT INTO movies values(default, null,null)";
$inserte=$conex->prepare($sql);
$coca->bindValue(":id",$_GET["id"]);
$coca->execute();
$serie=$coca->fetchAll(PDO::FETCH_ASSOC);


 ?>
