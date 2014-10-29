<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $pageTitle ?></title>
  <link rel="stylesheet" href="css/stijlen.css">
</head>
<body>

  <!-- Navigatie balk -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Herhaling</a>
      </div>

      <!-- Enkel tonen indien ingelogd -->
      <ul class="nav navbar-nav navbar-left">
        <li>
          <button type="button" class="btn btn-success navbar-btn" onclick="location.href='item-toevoegen.php'">Item toevoegen</button>
        </li>
      </ul>

      <!-- Enkel tonen indien ingelogd -->
      <p class="navbar-text navbar-left">ingelogd als <strong>admin</strong></p>


      <!-- Als men ingelogd is tonen we de logout knop, en anders tonen we de login knop -->
      <p class="navbar-text navbar-right"><a href="logout.php" class="navbar-link"><span class="glyphicon glyphicon-off" data-toggle="tooltip" data-placement="bottom" title="uitloggen"></span></a></p>
      <!-- <p class="navbar-text navbar-right"><a href="login.php" class="navbar-link">Inloggen</a> <span class="glyphicon glyphicon-user"></span></p> -->
    </div>
  </nav>

  <!-- inhoud -->
  <div class="container">