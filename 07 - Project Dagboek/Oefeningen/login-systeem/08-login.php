<?php 

// Kopieer en plak de bestanden van de "leraren-lijst" oefening.

// Maak een login formulier
// 
// --> Je hoeft geen gegevens uit een databank te halen voor de login. Je mag rechtstreeks in de IF structuur controleren op "user: admin ; paswoord: test123".
// if($_POST['username'] == 'admin' && $_POST['paswoord'] == 'test123') { ... inloggen ... }
// 
// --> Beveilig alle pagina's behalve leraren-lijst.php
// --> Beveilig op leraren-lijst.php de aanpassen/verwijderen links | enkel zichtbaar indien ingelogd

// --> Je mag gebruik maken van een functions.inc.php bestand, vergeet dit dan ook niet toe te voegen aan elke pagina.

// --> Voeg ook een logout knop toe aan de leraren-lijst
// <a href="09-logout.php">Logout</a>

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leraar toevoegen</title>
</head>
<body>
  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" value=""> <br><br>

    <label for="paswoord">Paswoord</label> <br>
    <input type="password" name="paswoord" id="paswoord"> <br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>