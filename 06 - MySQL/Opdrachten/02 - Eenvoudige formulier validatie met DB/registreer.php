<?php 



$foutmeldingen = array();
$success = false;

if ($_POST) {
  $_POST['naam'] = trim($_POST['naam']);
  if (empty($_POST['naam'])) {
    $foutmeldingen['naam'] = "Naam is verplicht";
  } else {
    // Controleren dat er enkel letters en spaties in een naam staan
    if (!preg_match('/^[a-zA-Z ]*$/', $_POST['naam'])) {
      $foutmeldingen['naam'] = "Een naam mag enkel uit letters en spaties bestaan";
    }
  }

  $_POST['email'] = trim($_POST['email']);
  if (empty($_POST['email'])) {
    $foutmeldingen['email'] = "Email is verplicht";
  } else {
    // Controleren dat het een geldig email adres is
    if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $_POST['email'])) {
      $foutmeldingen['email'] = "Geef een geldig email adres in";
    }
  }

  $_POST['password'] = trim($_POST['password']);
  if (empty($_POST['password'])) {
    $foutmeldingen['password'] = "Paswoord is verplicht";
  } else {
    if ($_POST['password_confirm'] != $_POST['password']) {
      $foutmeldingen['password_confirm'] = "Paswoord confirmatie is niet hetzelfde als het paswoord";
    }
  }

  if (!isset($_POST['voorwaarden'])) {
    $foutmeldingen['voorwaarden'] = "Je moet de voorwaarden accepteren";
  }

  if (empty($foutmeldingen) && !isset($_POST['honeypot'])) {
    // Verwerking van het formulier --> hier
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
            
            <!-- Deze foutmelding enkel tonen als er iets misloopt bij het registreren -->
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php //print $foutmeldingen['registreren']; ?>
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
          
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Proficiat!</strong> Het registreren is gelukt. Controleer in de <a href="lijst.php">lijst</a>.
          </div> 

        <?php else: ?>

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