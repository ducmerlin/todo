<?php

/* 
controleur qui permet de lister toutes les taches
 * 
 */
include "lib/init.php";
$tache = new tache();
$listeAll=$tache->listeAll();

//on verifirie que l'utlisateur conencté à bien le droit d'afficher cette liste
if ($_SESSION["superviseur"]==true){
    include "$pages/taches-liste.php";
        }else{
          header("Location:index.php");  
        }
