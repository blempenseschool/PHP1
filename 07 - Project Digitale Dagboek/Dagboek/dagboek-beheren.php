<?php 

include 'includes/config.inc'; // Include config bestand
$active = 'dagboek-beheren'; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = "Dagboek beheren";
$body_class = 'carrot-bg';

?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Dagboek beheren <small>Bert's dagboek</small></h1>
  </div>
</header>
<div class="container">  
  <section class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="table-responsive">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Datum</th>
              <th>Titel</th>
              <th>Content</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
            <tr>
              <td>21/02/14</td>
              <td><a href="pagina-bekijken.php">Mijn eerste pagina</a></td>
              <td>Dit is mijn eerste pagina...</td>
            </tr>
          </tbody>
        </table>
        </div>

        <ul class="pager">
            <li class="next"><a href="">Ouder &rarr;</a></li>
            <li class="previous"><a href="">&larr; Nieuwer</a></li>
        </ul>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  