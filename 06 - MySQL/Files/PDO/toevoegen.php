
<?php

include 'dbConnect.php';

$foutmeldingen = array();
if ($_POST) {
  // validatie

  if (empty($foutmeldingen)) {
    
  }
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gebruiker registreren</title>
</head>
<body>
  <h1>Registreren</h1>
  <a href="lijst.php">Terug naar lijst</a>
  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
      <label for="naam">Naam:</label> <br>
      <input type="text" name="naam" id="naam">
    </p>
    <p>
      <label for="email">Email:</label> <br>
      <input type="text" name="email" id="email">
    </p>
    <p>
      <label for="paswoord">Paswoord:</label> <br>
      <input type="password" name="paswoord" id="paswoord">
    </p>
    <p>
      <input type="submit" value="Registreren">
    </p>
  </form>
</body>
</html>