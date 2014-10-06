<?php 

/**
 * Werken met STRINGS
 * ------------------
 * 
 * Strings zijn stukjes tekst die we kunnen plaatsen in variabelen.
 * Met tekst kunnen we niet rekenen maar we kunnen er wel vele andere dingen mee doen.
 * 
 * Je kan op twee manieren tekst opslaan in een variabele.
 * 1. Tekst met enkele aanhalingstekens ''
 * 2. Tekst met dubbele aanhalingstekens ""
 * 
 * Er is een klein verschil tussen deze twee. Bij de enkele aanhalingstekens kunnen we 
 * de tekst er gewoon in plaatsen. That's it. We kunnen niets speciaals doen met deze tekst.
 * PHP gaat de tekst afdrukken, net zoals jij die aan PHP hebt doorgegeven.
 * 
 * $tekst = 'Dit is mijn tekst!';
 * print $tekst;
 * --> Dit is mijn tekst!
 * 
 * Maar soms wil je een variabele in een stukje tekst afdrukken. 
 * Dit zal niet lukken met enkele aanhalingstekens. 
 * Om ervoor de zorgen dat PHP de tekst gaat "verwerken" en de waardes van de variabelen erin
 * plaatst, moeten we de dubbele aanhalingstekens gebruiken.
 * 
 * $nummer = 5;
 * $tekst = "Het gekozen nummer is $nummer.";
 * print $tekst;
 * --> Het gekozen nummer is 5.
 * 
 * Je kan ook variabelen gebruiken in een string door er { } rond te plaatsen. 
 * bv. --> $tekst = "Het gekozen nummer is {$nummer}.";
 * 
 * Als je dan toch een " of een { wilt afdrukken in de tekst moet je er een \ voor plaatsen.
 * Dat zal ervoor zorgen dat dit karakter terug gewone tekst zal worden.
 * bv. --> $tekst = "En hij zei: \"Je hebt nog $nummer minuten de tijd!\".";
 * 
 * Je kan gebruik maken van nog enkele speciale tekens.
 * \t --> een tab in de broncode
 * \n --> een nieuwe regel in de broncode
 * \\ --> een backslash typen
 * \$ --> een dollarteken typen, bv. \$naam afdrukken
 * \" --> een aanhalingsteken afdrukken
 * 
 * 
 * Als laatste kan je nog tekst aan elkaar plakken met de "." operator.
 * $tekst1 = "bert";
 * $tekst2 = 'Mijn naam is' . $tekst1;
 * $tekst3 = $tekst1 . ' lempens';
 * 
 */

?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strings</title>
</head>
<body>
  <?php 

    /////////////////////////////
    // AANMAKEN VAN EEN STRING //
    /////////////////////////////

    // 1. Plaats hieronder een stukje tekst in een $tekst1 variabele. Gebruik de dubbele aanhalingstekens. Druk deze string af in een paragraaf tag.
    
    
    



    // 2. Plaats een stukje tekst in een $tekst2 variabele. Gebruik de enkele aanhalingstekens. Druk deze string af in een paragraaf tag.







    // 3. Zorg dat de variabele $prijs in de string afgedrukt wordt
    $prijs = 30;
    $zin = '<p>De prijs van de schoenen is 30 euro.</p>';
    print $zin;




    

    // 4. Zorg dat de $prijs in de string tegen het woord "euro" afgedrukt wordt
    $prijs = 40;
    $zin = '<p>De prijs van de schoenen is 40euro</p>'; 
    print $zin;

    
    
    
    
    // 5. Plaats het stukje "Het is nu wel goed!" tussen dubbele aanhalingstekens. Zorg ervoor dat deze aanhalingstekens te zien zijn op de html pagina.
    $zin1 = "<p>Hij zei: Het is nu wel goed!.</p>";
    print $zin1;





    // 6. Zorg dat de "\n" afgedrukt wordt op de pagina
    $zin2 = "<p>Om een newline te maken moeten we \n gebruiken in een string.</p>";
    print $zin2;





    // 7. Plak de prijs en de sluit-tag "</p>" achter de string
    $prijs = 40;
    $zin = '<p>De prijs van de schoenen is ';  
    print $zin;




    // 8. Zorg dat elke zin in dit document op een nieuwe regel komt te staan in de broncode
    // Dit doe je door \n achteraan de string te plaatsen.

   ?>
</body>
</html>