<?php

/* 
controleur qui va afficher l'historique complet de ses  taches 
 */
include "lib/init.php";

//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}


$tache=new tache();

//on fabrique la liste de toute les taches qu'il a crée

$listeCree=$tache->listeCree();

//on fabrique la  liste de toutes les taches qui luii ont été demandés( dont il est le destinataire

$listeDestinataire=$tache->listeDestinataire();

//on affiche la page
include "$pages/mon-historique.php";