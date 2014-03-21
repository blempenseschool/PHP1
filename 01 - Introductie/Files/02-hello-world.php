<!doctype html>
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