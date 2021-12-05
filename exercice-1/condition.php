<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Condition</h1>

  <?php 

  $x = 16;

  if($x > 3) {

    echo "La variable x est supérieur à 3<br><br>";

  } 
  
  if ($x == 4) {

    echo"La variable x est égale à 4<br><br>";

  }
  if ($x == "4") {

    echo"La variable x est égale à 4<br><br>";
  }

  if ($x === "4") {

    echo"La variable x est égale à 4 et même type de donnée<br><br>";
  }

  if ($x != "4") {

    echo"La variable x est différent de 4<br><br>";
  }

  if ($x !== "4") {

    echo"La variable x est différent de 4<br><br>";
  }

  if (!$x){


  }

  if($x =5) {

    echo"La variable x est différente de 5<br><br>";
  } elseif ($x < 7) { 


    echo"La variable est inférieur à 7<br><br>";
  }
  else {

    echo"La variable est supérieur à 7<br><br>";
  }

  if ($x > 5 && $x < 10) { 

    echo"La variable est entre 6 et 9";
  } else {

    echo"La variable est en dehors 6 et 9<br><br>";
  }
  // EXERCICE //

  $a = 30;

  if($a <4) {
    echo"c'est un bébé";

  } else if($a<10) {

    echo"c'est un enfant";

  } else if($a< 18) {
    echo"c'est un adolescent";
  } else {

    echo"c'est un adulte";
  }

  // $age = 12;
  // if($age > =0 && $age =<4) {
   // echo"tu es un bébé"; }
   //elseif($age >= 5 && $age <=11) {
     //echo"tu es un enfant";}
     //elseif($age >= 12 && $age <=17) {
     //echo"tu es un ado";}
     // else { echo"tu es un adulte";}

     






















  
  
  
  
  
  
  
  ?>
</body>
</html>