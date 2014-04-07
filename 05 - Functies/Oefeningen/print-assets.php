<?php 

// Maak twee functies die onderstaande stijlbladen en javascripts afdrukt naar de HTML.
// print_stylesheets() | print_scripts()
// Deze functies moeten de correcte HTML tags afdrukken naar de pagina.

// Maak de functies in een apart functions.inc.php bestand en voeg dit bestand hier onder toe aan deze pagina.



//--> Hier het functions.inc.php bestand invoegen

$stylesheets = ["css/normalize.css",
                "css/stijlen.css"];

$javascripts = ["//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js",
                "js/main.js"];

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Print Assets</title>
  <?php print_stylesheets($stylesheets); ?>
</head>
<body>
  

  <?php print_scripts($javascripts); ?>
</body>
</html>