<?php

include 'dbConnect.php';

// gegevens kiezen
$query = $conn->prepare("SELECT * FROM users");
$query->execute();
$resultaat = $query->fetchAll();

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
    <a href="registreer.php">Registreer nieuwe gebruiker</a>
  </p>

  <?php if ($query->rowCount()): ?>
    <ul>
    <?php 
      foreach ($resultaat as $user) {
        print "<li>$user[naam]: $user[email]</li>";
        print strstr($user['email'], '@');
      }
     ?>
    </ul>
  <?php else: ?>
    <p>Er werden geen gebruikers gevonden.</p>
  <?php endif ?>
  
  <hr>
  <pre>
    <?php print_r($resultaat); ?>
  </pre>
</body>
</html>