<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'Zoek gebruiker'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = "Zoek gebruiker";
$body_class = 'turq-bg';



?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Zoek gebruiker <small>Geef een gebruikersnaam in</small></h1>
    <form action="zoek-gebruiker" method="get">
      <div class="form-group col-md-4 col-md-offset-3">
        <input type="search" name="zoekterm" id="zoekterm" placeholder="zoek op gebruikersnaam" class="form-control" autofocus>
      </div>
      <div class="form-group col-md-2">
        <input type="submit" value="zoeken" class="btn btn-default">
      </div>
    </form>
  </div>
</header>
<div class="container">  
  <section class="row">
     <div class="col-md-8 col-md-offset-2">

      <div class="text-center">
        <p class="lead"><a href="dagboek.php">Bert Lempens</a></p>
      </div>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  