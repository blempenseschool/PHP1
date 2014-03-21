<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'index'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Mijn dagboek';

?>

<?php include 'includes/open_html.inc'; ?>

    <div class="jumbotron">
        <h1>Jouw eigen digitale dagboek</h1>
        <p class="lead">Het is gratis om een eigen dagboek aan te maken. Je kan elke dag een nieuwe pagina toevoegen. Deze pagina's kan je delen met al jouw vrienden. Diepe, persoonlijke gedachten kan je privaat plaatsen zodat enkel jij dit terug kan bekijken!</p>
        <p><a class="btn btn-lg btn-success" href="registreer.php" role="button">Registreer nu!</a></p>
      </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Stap 1. <span class="text-muted">Registreren.</span></h2>
          <p class="lead">Registreren is gemakkelijk en gratis. Je moet maar enkele gegevens meegeven en je kan direct schrijven en pagina's toevoegen aan jouw dagboek!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/register.png" alt="registreren">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/pagina.png" alt="Pagina schrijven">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Stap 2. <span class="text-muted">Een pagina toevoegen.</span></h2>
          <p class="lead">Na het registreren kan je direct pagina's beginnen toevoegen. Je kan gebruik maken van Markdown om deze inhoud vorm te geven. Jouw vrienden kunnen jouw pagina's bekijken of je kan deze pagina's privaat maken.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Stap 3. <span class="text-muted">Dagboek delen.</span></h2>
          <p class="lead">Deel jouw persoonlijke URL met jouw vrienden. Op die manier kunnen zij jouw dagboek en avonturen volgen. Maar geen nood, je kan altijd private pagina's aanmaken die enkel jij kan bekijken!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/dagboek.png" alt="Dagboek">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <div class="jumbotron">
        <h1>Twijfel niet!</h1>
        <p class="lead">Probeer het gewoon. Aanmelden is gemakkelijk en gratis.</p>
        <p><a class="btn btn-lg btn-success" href="registreer.php" role="button">Registreer nu!</a></p>
      </div>


<?php include 'includes/close_html.inc'; ?>  
