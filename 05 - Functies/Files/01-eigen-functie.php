<?php 

  function berekenBMI($gewicht, $lengte, $afronden = 2)  
  {
    return round($gewicht/(pow($lengte/100, 2)), $afronden);
  }

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Eigen functies</title>
</head>
<body>
  <?php 

  $bmi = berekenBMI(75, 185);
  print "<h1>Jouw BMI is: $bmi</h1>";

   ?>  
</body>
</html>