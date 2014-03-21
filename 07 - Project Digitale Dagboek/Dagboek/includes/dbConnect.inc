<?php 

// Als username en wachtwoord niet ingesteld zijn in het config bestand -- default naar "root" "root"
if (!isset($dbUsername) && !isset($dbPassword)) {
  $dbUsername = $dbPassword = "root";
}

// Nieuwe database connectie aanmaken
$conn = new PDO('mysql:host=localhost;dbname=mijn_dagboek', $dbUsername, $dbPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
