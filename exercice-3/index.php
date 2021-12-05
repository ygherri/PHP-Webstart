<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFonctions</title>
</head>
<body>
    <h1>Les Fonctions</h1>

    <?php

        // function<nom de la fonction>(</nom des paramètres>){
            //<instructions
            //return <valeur>; (optionnel)

        //}

        function ma_fonction() {
            echo 'essai 1';
            return true;
            echo 'Hello world';

        }
        ma_fonction();

        // fonction qui ne renvoie pas un résultat, il affiche directement dans la fonction
        function addition($nbr1=null, $nbr2=null){
            echo $nbr1+$nbr2;
        }
        echo"<br>";
        addition(2,2);
        echo"<br>";
         //Fonction qui retourne un résultat gràce 'return'
        function additionBis($nbr1=null, $nbr2=null){
            return $nbr1+$nbr2;
        }
        // Dans la variable $resultat on affecte le resultat de la fonction additionBis
        
        $resultat = additionBis(3,4);

        echo $resultat;

        function tva($nbr1){
            $calculTva = $nbr1*0.2;

            $calculTTc = $nbr1 + $calculTva;

            echo 'Le prix ttc vaut : '.$calculTTc.' €';
        }

        echo'<br>';
        tva(50);

        //Exercice faire une fonction qui permet de calculer la commission à donner 
        
        function commission($prix, $com = 10){

         $resultat = $prix*($com/100);
         echo ' La commission vaut : '.$resultat;

       }
        echo'<br>';
       commission(50,15);

        echo"<br>";
        echo"<br>";

        $insultes = ['merde','con']; 
        $phrase = "C'est de la merde ce con";  
        
        foreach($insultes as $insulte){
        $replace = str_repeat("*", strlen($insulte));

        $phrase = str_replace($insulte, $replace,$phrase);
        }

        echo $phrase;
        
         $x=4;
         echo'<br><br>';
        function soustraction($nbr1, $x){
           echo $x-$nbr1;

        }
        soustraction(2, $x);

        echo'<br><br>';


  
  //Exercice 1 - Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.
   function plusGrand(int $nbr1, int $nbr2) {
       echo "l'argument le plus grand est égale à : ".max($nbr1,$nbr2);
       

   }
   
   plusGrand(6,7);
  
  
  //Exercice 2 - Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra deux arguments de type int. Elle devra retourner le plus petit des deux.


   echo'<br><br>';
  function plusPetit(int $nb1, int $nb2) {
       echo "l'argument le plus petit est égale à : ".min($nb1,$nb2);
       

   }
   plusPetit(5,9);
   
   


  
  //Exercice 3 - Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true
  echo"<br><br>";
  function estIlMajeure($age){
      if ($age >= 18){
         return true;
      } else if ($age<18) {
          return false;
      }
  }
  $majeure = estIlMajeure(16);

  if($majeure){
      echo "tu es majeur";
  }else{
      echo "tu es mineur";
  }


  //Exercice 4 - Créer une fonction from scratch qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann
  
  echo"<br><br>";
  function concatenation($arg1,$arg2){
      echo $arg1.$arg2;
  }
  concatenation('Antoine','Griezmann');


  //Exercice 5 - Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner Le prof de programmation Web

    echo"<br><br>";

   function quiEstLeMeilleurProf(){
       echo "Le prof de programmation web";
   }
   quiEstLeMeilleurProf();

  //Exercice 6 - Créer une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;
  echo"<br><br>";
  function dernierElementTableau($array){
      $value = end($array);
        if ($array =null) {
            echo "null";
        } else {
            echo 'Le dernier élément du tableau : '.$value.'<br>';
        }
            
  }

   dernierElementTableau ($array=array('a','b','c','d'));

   // autre méthode :
   // function dernierElementTableau($tableau=array()) {
    // echo end($tableau);
    //echo $tableau [count($tableau)-1];
   // }
   //$tableau=array('apple','banane','fraise');
   // dernierElementTableau($tableau);


  //Exercice 7 - Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.

  function verificationPassword($password){
      $Pass= strlen($password); // strlen pour calculer le nombre de caractères dans un string / count pour le calcul de nombre de caractères dans un tableau.
      if ($Pass >= 8) {
          echo 'Mot de passe validé';
      } else  if ($Pass < 8) {
          echo 'Mot de passe non validé';
      }
  }
  verificationPassword('abdfy');


  //Exercice 8 - Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :

  //   Faire au moins 8 caractères
  //   Avoir au moins 1 chiffre
  //   Avoir au moins une majuscule et une minuscule
  
   echo'<br><br>';
  function check_mdp_format($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (check_mdp_format("1formati") != true)
{
	echo "Format non correct";	
}
else 
	echo "Format correct";
  

  

  //Exercice 9 - Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :

    // France ==> Paris
    // Allemagne ==> Berlin
    // Italie ==> Rome
    // Maroc ==> Rabat
    // Espagne ==> Madrid
    // Portugal ==> Lisbonne
    // Angleterre ==> Londres
    // Tout autre pays ==> Inconnu
    // Il faudra utiliser la structure SWITCH pour faire cette exercice.
     //
      echo'<br><br>';
     function capital($pays){
         switch($pays){

            case 'France':
                echo 'La capitale de la France : Paris.' ;
                break;
            case 'Allemagne':
                echo 'La capitale de la Allemagne : Berlin.' ;
                break;
            case 'Italie':
                echo "La capitale de l'italie : Rome." ;
                break;
            case 'Maroc':
                echo 'La capitale du Maroc : Rabat.' ;
                break;
            case 'Espagne':
                echo "La capitale de l'Espagne : Madrid." ;
                break;
            case 'Portugal':
                echo 'La capitale du Portugal : Lisbonne.' ;
                break;
            case 'Angleterre':
                echo "La capitale de l'Angleterre : Paris.";
                break;
            default : 
            echo "Inconnu";
         }
     }
     capital("Espagne");
     

echo"<br><br>";
    function generationMotDePasse($longueur=15) { //par défaut, on affiche un mot de passe de 9 caractères
        //chaine de caractère qui sera mis en désordre:
        $Chaine="abcdefghejklmnopkrstuvwxyzABCDEFGHEJKLMNOPQRSTUVWXYZ0123456789";
        $Chaine = str_shuffle($Chaine);// 72 caractères au total
        //on mélange la chaine avec la fonction str_shuffle(), propre à PHP
        $Chaine= substr($Chaine,0,$longueur);
        //ensuite on retourne notre chaine aléatoire de "longueur" caractères:
        return $Chaine; }

        function verificationPasswordComplexe()
        {
            while(true){
            $mdp= generationMotDePasse();
            $majuscule = preg_match('@[A-Z]@', $mdp);
	        $minuscule = preg_match('@[a-z]@', $mdp);
	        $chiffre = preg_match('@[0-9]@', $mdp);
	
	            if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	                {
		                return false;
	                  }
	                else {  
		                return $mdp;
                    }
                }
                      
        }
        $validation =verificationPasswordComplexe();
        if($validation) {
            echo $validation;
        }

    
    
  //Exercice 10 - Créer une fonction from scratch qui s'appelle quelleAnnee(). Elle devra retourner un integer representant l'année actuelle.
   echo'<br><br>';
   function quelleAnnee(){
       echo date('Y');
   }
   quelleAnnee();

  //Exercice 11 - Créer une fonction from scratch qui s'appelle quelleDate(). Elle devra retourner une string representant la date actuelle sous le format suivant DD/MM/YYYY
        echo'<br><br>';
        function quelleDate(){
          echo date("d/m/y");
        }
        quelleDate();

        



    ?>
    
</body>
</html>