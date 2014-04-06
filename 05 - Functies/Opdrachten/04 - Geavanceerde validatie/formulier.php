<?php 

// Validatie

//--> Twee velden zijn verplicht
//--> Email adres moet geldig zijn
//--> Email adres moet een punt bevatten voor het @ teken
//--> Website adres moet geldig zijn
//--> Website adres moet beginnen met http:// of https://. Indien de gebruiker dit niet typt en beignt met "www" moet je dit zelf gaan toevoegen aan $_POST['website'].
//--> Website mag enkel eindigen op .com


 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Geavanceerde validatie</title>

  <link rel="stylesheet" href="css/valideren.css"></head>
</head>
<body>
  <h1>Geavanceerde validatie</h1>
  <p>
    Geef een emailadres en een websiteadres in.
    <ul>
      <li>De twee velden zijn verplicht in te vullen.</li>
      <li>Het email adres <strong>moet</strong> een punt bevatten <em>voor</em> het @ teken.</li>
      <li>Het website adres <strong>moet</strong> beginnen met "http://" of "https://". Indien dit niet zo is, moet je dit zelf toevoegen.</li>
      <li>Een website adres mag ook enkel eindigen op ".com". Er mogen geen ".be" of ".org" adressen toegevoegd worden.</li>
      <li>De "verzonden items zijn geldig" mag enkel getoont worden bij succesvolle validatie.</li>
    </ul>
  </p>

  <div class="error">Er zijn foutmeldingen gevonden!</div>

  <p>
    <strong>De verzonden items zijn geldig!</strong>
  </p>

  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
      <label for="email">Email adres</label> <br>
      <input type="text" name="email" id="email">
      <span class="form-error">Email is verplicht</span>
    </p>  
    <p>
      <label for="website">Website adres</label> <br>
      <input type="text" name="website" id="website">
      <span class="form-error">Website is verplicht</span>
    </p>
    <div class="honeypot">
      <label for="honeypot">
        <input type="checkbox" name="honeypot" id="honeypot"> Gelieve dit <em>niet</em> aan te vinken.
      </label>
    </div>
    <p>
      <input type="submit" value="Verzenden">
    </p>
  </form>
</body>
</html>