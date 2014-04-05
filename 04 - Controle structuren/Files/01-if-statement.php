<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IF statement</title>
</head>
<body>
  <?php 

    $regen = true;
    // Print de eerste regel indien het regent, print de tweede regel als het niet regent
    print "<p>Neem een paraplu mee!</p>";
    print "<p>Neem een zonnebril mee!</p>";



    // Vergelijkingen maken: <   >    <=    >=    ==    ===
    // 
    $spaargeld = 200; $prijs_computer = 2000;
    // Als we genoeg spaargeld hebben: Print de eerste regel, anders print de tweede regel.
    print "<p>Joepi! Een nieuwe computer...</p>";
    print "<p>Jammer! Nog even sparen...</p>";
    
    

    
    $spaargeld = 200; $prijs_computer = 2000.00;
    // Deze regel mag afgedrukt worden, ook al is de ene een integer en de andere een float
    if ($spaargeld == $prijs_computer) {
      print "<p>Prijs is hetzelfde maar ze zijn een ander type</p>";
    }



    // Deze regel mag enkel afgedrukt indien ze beide van het type integer of float zijn
    if ($spaargeld == $prijs_computer) {
      print "<p>Prijs is hetzelfde en hetzelfde type</p>";
    }


    // Print de volgende regel als spaargeld meer is dan 1500
    print "<p>Joepi! Een apple!</p>";
    // Maar print de volgende regel als spaargeld meer is dan 500
    print "<p><p>Verdorie, een windows computer...</p>";
    // en uiteindelijk...
    print "<p>Jammer, nog even sparen...</p>";
  
    
    $spaargeld = 200; $prijs_computer = 2000;
    // Print de volgende regel als spaargeld niet hetzelfde is als prijs
    print "<p>Het aantal geld komt niet overeen!</p>";



    $regen = false; $zomer = true;
    // Print de volgende regel als het mooi weer is en het zomer is
    print "<p>We gaan naar het strand!</p>";
    print "<p>Toch maar thuis blijven...</p>";




    $spaargeld = 1000;
    // Print de volgende regel als het spaargeld hoger is als 800 en kleiner als 1200
    print "<p>Net genoeg voor een goedkope Apple pc.</p>";




    $regen = false; $storm = true;
    // Print de volgende regel als het regent of als het stormt
    print "<p>Wat een hondsweer!</p>";

   ?>
</body>
</html>