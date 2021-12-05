<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 1</title>
</head>
<body>
  <?php 
  /* 

    */
     echo "hello world";


  ?>

  <?php 

  $toto = "tata";

  $tata = 1; // variable qui a pour typage un integer
  $tata2 = "1"; // variable a pour typage string 
  $vrai = true;
  $faux = false;
  $vide = NULL;

  echo "$tata <br>";
  echo "$tata2 <br>"; 

  echo $tata;
  echo $tata2;
   echo gettype($tata);


   var_dump($tata); 
  //  var-dump sert à débugger

   $prenom = "Yesmine";
   $nom = "Gherri";

  //  Opération de chaines et la concaténation en php.

  $a = 2;
  $b = 3;

  $c = $a + $b;
  echo "<br> Le résultat de la variable addidtion est : ".$a." + ".$b." = ".$c."<br><br>";
  $soustraction = $a - $b;
  echo "<br> Le résultat de la variable soustraction est : ".$a." - ".$b." = ".$soustraction."<br><br>";
  $multiplication = $a * $b;
  echo "<br> Le résultat de la variable  multiplication est : ".$a." * ".$b." = ".$multiplication."<br><br>";
  $division = $a / $b;
  echo "<br> Le résultat de la variable  division est : ".$a." / ".$b." = ".$division."<br><br>";
  $modulo= $a % $b;
  echo "<br> Le résultat de la variable modulo est : ".$a." % ".$b." = ".$modulo."<br><br>";
  $puissance = $a ** $b;
  echo "<br> Le résultat de la variable  puissance est : ".$a." ** ".$b." = ".$puissance."<br><br>";

  // créer deuc variables d(5) et e(7)
  // dans une variable $f je veux la multiplication des variables $d et $e. 
  // dans une variable $g je veux la division de la variable $f en fonction de $b

  $d = 5;
  $e = 7;
  
  $f = $d * $e;
  echo "<br> Le résultat de la variable f est ".$d." * ".$e." = ".$f."<br><br>";

  $g = $f / $b;

echo "<br> Le résultat de la variable g est ".$f." / ".$b." = ".$g."<br><br>";

$m = ($d+$b) * $a;
echo "<br> Le résultat de la variable m est "."( ".$d." + ".$b." )"." * ".$a." = ".$m."<br><br>";
//var_dump($m); pour afficher int(16)

$title = "Bonjour";
$title.= " tout le monde";

echo "$title stock : " .$title."<br>";

$z =5; 
$z -= 3; // $z = $z - 3; $z devient 2
$z +=3;
echo $z;
$x = 1;
$y = 2;
$z = 3;
$w = 5;
$x = $z +=2;
$y += $z -=2;

// option + shift + L = ||
//  AND
//true x  true = true
// false x true = false
// true x false = false
// false x false = false 

// OR 
//true x  true = true
// false x true = true
// true x false = true
// false x false = false 










  

?>

<p> <?php echo "Bonjour Yesmine Gherri"; ?></p>
<p><?php echo "Bonjour ".$prenom." ".$nom; ?></p>
<p><?php echo "Bonjour $prenom $nom "; ?></p>
<p><?php echo 'Bonjour'.$prenom.' '.$nom; ?></p>

<p><?php echo 'Je m\'appelle '.$prenom.' '.$nom; ?></p>
<p> <?php echo "Bonjour ". $prenom." ".$nom; ?> </p>
<p> <?php echo "Bonjour $prenom $nom"; ?> </p>

</body>
</html>