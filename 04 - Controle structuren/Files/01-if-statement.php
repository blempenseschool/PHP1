<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IF statement</title>
</head>
<body>
  <?php 

    $regen = true;
      print "<p>Neem een paraplu mee!</p>";
      print "<p>Neem een zonnebril mee!</p>";

    $spaargeld = 200; $prijs_computer = 2000;
      print "<p>Joepi! Een nieuwe computer...</p>";
      print "<p>Jammer! Nog even sparen...</p>";
    
    // if ($spaargeld < $prijs_computer)
    // if ($spaargeld > $prijs_computer)
    // if ($spaargeld >= $prijs_computer)
    // if ($spaargeld <= $prijs_computer)

    $spaargeld = 200; $prijs_computer = 2000.00;

    if ($spaargeld == $prijs_computer)
      print "<p>Prijs is hetzelfde maar ze zijn een ander type</p>";

    if ($spaargeld == $prijs_computer)
      print "<p>Prijs is hetzelfde en hetzelfde type</p>";


    // als spaargeld meer is dan 1500
      print "<p>Joepi! Een apple!</p>";
    // als spaargeld meer is dan 500
      print "<p><p>Verdorie, een windows computer...</p>";
    // anders
      print "<p>Jammer, nog even sparen...</p>";
    
    $regen = true;
      print "<p>Neem een zonnebril mee!</p>";
      print "<p>Neem een paraplu mee!</p>";

    // als spaargeld niet hetzelfde is als prijs
    $spaargeld = 200; $prijs_computer = 2000;
      print "<p>Het aantal geld komt niet overeen!</p>";

    // als het mooi weer is en het is zomer
    $regen = false; $zomer = true;
      print "<p>We gaan naar het strand!</p>";
      print "<p>Toch maar thuis blijven...</p>";


    // als het spaargeld hoger is als 800 en kleiner als 1200
    $spaargeld = 200;
      print "<p>Net genoeg voor een goedkope Apple pc.</p>";

    // als het regent of stormt
    $regen = false; $storm = true;
      print "<p>Wat een hondsweer!</p>";

   ?>
</body>
</html>