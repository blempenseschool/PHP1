<?php 

// Voeg eerst DBConnect toe aan deze pagina
// --> invoegen

$foutmeldingen = array();
$success = false;

if ($_POST) {
  // Kopieer jouw validatie uit het vorige hoofdstuk en plaats de code in het includes/registreer_validatie.inc.php bestand
  include('includes/registreer_validatie.inc.php');

  if (empty($foutmeldingen) && !isset($_POST['honeypot'])) {
    // Verwerking van het formulier
    // --> Query voorbereiden met parameters
    // --> Data array aanmaken en vullen
    // --> Query uitvoeren
    // 
    // Controleren of het uitvoeren gelukt is : dan $success op true plaatsen
    $success = true;
  }
}


 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-XU-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Eenvoudige formulier validatie</title>

  <!-- STYLESHEETS BOOTSTRAP -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="css/main.css">

</head>
<body>
  <header class="page-header">
    <div class="container">
      <h1>Registratie pagina <small>met PHP validatie</small></h1>
    </div>
  </header>
  <div class="container">   
    <section class="row">
        <div class="col-md-7">

        <?php if ($_POST && !empty($foutmeldingen)): ?>
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Jammer!</strong> Er zijn foutmeldingen gevonden.
          </div> 
        <?php endif ?>

         <h2>Registreer je voor onze applicatie!</h2>
         <p class="lead">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia maxime sit dicta doloribus optio quo porro? Ipsum, saepe at quaerat.
         </p>
         <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, sunt, autem distinctio possimus magni velit ullam iure sequi esse nobis a officiis in ea! Perferendis, velit, quam, blanditiis repellendus doloremque accusantium laboriosam deserunt id illo distinctio officiis debitis facere nesciunt ducimus aperiam molestias consequuntur rem. Maiores, architecto est labore eligendi numquam ea fugit atque quis. Officia, ipsam, dolore at qui ratione voluptas aspernatur sequi dolorem quae velit quibusdam neque ut incidunt nihil omnis tempore minus. Alias, voluptas sint officiis deleniti molestiae ratione provident voluptate iusto autem labore eius nisi minus repellendus quidem cumque incidunt rerum nemo odit non mollitia eum.
         </p>
         <p>
           <strong>De velden met * zijn verplicht.</strong>
         </p> 
       </div>
      <div class="col-md-4">

        <?php if ($_POST && $success): ?>
          <!-- Als het formulier verzonden is, en de gegevens zijn toegevoegd aan de DB -->
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Proficiat!</strong> Het registreren is gelukt. Controleer in de <a href="lijst.php">lijst</a>.
          </div> 

        <?php else: ?>
          <!-- Anders tonen we het formulier -->
          <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
           <div class="form-group <?php if (!empty($foutmeldingen['naam'])) print "has-error"; ?>">
              <label for="naam">Naam *</label>
              <input type="text" name="naam" id="naam" class="form-control" value="<?php if (!empty($_POST['naam'])) print $_POST['naam']; ?>" required autofocus>
              <?php if (!empty($foutmeldingen['naam'])): ?>
                <span class="text-danger">
                  <?php print $foutmeldingen['naam']; ?>
                </span>
              <?php endif ?>
           </div>
           <div class="form-group <?php if (!empty($foutmeldingen['email'])) print "has-error"; ?>">
              <label for="email">Email adres *</label>
              <input type="email" name="email" id="email" class="form-control" value="<?php if (!empty($_POST['email'])) print $_POST['email']; ?>" required>
              <?php if (!empty($foutmeldingen['email'])): ?>
                <span class="text-danger">
                  <?php print $foutmeldingen['email']; ?>
                </span>
              <?php endif ?>
           </div>
           <div class="form-group <?php if (!empty($foutmeldingen['password'])) print "has-error"; ?>">
              <label for="paswoord">Paswoord *</label>
              <input type="password" name="password" id="paswoord" class="form-control" required>
              <?php if (!empty($foutmeldingen['password'])): ?>
                <span class="text-danger">
                  <?php print $foutmeldingen['password']; ?>
                </span>
              <?php endif ?>
           </div>
           <div class="form-group <?php if (!empty($foutmeldingen['password_confirm'])) print "has-error"; ?>">
               <label for="password_confirm">Paswoord confirmatie</label>
               <input type="password" name="password_confirm" id="password_confirm" class="form-control" required>
               <?php if (!empty($foutmeldingen['password_confirm'])): ?>
                <span class="text-danger">
                  <?php print $foutmeldingen['password_confirm']; ?>
                </span>
              <?php endif ?>
           </div>
           <div class="checkbox">
               <label for="voorwaarden">
                  <input type="checkbox" name="voorwaarden" id="voorwaarden" required> Ik accepteer de voorwaarden *
               </label>
               <?php if (!empty($foutmeldingen['voorwaarden'])): ?>
                <span class="text-danger">
                  <?php print $foutmeldingen['voorwaarden']; ?>
                </span>
              <?php endif ?>
           </div> 
            
           <!-- HONEYPOT anti-spam captcha -->
           <div class="checkbox honeypot">
             <label for="honeypot">
               <input type="checkbox" name="honeypot" id="honeypot"> 
               Gelieve <em>niet</em> aan te vinken.
             </label>
           </div>
           
           
           <button type="submit" class="btn btn-default">Registreer</button>
         </form>
        <?php endif ?>

        
       </div>
       
     </section>
  </div>

  <footer id="footer">
    <div class="container">
      <p class="text-muted">CVOhz - PHP1 - Registratie pagina met formulier validatie</p>
    </div>
  </footer>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- JAVASCRIPT BOOTSTRAP -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>