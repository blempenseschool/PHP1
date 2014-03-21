<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'login'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Login';
$body_class = 'concrete-bg';


$foutmeldingen = array();
$success = false;

if ($_POST) {

  if (empty($foutmeldingen)) {
    // inloggen...
  }
}
 ?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Log nu in <small>en deel je dag met de wereld!</small></h1>
  </div>
</header>
<div class="container">   
  <section class="row">
    <div class="col-md-7 col-md-offset-2">
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Probeer opnieuw!</strong> De login gegevens waren niet juist.
        </div> 
        <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate class="form-horizontal">
          <?php include 'includes/login_form.inc'; ?>   
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Log nu in</button>
            </div>
          </div>
       </form>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  