<?php 

include 'includes/config.inc.php';

// Zorg dat de gebruiker kan inloggen als het formulier verzonden is
// Onthoud de username in de sessie zodat we deze kunnen afdrukken in het menu!


// Start HTML afdrukken met pagina titel
$pageTitle = 'Inloggen - Herhaling'; 
include 'includes/starthtml.inc.php';
?>


<a href="index.php">&laquo; Terug naar lijst</a>

<h1>Inloggen</h1>
<p>Gebruik het onderstaande formulier om in te loggen.</p>

<hr>

<div class="alert alert-danger">
  Er zijn <strong>foutmeldingen</strong> gevonden:

  <ul>
    <li>Het username veld is verplicht!</li>
    <li>Het paswoord veld is verplicht!</li>
    <li>De username/paswoord combinatie is fout. Probeer opnieuw.</li>
  </ul>
</div>

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Paswoord</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value="Inloggen">
    </div>
  </div>
</form>


    
<?php 

// Einde html afdrukken
include 'includes/endhtml.inc.php' 

?>