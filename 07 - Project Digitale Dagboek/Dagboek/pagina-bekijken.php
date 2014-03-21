<?php 

include 'includes/config.inc'; // Include config bestand
$active = ''; // Welke is de huidige pagina aangeduid in de navbar?
$page_title = 'Mijn eerste dagboek pagina';
$body_class = 'concrete-bg';

?>

<?php include 'includes/open_html.inc'; ?>

<header class="page-header">
  <div class="container">
    <h1>Bert's dagboek <small>21 februari 2014</small></h1>
  </div>
</header>
<div class="container">  
  <?php 
    $active_admintab='weergeven'; 
    include 'includes/admin_tabs.inc'; 
  ?>
  <section class="row">
     <div class="col-md-8 col-md-offset-2">
        <p><strong><span class="glyphicon glyphicon-eye-close"></span> Deze pagina is privaat.</strong> Enkel jij/bert kan deze pagina bekijken.</p>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, perferendis ut officiis quidem mollitia veritatis deleniti labore adipisci accusantium rerum optio quasi doloribus doloremque alias aliquam provident unde. Deleniti, obcaecati.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, officia, atque, fugiat, consequuntur sunt voluptatum ipsam eius obcaecati dolorem excepturi unde inventore iure ut vel iste alias tempora minima blanditiis asperiores nisi? Quidem neque quam pariatur doloribus id voluptatum alias.</p>
        <p>Cum, doloribus autem velit alias mollitia consectetur quas fugit ad error facilis! Quasi, assumenda, quod, deserunt, veniam voluptate laborum recusandae ex neque earum optio voluptates dolore vitae modi sit ab sunt dolor. Veritatis, porro architecto voluptatem mollitia odit sunt cum?</p>
        <p>Pariatur, eum totam eaque a quasi explicabo est laudantium architecto deleniti ut libero omnis reprehenderit repudiandae. Necessitatibus, commodi, odit, minima, atque dicta provident voluptate consequuntur adipisci dolorem eos expedita tempore rerum quos est explicabo at nisi pariatur doloribus neque esse.</p>
     </div>
   </section>
</div>

<?php include 'includes/close_html.inc'; ?>  