<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <ul class="nav nav-tabs admin-tabs">
      <li class="<?php if ($active_admintab=='weergeven') print 'active'; ?>"><a href="pagina-bekijken.php"><span class="glyphicon glyphicon-eye-open"></span> Weergeven</a></li>
      <li class="<?php if ($active_admintab=='aanpassen') print 'active'; ?>"><a href="pagina-aanpassen.php"><span class="glyphicon glyphicon-pencil"></span> Aanpassen</a></li>
      <li><a href="#" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-remove"></span> Verwijderen</a></li>
      <li class=""><a href="dagboek-beheren.php">Dagboek beheren</a></li>
    </ul>
  </div>
</div> 

<?php include 'includes/pagina_verwijderen_modal.inc'; ?>
