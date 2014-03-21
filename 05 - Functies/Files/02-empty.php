<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EMPTY functie</title>
</head>
<body>
  <?php 

  $tekst = "Deze string bevat tekst.";
  $tekst2 = ""; // Dit is een lege string.

  if (empty($tekst)) {
    print "<p>De eerste \$tekst variabele is leeg!</p>";
  } else {
    print "<p>De eerste \$tekst variabele is niet leeg!</p>";
  }

  if (!empty($tekst2)) {
    print "<p>De tweede \$tekst2 variabele is niet leeg!</p>";
  } else {
    print "<p>De tweede \$tekst2 variabele is leeg!</p>";
  }
  


   ?>
</body>
</html>