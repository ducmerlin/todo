<?php

/* 
fragment : controleur qui permet de lister toutes les taches à faire et dont la date d' echéance n'est pas encore passée
 * 
 */
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

$tache = new tache();
$listeAFaire=$tache->listeAFaire();
include "$fragments/liste-afaire.php";
//print_r($_SESSION["id"]);

