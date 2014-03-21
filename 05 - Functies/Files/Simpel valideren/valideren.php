<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Valideren met PHP</title>
  <link rel="stylesheet" href="css/valideren.css"></head>
<body>
  <h1>Valideren met PHP</h1>

  <div class="error">Er zijn foutmeldingen gevonden!</div>

  <p> <strong>De validatie is gelukt!</strong></p>
  <p>
    <a href="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>">Terug naar het formulier</a>
  </p>

  <form action="" method="post">
    <label for="naam">Naam *:</label>
    <input type="text" name="naam" id="naam">
    <span class="form-error">Naam is verplicht</span>

    <br>
    <br>
    <label for="honeypot" class="honeypot">
      <input type="checkbox" name="honeypot" id="honeypot"> Gelieve dit <em>niet</em> aan te vinken. <br>
    </label>
    
    <input type="submit" value="Verzenden">
  </form>
</body>
</html>