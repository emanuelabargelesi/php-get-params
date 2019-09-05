<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php
     $height = $_GET["height"];
     $width = $_GET["width"];
     $depth = $_GET["depth"];
     $volume = $height * $width *$depth;
  ?>
  </head>

  <body>

  <p>L'altezza è:<?php echo $height; ?> <br>
  La larghezza è:<?php echo $width; ?> <br>
  La profondità è:<?php echo $depth; ?> <br><br>
  Quindi il volume totale è: <?php echo $volume; ?></p>

  </body>
</html>
