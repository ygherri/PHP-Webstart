<?php include_once "fonctions/fonctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php include_once "layout/menu.php"; ?>

    <h1>Contact</h1>


    <p>C'est votre corps de texte de contact</p>
    
   <h2> <?php nomPrenom('Gherri','Yesmine'); ?></h2>
    
    <form action="contact.php" method="POST">
        <?php if(isset($_POST['nom']) && !empty($_POST['nom'])) { ?>

       
    <input type="text" name="nom" placeholder="Saisir un nom" value="<?php echo $_POST['nom'];?>">
    <?php
     } else { ?> 
      <input type="text" name="nom" placeholder="Saisir un nom">
      <?php 
     }
     ?>
     <?php if (isset($_POST['nom'])&& !empty($_POST['nom'])) { ?>

        <input type="text" name="prenom" placeholder="Saisir un prenom" value="<?php echo $_POST['prenom'];?>">
        <?php
     } else { ?>

    <input type="text" name="prenom" placeholder="Saisir un prenom">
    <?php 
     }
     ?>
    <input type="submit" value="OK">

    </form>

    <?php 
    $nomPost = $prenomPost ='';

    if (isset($_POST['nom'])&& !empty($_POST['nom'])) {
        $nomPost = $_POST['nom'];
    }
     if (isset($_POST['prenom'])&& !empty($_POST['prenom'])) {
        $prenomPost = $_POST['prenom'];
     }

     if ($nomPost && $prenomPost) {
         echo'C\'est bon '.$prenomPost.' '.$nomPost.' tu es bien enregistré';

     }

     ?>





    
<?php include_once "layout/footer.php"; ?>