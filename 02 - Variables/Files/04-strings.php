<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strings</title>
</head>
<body>
  <?php 

    // Aanmaken van een string - Gebruik enkele of dubbele aanhalingstekens
    $string1 = "Een stukje tekst";
    $string2 = 'Een stukje tekst';


    // "" maken een geinterpreteerde string
    // Zorg dat de $prijs is de string afgedrukt wordt
    $prijs = 30;
    $zin = "<p>De prijs van de schoenen is 30 euro.</p>";
    print $zin;
    
    // tekst aan elkaar plakken met de { } operator
    // Zorg dat de $prijs in de string tegen het woord euro afgedrukt wordt
    $prijs = 40;
    $zin = "<p>De prijs van de schoenen is 40euro</p>"; 
    print $zin;


    // Gebruiken maken van het \ escape character
    // Zorg dat elke zin in dit document op een nieuwe regel komt te staan in de broncode
    // 
    // Plaats "Het is nu wel goed!" tussen dubbele aanhalingstekens
    $zin1 = "<p>Hij zei: Het is nu wel goed!.</p>";
    print $zin1;
    // Zorg dat de "\n" afgedrukt wordt in de zin
    $zin2 = "Om een newline te gebruiken moeten we \n gebruiken in een string.";
    print $zin2;


    // '' maken een gewone tekst
    $zin = '<p>De prijs van de schoenen is $prijs.</p>';
    print $zin;

    // tekst aan elkaar plakken met de . operator
    // Plak de prijs achter de string met enkele aanhalingstekens
    $prijs = 40;
    $zin = 'De prijs van de schoenen is ';  

   ?>
</body>
</html>