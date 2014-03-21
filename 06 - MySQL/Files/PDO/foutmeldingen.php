<?php 

include 'dbConnect.php';

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
   
 </body>
 </html>