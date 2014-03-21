<?php

include 'dbConnect.php';

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Alle gebruikers</h1>
  <p>
    <a href="toevoegen.php">Registreer nieuwe gebruiker</a>
  </p>


    <ul>
     <?php 
      print "<li><a href=\"detail.php\">Bert</a>: blempens@eschool.be</li>";
     ?>
    </ul>
    
  <hr>
  <pre>
    <?php //print_r($resultaat); ?>
  </pre>
</body>
</html>