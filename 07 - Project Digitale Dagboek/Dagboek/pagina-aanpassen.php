<?php 

include 'includes/config.inc'; // Include config bestand
$active = ''; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Mijn eerste dagboek pagina';
$body_class = 'concrete-bg';

$foutmeldingen = array();
$success = true;

if ($_POST) {
  
  if (empty($foutmeldingen)) {
    // Pagina aanpassen
  }
}

?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Pagina aanpassen <small>21 februari 2014</small></h1>
  </div>
</header>
<div class="container">  
  <?php 
    $active_admintab='aanpassen'; 
    include 'includes/admin_tabs.inc'; 
  ?>
  <section class="row">
     <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Jammer!</strong> Er zijn foutmeldingen gevonden.
       </div> 
       <form action="">
         <?php include 'includes/dagboek_form.inc'; ?>
         <button type="submit" class="btn btn-default">Aanpassen</button>
       </form> 
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  