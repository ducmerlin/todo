<?php

/* 
fragments : controleur qui permet de lister toutes les taches en retard et qui sont a faire ou en cours
 * 
 */
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

$tache = new tache();
$listeRetard=$tache->listeRetard();
include "$fragments/liste-retard.php";
//print_r($_SESSION["id"]);

//print_r($listeRetard);
