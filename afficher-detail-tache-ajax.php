<?php

/* 
controleur qui permet d'afficher le detail d'une fiche
 * parametre : idTache id de la tache dans le GET 
 */
include "lib/init.php";

//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

if (isset($_GET["idTache"])){
    $idTache=$_GET["idTache"];
}


$tache= new tache($idTache);

//on affiche le detail de la tache chargé
if (isset($tache->id)){
include "$fragments/tache-detail-ajax.php"; 
}else{ 
    include"$fragments/tache-supprime-ajax.php";
}