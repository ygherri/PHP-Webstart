<?php include_once "fonctions/fonctions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include / Required</title>
</head>
<body>
    <?php include_once "layout/menu.php"; ?>

    <h1>Include / Required</h1>
     <p>C'est votre corps de texte </p>

     <?php 
     $date = dateActuelle();

     echo '<p>date actuelle est '.$date.'</p>';

     // Exercice 1 afficher grâce à une fonction le nom et le prenom dans la page contact.
     //Exercice 2 afficher dans une page"table" les tables de multiplication bien sûr faire appel à une fonction.

     ?>


    <?php include_once "layout/footer.php"; ?>
    
   
    
