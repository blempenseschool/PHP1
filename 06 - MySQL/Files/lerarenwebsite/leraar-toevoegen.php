<?php 

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leraar toevoegen</title>
</head>
<body>
<p>
  <a href="index.php">Terug naar lijst</a>
</p>
<hr>

  <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="voornaam">Voornaam</label><br>
    <input type="text" name="voornaam" id="voornaam" value=""> 
    <br><br>

    <label for="achternaam">Achternaam</label> <br>
    <input type="text" name="achternaam" id="achternaam" value=""> 
    <br><br>

    <label for="geb_jaar">Geboorte jaar</label> <br>
    <input type="text" name="geb_jaar" id="geb_jaar" value=""> 
    <br><br>

    Geslacht 
    <br>
    <input type="radio" name="geslacht_man" id="geslacht_man"> 
    <label for="geslacht_man">Man</label>
    <br>
    <input type="radio" name="geslacht_vrouw" id="geslacht_vrouw"> 
    <label for="geslacht_vrouw">Vrouw</label>
    <br><br>

    <label for="bio">Bio</label><br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
    <br><br>

    <label for="vak">Vak</label>
    <select name="vakID" id="vak">
      <option value="1">PHP</option>
      <option value="2">Interface Lab</option>
    </select>
    <br><br>

    <input type="submit" value="Toevoegen">
  </form>
</body>
</html>