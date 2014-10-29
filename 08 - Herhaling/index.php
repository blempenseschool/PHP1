<?php 

include 'includes/config.inc.php';

// items opzoeken en uit de databank opvragen



// Start HTML afdrukken met pagina titel
$pageTitle = 'Herhaling'; 
include 'includes/starthtml.inc.php';
?>

<!-- flash melding tonen als er berichten zijn -->
<!-- <div class="alert alert-info">
  Item werd toegevoegd!
</div> -->

<!-- de items overlopen en telkens een <div class="item"> afdrukken -->
<div class="item">
  <h2>Een eerste item</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis quibusdam facere adipisci nulla dignissimos pariatur minus sequi. Voluptas sunt necessitatibus placeat aliquid hic, odio, iure quibusdam magni cupiditate assumenda?</p>

  <!-- enkel tonen indien ingelogd -->
  <!-- zorg dat het ID bij de links afgedrukt wordt -->
  <ul class="edit-buttons">
    <li>
      <a href="item-aanpassen.php?id=1" class="aanpassen"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="aanpassen"></span></a>
    </li>
    <li>
      <a href="item-verwijderen.php?id=1" class="verwijderen"><span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="bottom" title="verwijderen"></span></a>
    </li>
  </ul>
</div>

<!-- deze divs hieronder mag je wegdoen. Deze zijn voor de test inhoud -->
<div class="item">
  <h2>Een tweede item</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis quibusdam facere adipisci nulla dignissimos pariatur minus sequi. Voluptas sunt necessitatibus placeat aliquid hic, odio, iure quibusdam magni cupiditate assumenda?</p>

  <ul class="edit-buttons">
    <li>
      <a href="item-aanpassen.php?id=1" class="aanpassen"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="aanpassen"></span></a>
    </li>
    <li>
      <a href="item-verwijderen.php?id=1" class="verwijderen"><span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="bottom" title="verwijderen"></span></a>
    </li>
  </ul>
</div>

<div class="item">
  <h2>Een derde item</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis quibusdam facere adipisci nulla dignissimos pariatur minus sequi. Voluptas sunt necessitatibus placeat aliquid hic, odio, iure quibusdam magni cupiditate assumenda?</p>

  <ul class="edit-buttons">
    <li>
      <a href="item-aanpassen.php?id=1" class="aanpassen"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="aanpassen"></span></a>
    </li>
    <li>
      <a href="item-verwijderen.php?id=1" class="verwijderen"><span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="bottom" title="verwijderen"></span></a>
    </li>
  </ul>
</div>

<div class="item">
  <h2>Een vierde item</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis quibusdam facere adipisci nulla dignissimos pariatur minus sequi. Voluptas sunt necessitatibus placeat aliquid hic, odio, iure quibusdam magni cupiditate assumenda?</p>

  <ul class="edit-buttons">
    <li>
      <a href="item-aanpassen.php?id=1" class="aanpassen"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="aanpassen"></span></a>
    </li>
    <li>
      <a href="item-verwijderen.php?id=1" class="verwijderen"><span class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="bottom" title="verwijderen"></span></a>
    </li>
  </ul>
</div>




<?php 

// Einde html afdrukken
include 'includes/endhtml.inc.php' 

?>