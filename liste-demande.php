<?php

/* 
fragments : 
 * controleur qui permet de lister toutes les taches demandé par l'utilisateur connecté
 * 
 */
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

$tache = new tache();
$listeDemande=$tache->listeDemande();
include "$fragments/liste-demande.php";
//print_r($_SESSION["id"]);


