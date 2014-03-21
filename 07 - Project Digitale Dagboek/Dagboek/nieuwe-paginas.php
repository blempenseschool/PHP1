<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'nieuwe-paginas'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = "Nieuwste pagina's";
$body_class = 'turq-bg';

?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Nieuwste pagina's in het dagboek <small>van over de hele wereld</small></h1>
  </div>
</header>
<div class="container">  
  <section class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="dashboard-entry">
          <h2><a href="pagina-bekijken.php">Mijn eerste dagboek entry</a></h2>
          <p class="text-muted date"><small>21 februari 2014 | Door Koen | <span class="glyphicon glyphicon-eye-close"></span> Privaat</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quaerat, temporibus, minus repudiandae quae aliquam dolorem autem debitis quasi harum recusandae suscipit voluptatum qui. Accusamus, voluptatum, odit, similique, excepturi voluptates facilis commodi magnam esse molestias nihil saepe quibusdam non optio...</p>
          <a href="pagina-bekijken.php">Lees meer...</a>
        </div>

        <div class="dashboard-entry">
          <h2><a href="pagina-bekijken.php">Mijn eerste dagboek entry</a></h2>
          <p class="text-muted date"><small>21 februari 2014 | Door Koen | <span class="glyphicon glyphicon-eye-close"></span> Privaat</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quaerat, temporibus, minus repudiandae quae aliquam dolorem autem debitis quasi harum recusandae suscipit voluptatum qui. Accusamus, voluptatum, odit, similique, excepturi voluptates facilis commodi magnam esse molestias nihil saepe quibusdam non optio...</p>
          <a href="pagina-bekijken.php">Lees meer...</a>
        </div>

        <div class="dashboard-entry">
          <h2><a href="pagina-bekijken.php">Mijn eerste dagboek entry</a></h2>
          <p class="text-muted date"><small>21 februari 2014 | Door Koen | <span class="glyphicon glyphicon-eye-close"></span> Privaat</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quaerat, temporibus, minus repudiandae quae aliquam dolorem autem debitis quasi harum recusandae suscipit voluptatum qui. Accusamus, voluptatum, odit, similique, excepturi voluptates facilis commodi magnam esse molestias nihil saepe quibusdam non optio...</p>
          <a href="pagina-bekijken.php">Lees meer...</a>
        </div>

        <div class="dashboard-entry">
          <h2><a href="pagina-bekijken.php">Mijn eerste dagboek entry</a></h2>
          <p class="text-muted date"><small>21 februari 2014 | Door Koen | <span class="glyphicon glyphicon-eye-close"></span> Privaat</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, quaerat, temporibus, minus repudiandae quae aliquam dolorem autem debitis quasi harum recusandae suscipit voluptatum qui. Accusamus, voluptatum, odit, similique, excepturi voluptates facilis commodi magnam esse molestias nihil saepe quibusdam non optio...</p>
          <a href="pagina-bekijken.php">Lees meer...</a>
        </div>

        <ul class="pager">
            <li class="next"><a href="">Ouder &rarr;</a></li>
            <li class="previous"><a href="">&larr; Nieuwer</a></li>
        </ul>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  