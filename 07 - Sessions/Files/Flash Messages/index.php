<?php $pagetitle = 'Item toevoegen'; ?>
<?php include 'includes/starthtml.inc.php'; ?>

  <h1>Lijstje</h1>
  <a href="formulier.php">Item toevoegen</a>

  <div class="alert success">
    Item werd toegevoegd
  </div>

  <ul class="lijstje">
    <li>item 1 <a href="verwijder.php" class="delete">(verwijder item)</a></li>
  </ul>

<?php include 'includes/endhtml.inc.php'; ?>