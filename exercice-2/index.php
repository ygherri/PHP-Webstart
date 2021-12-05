<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice2- Tableau et boucles</h1>

    <?php 
    $fruits = array ('orange','banane','fraise','pomme');

    var_dump($fruits);




    $fruits [1] = 'bananes';

    
?>

    <br>
    <p><?php echo $fruits [1]?></p>

    <?php 

$personne= array('prenom' => 'Alex','nom' => 'Dupont', 'age' => 30 );
var_dump($personne);

?>

<p> <?php echo $personne['prenom'] ?> </p>

<h2><?php echo 'Bonjour '.$personne['prenom'].' '.$personne['nom'].' tu as '.$personne['age'].'ans' ?></h2>

<?php 
$user = array( 
        "profil" => array ('prenom'=> 'tota', 'nom'=> 'tata', 'age' => 18),
        "media" => array('photo1', 'photo2', 'photo3'),
        'fruits' => array('a'=> 'orange', 'b' => 'banane', 'c'=> 'pomme')

            );   


?>
<h2><?php echo 'Bonjour '.$user['profil']['prenom'].' '.$user['profil']['nom'].' tu as '.$user['profil']['age'].'ans'.', tes fruits sont '.$user['fruits']['a'].', '.$user['fruits']['b'].' et '.$user['fruits']['c'].' .' ?></h2>

<h2><?php echo $user['fruits']['a'].' '.$user['fruits']['b'].' '.$user['fruits']['c']?></h2>

<?php 
$x = 2; $y = 3; $a = 5; $b = 2;

echo 'post incrémentation pour $x : '.$x++.'<br>';
echo '$x contient maintenant : '.$x.' <br><br>';

echo 'pré incrémentation pour $x : '.++$x.'<br>';
echo '$x contient maintenant : '.$x.' <br><br>';

echo 'post incrémentation pour $x : '.$x--.'<br>';
echo '$x contient maintenant : '.$x.' <br><br>';

echo 'pré incrémentation pour $x : '.--$x.'<br>';
echo '$x contient maintenant : '.$x.' <br><br>';


?>

<h3>Les boucles</h3>

<p>Boucle: While</p>

<?php $x =0;

while($x<=10) {

    echo '$x contient la valeur : '.$x.'<br>';
    $x++;
    if($x == 4){

        // Cela permet d'arrêter la boucle //
        break;
    }
}

echo'<br>';
?>

<p>Boucle: do While </p>

<?php 
$x= 0;
$y= 20;

do{

    echo '$x contient la valeur : '.$x. '<br>';
    $x++;
} while ($x <= 5);

// Faire une do while sur $y dans lequel la condition doit se répéter tant que $y est supérieur ou égale à 5
// On doit à chaque fois décrémenter la variable $y 

echo'<br>';





do{

    echo'$y contient la valeur : '.$y.'<br>';
    $y--;

} while($y >=5);

?>

<p>Boucle : For</p>

 <?php 
 for ($i=0; $i <= 5 ; $i++) {
     echo'$i contient la valeur '.$i.'<br>';
 }

 $fruits = array ('orange','banane','fraise','pomme');
 var_dump(count($fruits));

 echo '<br>';
 echo '<br>';

 for ($j=0; $j < count ($fruits); $j++) {
     echo 'La valeur de mon fruit est '.$fruits[$j]. '<br>';
 }
     $user = array(
    "profil" => array('prenom' => 'tota', 'nom' => 'tata', 'age' => 18 ),
    "media" => array('https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png', 
                      'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/002.png', 
                      'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/003.png'),
    'fruits'=> array('a' => 'orange', 'b' => 'banane', 'c' => 'pomme')
);
  
    echo '<br>';
    echo '<br>';

    for ($k=0; $k < count($user['media']); $k++) {
        ?>

        <img src="<?php echo $user ['media'][$k] ?>" alt="">
        
       <?php 

    }
     

    for ($p=0; $p < count($user['media']); $p++) {

        echo "<img src=".$user ['media'][$p]." >";
    }


 ?>

    <p>Boucle : foreach</p>
    <?php
     $villes = array('Fontainebleau', 'Paris', 'Lyon');

     foreach ($villes as $key => $ville ) {

        echo $ville.' a la clé ' .$key; '<br>';
     }


       $users = array(
                     "profil" => array('prenom' => 'tota', 'nom' => 'tata', 'age' => 18 ),
                     "media" => array('https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png', 
                      'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/002.png', 
                      'https://assets.pokemon.com/assets/cms2/img/pokedex/detail/003.png'),
                    'fruits'=> array('a' => 'orange', 'b' => 'banane', 'c' => 'pomme')
    );

    foreach($users as $keyUser => $user) {

        if($keyUser == 'profil') {
             echo'<p>Profil : </p>';

            foreach ($user as $key => $profil) {
            echo'<p>'.$key.' : '.$profil.'</p>'; 
             }
        }
    
       
        if($keyUser == 'media') {
            echo'<p>Pokemon</p>';
            foreach($user as $keyMedia => $media) {
                echo"<img src=".$media." >";
            }
        }
         if($keyUser == 'fruits') {
            echo'<p>Fruits</p>';
            foreach($user as $keyFruit => $fruit) {
                echo'<p>'.$keyFruit.' : '.$fruit.'</p>';
            
            }
        }
    }
        // 0- En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
        // 1- Table de multiplacation de 1 à 9.
        // 2- Ecrivez un programme pour afficher le nombre, de 4 à 12 en utilisant la boucle PHP.
        // Vous pouvez utiliser soit la boucle "for" ou "while".

        // 3- Modifier le code ci-dessous pour calculer la moyenne des notes.
        // $note_maths = 15;
        // $note_français = 12;
        //  $note_histoire_geo = 9;
        // $moyenne =0;
        // echo'La moyenne est de '.$moyenne.' / 20.';

        // 4- Déclarer une variable de type array qui stocke les informations suivantes : 
        // France : Paris
        // Allemagne : Berlin
        // Italie : Rome



    
    
?>

<?php
    
    echo'<br>';
    echo'<br>';

?>

<?php 

$table = 5;
for ($i=1; $i < 10; $i++)
echo "$i * $table = ".$i * $table. '<br>';

?>

<?php 
 
$tables = array ('1','2','3','4','5','6','7','8','9');

foreach($tables as $Keytable => $tab ) {
    echo" Table de multiplication de ".$tab. '<br>';
         for ($i=1; $i < 10; $i++)
             echo "$i * $tab = ".$i * $tab. '<br>';
}

?>
<?php 

for ($u=4; $u <= 12 ; $u++) {
     echo' '.$u.'<br>';
 }

 ?>

 <?php

$note_maths = 15;
$note_français = 12;
$note_histoire_geo = 9;
$moyenne =($note_maths + $note_français + $note_histoire_geo)/3;
echo'La moyenne est de '.$moyenne.' / 20.';

?>
<?php 
$Villes = array( 
        "Ville" => array ('France'=> 'Paris','Allemagne'=> 'Berlin','Italie' => 'Rome'));
        foreach ($Villes as $key => $Ville) {

        echo $key.' est la capitale de ' .$Ville; '<br>';
     }
?>

 


    
    

</body>
</html> 