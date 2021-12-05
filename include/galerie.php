<?php include_once "fonctions/fonctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
</head>
<body>
    <?php include_once "layout/menu.php"; ?>

        <h1>Galerie</h1>


        <p>C'est votre corps de texte de galerie</p>

     <?php 
     $date = dateActuelle();

     echo '<p>date actuelle est '.$date.'</p>';

     ?>
    <?php include_once "layout/footer.php"; ?>
    
   
