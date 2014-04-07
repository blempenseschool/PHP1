<?php 

// Voeg een leerkracht toe via een formulier
// --> Inhoud valideren!!!
//    --> Voornaam en achternaam zijn verplicht
//    --> Geboorte jaar mag leeg gelaten worden
//    --> Foutmeldingen afdrukken
//    --> Waarden terug invullen in het formulier bij foutmeldingen
// --> Database connectie aanmaken
// --> Gegevens toevoegen aan databank
// --> Gebruiker doorsturen naar lijst pagina

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leraar toevoegen</title>
</head>
<body>
<p>
  <a href="01-leraren-lijst.php">Terug naar lijst</a>
</p>
  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="voornaam">Voornaam</label><br>
    <input type="text" name="voornaam" id="voornaam" value=""> <br><br>

    <label for="achternaam">Achternaam</label> <br>
    <input type="text" name="achternaam" id="achternaam" value=""> <br><br>

    <label for="geb_jaar">Geboorte jaar</label> <br>
    <input type="text" name="geb_jaar" id="geb_jaar" value=""> <br><br>

    <input type="submit" value="Toevoegen">
  </form>
</body>
</html>