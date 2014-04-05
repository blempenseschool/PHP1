<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Basis : Verzenden naar dezelfde pagina</title>
</head>
<body>
  <h1>Wat is jouw naam?</h1>
  <!-- 
   
  Als we het formulier willen verzenden naar dezelfde pagina gebruiken we de $_SERVER["PHP_SELF"] variabele. Voor de veiligheid plaatsen we de variabele nog in de htmlspecialchars() functie.

   -->
  <form action="" 
        method="post">
    <input type="text" name="naam" id="naam"> 
    <input type="submit" value="verzenden">
  </form> 

  <hr>

  <!-- 
  
  We kunnen een "if($_POST){}" structuur gebruiken om te controleren of het formulier verzonden is. Net als de vorige oefening kunnen we gebruik maken van de $_POST[] array om de gegevens op te halen

   -->

  <p><strong>Jouw naam is Bert!</strong></p>

</body>
</html>