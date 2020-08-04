<?php
//controleur qui va mettre de creer une tache


//on initialise les données
include "lib/init.php";


//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}
$tache= new tache();
$user = new user();

foreach(["destinataire","date_fin","description"] as $champ){
if (isset($_POST["$champ"])){
    $tache->$champ=$_POST["$champ"];
        } 
}

$tache->auteur=$_SESSION["id"];
$tache->date_crea=$dateNow;

$tache->etat="à faire";
//print_r($tache);
$tache->insert();
$tache->loadFromId($bdd->lastInsertId());
include "$pages/tache-detail.php"; 

   