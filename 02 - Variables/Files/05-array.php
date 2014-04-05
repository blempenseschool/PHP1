<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arrays</title>
</head>
<body>
  <?php 

  // Een simpele array aanmaken
  $array = array("item1", "item2", "item3");
  $array = ["item1", "item2", "item3"];


  // Maak een array van weekdagen aan en noem deze variabele $dagen.
  // Maak de array maar van maandag tot vrijdag.

  // Een waarde uit een array afdrukken, tel begint bij 0! 
  // Het eerste item is dus 0, het tweede 1, ...
  
  // Druk de 3de dag (woensdag) in de paragraaf af naar het scherm.
  print "<p></p>";

  // Items achteraan de array toevoegen met $array[] = "nieuwe waarde";
  // Voeg zaterdag en zondag nog toe achteraan de array
 

  // Meerdere inhoudstypen toevoegen
  // Je kan meerdere variabele typen toevoegen
  $array = array("tekst", 1234, 454.64, "nog tekst");


  // Associatieve array
  $scores = array('Hans'  => 14, 
                  'Jonas' => 3, 
                  'Sarah' => 18);

  // Printen uit een associatieve array
  // Druk de score van Jonas af naar het scherm. Gebruik de twee manieren.
  print '<p>' . '</p>';
  print "<p></p>";
  


  // Multidimensionale array
  $array = array("naam" => "Hans",
                 "adres" => ["straat" => "molenstraat",
                             "nummer" => 12],
                 "gsm" => 0957348959);

  // Printen uit een multidimensionale array
  // Print het adres van Hans af tussen de paragraaf.
  print '<p>' . '</p>';
  print "<p></p>";
  
  
   ?>
</body>
</html>