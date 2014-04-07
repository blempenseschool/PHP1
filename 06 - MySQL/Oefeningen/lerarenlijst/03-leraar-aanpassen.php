<?php 

// Pas een leerkracht aan
// --> Verplaats het formulier van leraar-toevoegen naar een nieuwe pagina (leraar_form.inc.php)
// --> Verplaats ook de validatie van de leraar naar een nieuwe pagina. (leraar_validation.inc.php)
// --> Voeg het formulier van leraar-toevoegen in.
// --> Voeg "aanpassen" links toe aan de namen lijst op Leraren-lijst.php
// --> Gegevens opvragen via de ID in de URL
// --> POST variabele terug opvullen en waarden afdrukken in het formulier 
//          bv. $_POST = $resultaat
// --> ID toevoegen aan de "action" van het formulier

// --> Bij verzenden:
// --> Inhoud valideren!!!
// --> Database connectie aanmaken
// --> Gegevens aanpassen in databank
// --> Gebruiker doorsturen naar lijst pagina

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leraar aanpassen</title>
</head>
<body>
<p>
  <a href="01-leraren-lijst.php">Terug naar lijst</a>
</p>
  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) // $_GET['id'] nog afdrukken achter de link ?>" method="post">
    <!-- Plaats het formulier van toevoegen in een nieuw include bestand en voeg terug toe -->

    <input type="submit" value="Aanpassen">
  </form>
</body>
</html>