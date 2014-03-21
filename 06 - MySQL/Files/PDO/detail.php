<?php 

include 'dbConnect.php';

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail weergave</title>
</head>
<body>
  <a href="lijst.php">Terug naar overzicht</a>
  <h1>Bert</h1> 
  <a href="verwijder.php">Verwijder gebruiker</a>
  <ul>
    <li>Naam: Toon</li>
    <li>Email: tgorissen@eschool.be</li>
    <li>Paswoord: wachtwoordvantoon - <a href="wijzig-wachtwoord.php">wijzig wachtwoord</a></li>
  </ul>

  <hr>
  <pre>
    <?php //print_r($resultaat); ?>
  </pre>
</body>
</html>