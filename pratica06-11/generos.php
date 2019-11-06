<?php require_once('pruebaConexion.php');
$sql="SELECT * FROM genres";
$coca=$conex->prepare($sql);
$coca->execute();
$generos=$coca->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Los Generos son:</h1>
      <form class="" action="index.html" method="get">

      </form>
      <ul>
        <?php
        foreach ($generos as $genero): ?>
          <li><a href="serie.php?id=<?= $genero["id"]?>"><?php echo $genero["name"]?></a>
            <?php
                    $sql="SELECT title FROM movies where genre_id = :id";
                    $peli=$conex->prepare($sql);
                    $peli->bindValue(":id",$genero["id"]);
                    $peli->execute();
                    $peliculas=$peli->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($peliculas);
                     ?>

            <ul>
              <?php for ($i=0; $i < count($peliculas); $i++) {
                ?><li><?=$peliculas[$i]["title"];?></li> <?php   } ?>
            </ul>
          </li>

        <?php endforeach;?>
      </ul>
      <a href="#"></a>
  </body>
</html>
