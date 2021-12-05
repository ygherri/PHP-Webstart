<?php 
function dateActuelle(){
   return date('d/m/y');
}
 function nomPrenom($nom=null,$prenom=null){
    $nomValide = $prenomValide='';

     if (isset($_GET['nom']) && !empty($_GET['nom']))
     {
        $nomValide = $_GET['nom'];
    } else {

         $nomValide = $nom;
     }

     if (isset($_GET['prenom']) && !empty($_GET['prenom'])){
        $prenomValide = $_GET['prenom'];

     } else {
         $prenomValide = $prenom;
     }

     echo "Bonjour ".$nomValide.' '.$prenomValide.'.'.'<br><br>';
     }
     //?nom=azerty&prenom=tyytrfcf
     


function tableMultiplication(){
    $tables = array ('1','2','3','4','5','6','7','8','9');

foreach($tables as $Keytable => $tab ) {
    echo" Table de multiplication de ".$tab. '<br>';
         for ($i=1; $i < 10; $i++)
             echo "$i * $tab = ".$i * $tab. '<br>';
}
}
var_dump($_GET);