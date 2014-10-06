<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IF statement</title>
</head>
<body>
  <?php 

    $regen = true;
    // 1. Print de eerste regel indien het regent, print de tweede regel als het niet regent
    
    print "<p>Neem een paraplu mee!</p>";
    print "<p>Neem een zonnebril mee!</p>";




    $spaargeld = 200; $prijs_computer = 2000;
    // 2. Als we genoeg spaargeld hebben: Print de eerste regel, anders print de tweede regel.

    print "<p>Joepi! Een nieuwe computer...</p>";
    print "<p>Jammer! Nog even sparen...</p>";
    
    

    
    $spaargeld = 200; $prijs_computer = 2000.00;
    // 3. Deze regel mag afgedrukt worden, ook al is de ene een integer en de andere een float

    print "<p>Prijs is hetzelfde.</p>";



    // 4. Deze regel mag enkel afgedrukt indien ze beide van het type integer of float zijn
    
    print "<p>Prijs is hetzelfde en hetzelfde type</p>";



    // 5. Maak een IF structuur voor het spaargeld en de prijs van de computer

    // Print de volgende regel als spaargeld meer is dan 1500
    print "<p>Joepi! Een apple!</p>";
    // Maar print de volgende regel als spaargeld meer is dan 500
    print "<p><p>Verdorie, een windows computer...</p>";
    // en uiteindelijk...
    print "<p>Jammer, nog even sparen...</p>";
  
    


    $spaargeld = 200; $prijs_computer = 2000;
    // 6. Print de volgende regel als spaargeld niet hetzelfde is als prijs
    
    print "<p>Het aantal geld komt niet overeen!</p>";



    $regen = false; $zomer = true;
    // 7. Print de volgende regel als het mooi weer is en het zomer is
    
    print "<p>We gaan naar het strand!</p>";
    print "<p>Toch maar thuis blijven...</p>";




    $spaargeld = 1000;
    // 8. Print de volgende regel als het spaargeld hoger is als 800 en kleiner als 1200
    
    print "<p>Net genoeg voor een goedkope Apple pc.</p>";




    $regen = false; $storm = true;
    // 9. Print de volgende regel als het regent of als het stormt
    
    print "<p>Wat een hondsweer!</p>";

   ?>
</body>
</html>