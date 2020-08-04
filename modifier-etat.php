<?php

/* 
controleur qui permet de modifier l'etat d'une tache 
 * l'état par le POST
 */

include "lib/init.php";


//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

if(isset($_GET["idTache"])){
$idTache=$_GET["idTache"];
$tache=new tache($idTache);
}else{
    header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
    exit;
}
$etat=$_POST["etat"];
if(isset($_POST["motif_refus"])){
    $motif=$_POST["motif_refus"];
    }
//print_r($idTache);
//print_r($motif);
//print_r($etat);


switch ($etat){
    case "faite": 
        $tache->etat="faite";
        echo"tache faite";
        $tache->updateEtat();
        header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
        break;
    case "encours":
        $tache->etat="en cours";
        //echo"je suis en cours";        
        $tache->updateEtat();
         header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
        break;
    case "supp":
        if ($_SESSION["id"]===$tache->auteur->id){
            $tache->delete($idTache);
            header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
        }
        break;
    case "refuser":
        $tache->etat="refusée";
        $tache->motif_refus=$motif;
        $tache->updateEtat();
        header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
        break;
    case "reaffecter":
        header("Location:afficher-form-modif-tache.php?idTache=$idTache");
        break;
    case "abandon":
        $tache->etat="abandonnée";
        $tache->updateEtat();
        header("Location:afficher-detail-tache-pop.php?idTache=$idTache");
        break;
}


