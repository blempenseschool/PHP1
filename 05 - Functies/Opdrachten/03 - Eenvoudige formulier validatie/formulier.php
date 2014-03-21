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

        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Jammer!</strong> Er zijn foutmeldingen gevonden.
        </div> 

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
        <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
           <div class="form-group has-error">
              <label for="naam">Naam *</label>
              <input type="text" name="naam" id="naam" class="form-control" required autofocus>
              <span class="text-danger">
                Naam is verplicht
              </span>
           </div>
           <div class="form-group has-error">
              <label for="email">Email adres *</label>
              <input type="email" name="email" id="email" class="form-control" required>
              <span class="text-danger">
                Email is verplicht
              </span>
           </div>
           <div class="form-group has-error">
              <label for="paswoord">Paswoord *</label>
              <input type="password" name="password" id="paswoord" class="form-control" required>
              <span class="text-danger">
                Paswoord is verplicht
              </span>
           </div>
           <div class="form-group has-error">
               <label for="password_confirm">Paswoord confirmatie</label>
               <input type="password" name="password_confirm" id="password_confirm" class="form-control" required>
               <span class="text-danger">
                Paswoord confirmatie is niet hetzelfde als het paswoord
              </span>
           </div>
           <div class="checkbox">
               <label for="voorwaarden">
                  <input type="checkbox" name="voorwaarden" id="voorwaarden" required> Ik accepteer de voorwaarden *
               </label>
               <span class="text-danger">
                Je moet de voorwaarden accepteren
              </span>
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