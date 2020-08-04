<?php

/* 
fragments : controleur qui permet de lister toutes les taches de l'utilisateur qui ont été refusé par le destinataire
 * 
 */
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

$tache = new tache();
$listeEncours=$tache->listeEncours();
include "$fragments/liste-encours.php";
//print_r($_SESSION["id"]);


