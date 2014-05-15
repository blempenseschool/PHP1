<?php 

/**
 * Werken met INTEGERS en FLOATS
 * -----------------------------
 * 
 * Als we met getallen werken kunnen we wiskundige berekeningen
 * uitvoeren op de geheugenplaatsen.
 * 
 * Basis berekeningen:
 * - Optellen met "+"
 * - Aftrekken met "-"
 * - Vermenigvuldigen met "*"
 * - Delen met "/"
 * - Restdeling (modulo) met "%"
 * 
 * 
 * De berekening zal door PHP uitgevoerd worden. Het is mogelijk om het resultaat 
 * dan in een variabele op te slaan. Je kan ook berekeningen doen met variabelen.
 * 
 * $uitkomst = 15 + 5;
 * $uitkomst = $getal1 + $getal2;
 * $uitkomst = $getal2 * 5;
 * 
 * Je kan ook berekeningen doen met dezelfde variabele.
 * Dit kan op twee manieren:
 * 
 * $getal1 = $getal1 + 5;
 * $getal1 += 5;
 * 
 * Als je er een waarde 1 bij wilt optellen of aftrekken kan je nog een 
 * gemakkelijkere schrijfwijze gebruiken.
 * 
 * $getal1++; --> 1 optellen bij $getal1
 * $getal1--; --> 1 aftrekken van $getal1
 * 
 * 
 * Je kan ook berekeningen groeperen door haakjes te gebruiken.
 * 
 * $uitkomst = ((5+10)*2)/5;
 * 
 */



// OEFENING
// --------
// Maak telkens de berekening onder de commentaar regel.

  /////////////////////////
  // VARIABELEN AANMAKEN //
  /////////////////////////

  // 1. Maak hieronder een variabele getal1 met waarde 34.
  
  // 2. Maak hieronder een variabele getal2 met waarde 65.


  ///////////////////////
  // BEREKENINGEN DOEN //
  ///////////////////////

  // 1. Tel getal1 bij getal2 op in een nieuwe uitkomst

  // 2. Trek getal1 van de uitkomst af

  // 3. Vermenigvuldig de uitkomst van de vorige berekeningen met getal2

  // 4. Deel de uitkomst door getal1

  // 5. Bereken de rest van de deling van de uitkomst met getal2
  
 
  ////////////////////////////////////////////
  // BEREKENINGEN DOEN OP DE VARIABELE ZELF //
  ////////////////////////////////////////////

  // Tel 4 op bij getal1

  // 6 van getal1 aftrekken

  // Getal1 vermenigvuldigen met 8

  // Getal1 delen door 4

  // Tel 1 bij getal1 op (gebruik de korte schrijfwijze)

  // Trek 1 terug af van getal1 (gebruik de korte schrijfwijze)
  
  
  ////////////////////////////
  // BEREKENINGEN GROEPEREN //
  ////////////////////////////

  // Tel eerst 123 op bij getal2.
  
  // Deel getal2 dan door: 4 maal het getal + 147 gedeeld door 4

  
  //--> DRUK DE RESULTATEN AF HIERONDER IN DE HTML PAGINA


?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Getallen - Integers en Floats</title>
</head>
<body>
  <h3>Waarde van getal1</h3>
  <p>
    <?php // Druk hier de waarde van getal1 af. ?>
  </p>

  <h3>Waarde van getal2</h3>
  <p>
    <?php // Druk hier de waarde van getal2 af. ?>
  </p>
</body>
</html>