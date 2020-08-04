<?php

/* 
controleur qui permet de modifier une fiche quand elle a été refusé
 * parametre : l'id de latache methode GET
 */

include "lib/init.php";

//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

if(isset($_GET["idTache"])){
$idTache=$_GET["idTache"];
}

$tache=new tache($idTache);

//on crée une liste des utilsateurs pour le select
$user=new user();
$liste=$user->liste();
/*
echo"idTACHE: ".$idTache;
    echo"<br>";
print_r($tache);
print_r($tache->auteur->id);
print_r($_SESSION["id"]);
 * 
 */
        

//on verifie que la fiche a bien été refusé et que l'on est bien l'auteur de la tache

if (($tache->etat==="refusée")AND($tache->auteur->id===$_SESSION["id"])){
    include"$pages/tache-form-modif.php";
    
}else{
        header("Location:index.php");
    }
