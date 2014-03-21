<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTMLSPECIALCHARS functie</title>
</head>
<body>
  <?php 


  $tekst = "Dit is een stukje tekst & bevat speciale tekens zoals een \" teken of < en > tekens.";
  print "<p>$tekst</p>\n \n";

  print "<p>" . htmlspecialchars($tekst) . "</p>";



   ?>
</body>
</html>