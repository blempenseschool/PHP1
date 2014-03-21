<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'registreer'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Aanmelden';

$foutmeldingen = array();
$success = false;

if ($_POST) {
  include('includes/registration_validation.inc');

  if (empty($foutmeldingen) && !isset($_POST['honeypot'])) {
    try {
      include 'includes/dbConnect.inc';
      $query = $conn->prepare("INSERT INTO users(naam, email, paswoord) VALUES (:naam, :email, :paswoord)");
      $data = ['naam'     => $_POST['naam'],
               'email'    => $_POST['email'],
               'paswoord' => $_POST['password']];
      $query->execute($data);

      if ($query->rowCount())
        $success = true;
      else 
        $foutmeldingen['registreren'] = "Het registreren is mislukt. Probeer later nog eens.";
    } catch (PDOException $e) {
      print 'Error: ' . $e->getMessage();
    }
  }
}
 ?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Meld je nu aan <small>voor jouw eigen digitale dagboek!</small></h1>
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
          <?php if (isset($foutmeldingen['registreren'])): ?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php print $foutmeldingen['registreren']; ?>
          </div> 
          <?php endif ?>
        <?php endif ?>
       <h2>Jouw eigen digitale dagboek!</h2>
       <p class="lead">
         Registreer je nu en krijg de mogelijkheid om een eigen digitale dagboek bij de houden. Al je vrienden zullen jouw avonturen kunnen volgen!
       </p>
       <p>
         Niet enkel kan je jouw berichten delen met de wereld, je kan ook berichten aanmaken die enkel voor jouw bedoeld zijn! Zo kan je later nog eens terugblikken op de gedachten die je op dat moment wou delen met de wereld en jezelf. 
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
          <strong>Proficiat!</strong> Het registreren is gelukt.
          <br><br>
          <a href="login.php">Meld je nu aan.</a>
        </div> 
      <?php else: ?>
        <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
          <?php include 'includes/registration_form.inc'; ?>   
          <button type="submit" class="btn btn-default">Registreer</button>
       </form>
      <?php endif ?>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  