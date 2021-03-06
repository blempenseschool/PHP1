<?php 

include 'includes/config.inc.php';

// Deze pagina moet beveiligd zijn!

// Zorg dat het formulier opnieuw ingevuld wordt!
// Zorg dat de foutmeldingen onderaan de pagina enkel getoond worden als er foutmeldingen zijn

// indien het formulier verzonden is
//     inhoud valideren!
//     inhoud toevoegen aan DB
//     indien gelukt doorsturen naar de index pagina
//            eventueel met een flash message



// Start HTML afdrukken met pagina titel
$pageTitle = 'Nieuw item toevoegen - Herhaling'; 
include 'includes/starthtml.inc.php';
?>


<a href="index.php">&laquo; Terug naar lijst</a>

<h1>Item toevoegen</h1>
<p>Gebruik het onderstaande formulier om een nieuw item toe te voegen</p>

<hr>

<div class="alert alert-danger">
  Er zijn <strong>foutmeldingen</strong> gevonden:

  <ul>
    <li>Het titelveld is verplicht!</li>
    <li>Het tekstveld is verplicht!</li>
  </ul>
</div>

<form action="" method="">
  <?php include 'includes/itemformulier.inc.php' ?>
  <input type="submit" class="btn btn-default" value="Toevoegen">
</form>


    
<?php 

// Einde html afdrukken
include 'includes/endhtml.inc.php' 

?>