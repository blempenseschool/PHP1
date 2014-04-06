<?php 

// Database connectie invoegen
include 'dbConnect.php';

// Een query voorbereiden
$query = $conn->prepare("INSERT INTO users(naam, email, paswoord) VALUES (:naam, :email, :paswoord)");
// Een data-array aanmaken
$data = ['naam' => 'Danny',
         'email' => 'dsplets@eschool.be',
         'paswoord' => 'dannyeasy'];
// De query uitvoeren
// $query->execute($data);


//--> WERKEN MET BINDPARAM ipv de data-array

// Variabelen voorbereiden (lege variabelen aanmaken)
$naam = $email = $paswoord = "";

//--> Koppel de lege variabelen aan de parameters


// Vul de variabelen in
$naam = "Danny";
$email = "dsplets@eschool";
$paswoord = "dannyeasy";
//--> Query uitvoeren


// Vul de variabelen in
$naam = "Bert";
$email = "bkoenen@eschool";
$paswoord = "bertiebert";
//--> Query uitvoeren


// Vul de variabelen in
$naam = "Raymond";
$email = "rbelien@eschool";
$paswoord = "raymundo";
//--> Query uitvoeren


// Vul de variabelen in
$naam = "Dirk";
$email = "dplessers@eschool";
$paswoord = "dirkkkk";
//--> Query uitvoeren


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