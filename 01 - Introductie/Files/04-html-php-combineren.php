<?php 

/**
 * HTML en PHP combineren
 * ----------------------
 * 
 * PHP is een server-side programmeer taal. Dat wil zeggen dat de verwerking van
 * de pagina op de webserver gebeurd. De bezoeker zal nooit iets van deze php
 * code te zien krijgen. De output naar de bezoeker toe is een volledige HTML pagina.
 * 
 * Het is mogelijk om PHP en HTML op verschillende manieren te combineren.
 * We openen een PHP stukje door de php-tags te gebruiken: <?php ?>.
 * Alles wat tussen de open-tag "<?php" en de sluit-tag "?>" staat is PHP code.
 * Al de rest is gewone HTML code.
 * 
 * PHP gaat de pagina op een logische manier vanboven naar onderen verwerken. 
 * Telkens als er een stukje <?php ?> staat deze code verwerken en 
 * eventueel het resultaat afdrukken naar de HTML pagina.
 */

?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Basis Pagina</title>
</head>
<body>

  <!-- Dit is HTML code -->
  <h1>De titel</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, consequatur, asperiores fuga ea error officiis quod in libero placeat consectetur sunt dignissimos deleniti a voluptatum aspernatur maxime laboriosam doloremque iure.</p>  

  <?php //--> dit is PHP code 
    $tekst = "Dit is <em>HTML code.</em>";
    $mooi_weer = true;
  ?>


  
  <!-- Dit is HTML code -->
  <h2>Ondertitel</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quasi, tenetur, et qui similique vitae necessitatibus ratione nisi repudiandae repellat nobis consequuntur natus perspiciatis atque inventore laboriosam doloribus adipisci eaque.</p>

  <?php print "<p>$tekst</p> \n"; //--> dit is terug PHP code ?>




  <!-- HTML stukje -->
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, nemo, fugiat itaque eligendi mollitia maiores dicta porro dolores laboriosam aliquid iure unde nihil doloremque voluptas magni dolore est ullam perferendis?</p>

  <?php // PHP code stukje

    $naam = "Jouw naam";

    // Als naam leeg is ...
    if (empty($naam)) {
      print "Jouw naam is leeg."; //--> afdrukken naar de HTML pagina
    } else { 
      print "<h3>De naam</h3>"; //--> afdrukken naar de HTML pagina
      print "<p>Jouw naam is: $naam.</p>"; //--> afdrukken naar de HTML pagina
    }

  ?>


  <!-- Terug HTML code -->
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, ea neque error doloribus modi perspiciatis fugit inventore alias adipisci suscipit.</p>


  <!-- Dit is een andere schrijfwijze voor de IF structuur. Deze is gemakkelijker te combineren met HTML -->
  <?php if (empty($naam)):  //--> php openen en afsluiten ?>
    <p>
      Jouw naam is leeg.
    </p>
  <?php else:  //--> php openen en afsluiten ?>
    <h3>De naam</h3>
    <p>Jouw naam is: <?php print $naam; //--> afdrukken naar de HTML pagina ?></p>
  <?php endif; //--> php openen en afsluiten ?>


  <!-- Terug een stukje HTML code -->
  <h2>Nog een ondertitel</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, tempore, recusandae cupiditate maiores similique aliquam ea quos alias cum ullam ex culpa dicta mollitia quasi doloremque. Repudiandae tenetur molestias minima.</p>
</body>
</html>