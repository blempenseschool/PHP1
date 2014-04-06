<?php 

include 'dbConnect.php';

if ($_POST) {

  if (empty($_POST['paswoord'])) {
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
  <title>Wijzig wachtwoord</title>
</head>
<body>
  <h1>Geef het nieuwe wachtwoord in:</h1>

  <?php 
    if (!empty($foutmeldingen)) {
      print "<div style=\"color:red;\">$foutmeldingen</div>";
    }
   ?>

  <p>
    <!-- Het ID afdrukken bij de action -->
    <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="password" name="paswoord" id="paswoord"> 
      <input type="submit" value="Wijzig wachtwoord">
    </form>
  </p>
</body>
</html>