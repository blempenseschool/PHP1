<?php 

// De validatie en verwerking van gegevens doen we boven de HTML!

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Valideren met PHP</title>
  <link rel="stylesheet" href="css/valideren.css"></head>
<body>
  <h1>Valideren met PHP</h1>

  <!-- Deze foutmelding moet afgedrukt worden als er foutmeldingen gevonden zijn -->
  <div class="error">Er zijn foutmeldingen gevonden!</div>

  <!-- Dit stukje moeten we tonen als er geen foutmeldingen meer zijn -->
  <p> <strong>De validatie is gelukt!</strong></p>
  <p>
    <a href="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>">Terug naar het formulier</a>
  </p>

  <!-- Het formulier tonen we indien er nog niets verzonden is, of als er nog foutmeldingen zijn -->
  <form action="" method="post">
    <label for="naam">Naam *:</label>
    <input type="text" name="naam" id="naam">
    <span class="form-error">Naam is verplicht</span>
    <!-- Deze foutmeldingen tonen we als het naam-veld niet ingevuld is -->
    <br>
    <br>
    <label for="honeypot" class="honeypot">
      <input type="checkbox" name="honeypot" id="honeypot"> Gelieve dit <em>niet</em> aan te vinken. <br>
      <!-- De honeypot kan men gebruiken om SPAM te voorkomen -->
    </label>
    
    <input type="submit" value="Verzenden">
  </form>
</body>
</html>