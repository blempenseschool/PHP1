<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Basis Pagina</title>
</head>
<body>

  <!-- Dit is HTML code -->
  <h1>De titel</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequatur, asperiores fuga ea error officiis quod in libero placeat consectetur sunt dignissimos deleniti a voluptatum aspernatur maxime laboriosam doloremque iure.</p>  

  <?php 
    // Dit is PHP code 
    $tekst = "Dit is <em>HTML code.</em>";
    $mooi_weer = true;
  ?>

  <h2>Ondertitel</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quasi, tenetur, et qui similique vitae necessitatibus ratione nisi repudiandae repellat nobis consequuntur natus perspiciatis atque inventore laboriosam doloribus adipisci eaque.</p>

  <!-- Dit is HTML code -->

  <?php print "<p>$tekst</p> \n"; // Dit is terug PHP code ?>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, nemo, fugiat itaque eligendi mollitia maiores dicta porro dolores laboriosam aliquid iure unde nihil doloremque voluptas magni dolore est ullam perferendis?</p>

  <?php 

    $naam = "Jouw naam";

    if (empty($naam)) {
      print "Jouw naam is leeg.";
    } else {
      ?>
      <!-- Dit is terug HTML en wordt enkel getoont als er een naam ingevuld is -->
      <h3>De naam</h3>
      <p>Jouw naam is: <?php print $naam; // dit is php ?></p>
      <!-- Dit is HTML -->
      <?php
      // Dit is terug PHP
    }
   ?>

  <?php if ($mooi_weer): ?>
    <p>
      Deze HTML code wordt enkel afgedrukt <strong>indien het mooi weer is!</strong>. De tekst was: <?php print $tekst; // dit is terug PHP ?>.
    </p>
  <?php else: ?>
    <p>
      Deze code wordt enkel afgedrukt <strong>indien het slecht weer is...</strong>
    </p>
  <?php endif ?>

  <h2>Nog een ondertitel</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, tempore, recusandae cupiditate maiores similique aliquam ea quos alias cum ullam ex culpa dicta mollitia quasi doloremque. Repudiandae tenetur molestias minima.</p>
</body>
</html>