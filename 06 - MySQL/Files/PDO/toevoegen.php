
<?php

include 'dbConnect.php';

if ($_POST) {

  if (empty($_POST['naam']) || empty($_POST['email']) || empty($_POST['paswoord'])) {
    $foutmeldingen = "Alle velden zijn verplicht!";
  }

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
  
  <?php 
    if (!empty($foutmeldingen)) {
      print "<div style=\"color: red;\">$foutmeldingen</div>";
    } 
  ?>

  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
      <label for="naam">Naam:</label> <br>
      <!-- Value van naam terug afdrukken in geval van een foutmelding -->
      <input type="text" name="naam" id="naam" value="<?php if(!empty($_POST['naam'])) { print $_POST['naam']; } ?>">
    </p>
    <p>
      <label for="email">Email:</label> <br>
      <!-- Value van email terug afdrukken in geval van een foutmelding -->
      <input type="text" name="email" id="email" value="<?php if(!empty($_POST['email'])) { print $_POST['email']; } ?>">
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