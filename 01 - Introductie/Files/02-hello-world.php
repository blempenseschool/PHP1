<?php 

/**
 * Hello world
 * -----------
 * 
 * 1. Print vanuit PHP de zin "Hello world!" af naar de HTML pagina.
 * 
 * 2. Plaats deze zin in een variabele bovenaan de pagina en druk deze af in de HTML pagina.
 * 
 */

?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mijn eerste PHP bestand</title>
</head>
<body>
  <?php 
 
  $tekst = "Hello world!";

  for ($i=10; $i < 20; $i++) { 
    print "<p style=\"font-size: {$i}px\">$tekst</p> \n";
  }

   ?>
</body>
</html>