<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WHILE lus</title>
</head>
<body>
  <?php 

  $regen = true;

  // tijdens de regen / zolang als het regent
    print "<p>Hou de jas maar aan!</p>";


  // voorbeeld for-lus
  for ($i=0; $i < 10; $i++) { 
    print "<p>De teller is nu $i.</p>";
  }

  $teller = 0;
  // zolang de teller kleiner is als 10
    print "<p>De teller is nu $teller.</p>";




  while ($rij = $query->fetch()) {
    // print $rij['naam'];
    // print $rij['voornaam'];
  }



   ?>
</body>
</html>