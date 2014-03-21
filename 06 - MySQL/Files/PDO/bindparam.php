<?php 

include 'dbConnect.php';

$query = $conn->prepare("INSERT INTO users(naam, email, paswoord) VALUES (:naam, :email, :paswoord)");
$data = ['naam' => 'Danny',
         'email' => 'dsplets@eschool.be',
         'paswoord' => 'dannyeasy'];
// $query->execute($data);

$naam = $email = $paswoord = "";



$naam = "Danny";
$email = "dsplets@eschool";
$paswoord = "dannyeasy";

$naam = "Bert";
$email = "bkoenen@eschool";
$paswoord = "bertiebert";

$naam = "Raymond";
$email = "rbelien@eschool";
$paswoord = "raymundo";

$naam = "Dirk";
$email = "dplessers@eschool";
$paswoord = "dirkkkk";

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BindParam</title>
</head>
<body>
  
</body>
</html>