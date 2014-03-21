<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'pagina-toevoegen'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Schrijf een nieuwe pagina';
$body_class = 'asphalt-bg';

$foutmeldingen = array();
$success = false;

if ($_POST) {

  if (empty($foutmeldingen)) {
    // dagboek toevoegen
  }
}
 ?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Schrijf een nieuwe pagina</h1>
  </div>
</header>
<div class="container">   
  <section class="row">
    <div class="col-md-7">
        <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
          <?php include 'includes/dagboek_form.inc'; ?>   
          <button type="submit" class="btn btn-default">Voeg toe</button>
       </form>
     </div>
     <div class="col-md-5">
       <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Jammer!</strong> Er zijn foutmeldingen gevonden.
       </div> 
       <p class="lead">
         Gebruik dit formulier om een nieuwe pagina aan jouw dagboek toe te voegen.
       </p>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, voluptates, voluptatem, fugiat eligendi pariatur veniam rem qui laborum ullam sint ab repellendus ad. Molestiae, exercitationem, nisi, ipsum, earum aliquid autem unde enim explicabo amet qui iusto neque laudantium saepe maxime nam? Nostrum ex voluptatibus deleniti consequuntur esse omnis id doloremque!
       </p>
       <p><strong>Velden met een * zijn verplicht.</strong></p>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  