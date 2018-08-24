<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>
<body>
  <p>
    <?php
    // declaration des variables
    $age = 21;
    $name = "Jake";
    // declaration de la fonctions
    function conc($age , $name){
      return $age ." ". $name;
    }
    $res = conc($age , $name);
    echo $res;
    ?>
  </p>
</body>
</html>
