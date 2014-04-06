<?php 

include 'dbConnect.php';


// Gebruik een TRY-CATCH structuur om foutmeldingen te vinden

$query = $conn->prepare('SELECT * FROM uzers');
$query->execute();
$resultaat = $query->fetchAll();

 ?>
 <!doctype html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Foutmeldingen</title>
 </head>
 <body>
   <?php 
      foreach ($resultaat as $user) {
        print "<p>$user[naam]</p>";
      }
    ?>
 </body>
 </html>