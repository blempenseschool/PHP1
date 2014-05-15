<?php 

/**
 * Variabelen of geheugenplaatsen
 * ------------------------------
 * 
 * We kunnen in PHP geheugenplaatsen gebruiken om stukjes informatie 
 * op te slaan voor later opnieuw te gebruiken. Dit noemen we "variabelen".
 * Een variabele in PHP wordt altijd aangeduid door een "$". Na het dollar-teken
 * volgt de naam van de variabele.
 * 
 * Enkele regels:
 * 
 * - Een variabele mag nooit beginnen met een nummer.
 * - Een variabele mag geen spaties bevatten. 
 *   Gebruik de volgende benamingen:
 *       $mijn_variabele OF $mijnVariabele
 * - Gebruik enkel kleine lettertjes voor variabelen. 
 *   Probeer hoofdletters te vermijden. De variabelen die PHP zelf 
 *   gebruikt worden met hoofdletters geschreven.
 * 
 * - Inhoud in een variabele plaatsen doen we met de "=" operator.
 * 
 * Er zijn enkele typen van variabelen. Het type hangt af van de inhoud die je
 * in de variabele plaatst.
 * 
 * - String : tekst
 * - Integer : geheel getal
 * - Double of Float : komma getal
 * - Boolean : ja/nee waarde of true/false waarde
 * - Array : verzameling van variabelen
 * - Object : verzameling van variabelen en functies --> PHP2
 * 
 */

// STRING --> tekst
$string = "Hello world!";

// INTEGER --> geheel getal
$integer = 14;

// FLOAT --> komma getal
$float = 16.456;

// BOOLEAN --> waar/niet waar
$boolean = true;
$boolean = false;

// ARRAY --> verzameling
$array = array("maandag", "dinsdag", "woensdag");
$array = ["maandag", "dinsdag", "woensdag"]; //--> !!! Nieuwe schrijfwijze: vanaf PHP5.4 !!!



?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Variables</title>
</head>
<body>
  <h3>String</h3>
  <p>
    <?php print $string; ?>
  </p>

  <h3>Integer</h3>
  <p>
    <?php print $integer; ?>
  </p>

  <h3>Float / Double</h3>
  <p>
    <?php print $float; ?>
  </p>

  <h3>Boolean</h3>
  <p>
    <?php print $boolean; ?>
  </p>

  <!-- Arrays kunnen we op een speciale manier afdrukken
       Gebruik hier voor de <pre> tag en de print_r() functie
   -->
  <h3>Array</h3>
  <pre>
    <?php print_r($array); ?>
  </pre>
</body>
</html>