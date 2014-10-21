<?php 

// Verdeel dit bestand in stukken en plaats de codes in include bestanden.
// Zorg ervoor dat je de titel van de pagina vervangt en afgedrukt wordt uit deze variabelen
// Zorg er ook voor dat je de CSS klasse van de pagina vervangt en afgedrukt wordt uit deze variabelen

// Maak dan nog een extra pagina "include-gebruiken-2.php" aan waarin je dezelfde HTML gebruikt, maar een andere titel in de $page_title ingeeft.

$page_title = "Include gebruiken - afgedrukt uit variabele";
$body_class = "afgedrukt-uit-variabele";

 ?>

<!-- Begin start_html.inc.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Include gebruiken</title>
  <style>
    .afgedrukt-uit-variabele {
      color: green;
    }

    .niet-afgedrukt-uit-variabele {
      color: red;
    }
  </style>
</head>
<body class="niet-afgedrukt-uit-variabele">
<!-- Einde start_html.inc.php -->

<h1>Include gebruiken</h1>
<p>Deze pagina gebruikt include bestanden om de gemeenschappelijke html tussen pagina's te hergebruiken.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae, odio, facere commodi natus quisquam quas suscipit laborum omnis cupiditate unde magni veniam accusantium aliquam perferendis dolorem nulla? Mollitia, perferendis.</p>
<p>Tempora, quibusdam, accusantium, beatae possimus mollitia officiis voluptatem commodi praesentium officia repellat modi autem ea laborum soluta quos nobis reiciendis alias magni voluptatum perspiciatis exercitationem dolores necessitatibus eaque vitae expedita?</p>
<p>Dolore, unde, earum, mollitia totam illo sapiente esse illum nam consectetur delectus ipsa animi ut architecto voluptatem id reiciendis quidem et neque eaque porro ullam accusantium numquam doloribus consequatur repudiandae.</p>

<!-- Begin end_html.inc.php -->
</body>
</html>
<!-- Einde end_html.inc.php -->