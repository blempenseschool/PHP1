<?php 

/**
 * Syntax Errors in PHP
 * --------------------
 * 
 * PHP is een zeer gevoelige taal. 
 * Je moet letten op wat je typt, en zeker alles correct typen.
 * Elk haakje, puntkomma, accolate, enz. is zeer belangrijk. Ze moeten altijd correct en 
 * in de juiste volgorde openen en sluiten.
 * 
 * 1. Elk statement of commando in PHP moet afgesloten worden met een puntkomma ";".
 * 2. Elk aanhalingsteken, haakje of accolade moet correct openen en sluiten.
 * 3. Je moet de juiste schrijfwijze, de syntax, gebruiken.
 * 4. Let op de schrijfwijze van geheugenplaatsen, of variabelen. Een kleine typfout kan uren
 * zoekwerk betekenen!
 * 
 * 
 * Overloop deze pagina en zoek de verschillende schrijffouten.
 * 
 */

?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Syntax Errors</title>
</head>
<body>
  <?php 


  $getal = 12; // elke regel afsluiten met een ;
  $tekst = "<p>Dit is tekst!</p>";


  $uitkomst = sqrt(13); // Elke functie correct afsluiten met ( )
  print "<p>" . $uitkomst . "</p>";


  $hobby = "<p>Programmeren natuurlijk!</p>";
  print $hobby; // Correcte benaming voor variabelen gebruiken


  for ($i=0; $i < 10; $i++) { 
    print "<p>De teller is $i!</p>";
  } // Controle structuren correct afsluiten
  

  $getal1 = 23;
  $getal2 = 45; // gebruik $getal2 hier , en hieronder
  $uitkomst = $getal1 + $getal2;


   ?>
</body>
</html>