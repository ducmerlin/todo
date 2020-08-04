<?php

/* 
fragments : controleur qui permet de lister toutes les taches de l'utilisateur connecté refusée par le destinatire 
 * 
 */
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

$tache = new tache();
$listeRefusee=$tache->listeRefusee();
include "$fragments/liste-refusee.php";
//print_r($_SESSION["id"]);

