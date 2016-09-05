<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
      echo "La foto se registro en el servidor.<br>";
      $nom=$_FILES['foto']['name'];
      echo "<img src=\"$nom\">";

  ?>
  </body>
</html>
