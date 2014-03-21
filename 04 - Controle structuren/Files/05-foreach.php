<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FOR EACH lus</title>
</head>
<body>
  <?php 

  // EENDIMENSIONALE ARRAY

  $dagen = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag"];

  print "<h2>Dagen</h2>";
  print "<ul>";
  
    print "<li>maandag</li>";
    print "<li>dinsdag</li>";
    print "<li>woensdag</li>";
    print "<li>donderdag</li>";
    print "<li>vrijdag</li>";
  
  print "</ul>";


  // ASSOCIATIEVE ARRAY

  $dagen_maaltijd = ["maandag" => "kip met rijst", 
                     "dinsdag" => "spaghetti bolognaise", 
                     "woensdag" => "puree met worst", 
                     "donderdag" => "gratin met vis", 
                     "vrijdag" => "steak met friet"];

  print "<h2>Maaltijden</h2>";
  print "<ul>";
    print "<li>Op maandag eten we kip met rijst.</li>";
    print "<li>Op dinsdag eten we spaghetti bolognaise.</li>";
    print "<li>Op woendag eten we puree met worst.</li>";
    print "<li>Op donderdag eten we gratis met vis.</li>";
    print "<li>Op vrijdag eten we steak met friet.</li>";
  print "</ul>";


  // MULTIDIMENSIONALE ARRAY

  $gebruikers = array(
                 "gebruiker 1" => ["naam" => "bert lempens",
                                   "email" => "blempens@eschool.be"],
                 "gebruiker 2" => ["naam" => "toon gorissen",
                                   "email" => "tgorissen@eschool.be"]);


  print "<h2>Gebruikers</h2>";
    print "<p>gebruiker 1 :</p>";
    print "<ul>
             <li>bert lempens</li>
             <li>blempens@eschool.be</li>
           </ul>";
    print "<p>gebruiker 2 :</p>";
    print "<ul>
             <li>toon gorissen</li>
             <li>tgorissen@eschool.be</li>
           </ul>";



   ?>
</body>
</html>