<?php

/* 
controleur qui va modifier une tache
 * en POST les attributs pour l'objet tache
 * en GET l'id de la tache a modifier
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

//$user= new user($tache->auteur);
foreach(["destinataire","date_fin","description"] as $champ){
if (isset($_POST["$champ"])){
    $tache->$champ=$_POST["$champ"];
        } 
}
//print_r($tache);

$tache->auteur=$_SESSION["id"];
$tache->date_crea=$dateNow;
$tache->motif_refus="";
$tache->etat="à faire";
//print_r($tache);


$tache->update();
$tache->loadFromId($idTache);

include "$pages/tache-detail.php"; 