<?php require_once('pruebaConexion.php');
$sql="SELECT * FROM series";
$coca=$conex->prepare($sql);
$coca->execute();
$series=$coca->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Las Series son:</h1>
      <form class="" action="index.html" method="get">

      </form>
      <ul>
        <?php
        foreach ($series as $serie): ?>
          <li><a href="serie.php?id=<?= $serie["id"]?>"><?php echo $serie["title"]?></a></li>

        <?php endforeach;?>
      </ul>
      <a href="#"></a>
  </body>
</html>
