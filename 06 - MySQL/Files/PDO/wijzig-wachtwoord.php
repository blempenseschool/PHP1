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
  <title>Wijzig wachtwoord</title>
</head>
<body>
  <h1>Geef het nieuwe wachtwoord in:</h1>
  <p>
    <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="password" name="paswoord" id="paswoord"> 
      <input type="hidden" name="id" value="">
      <input type="submit" value="Wijzig wachtwoord">
    </form>
  </p>
</body>
</html>