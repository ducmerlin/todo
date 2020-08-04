<?php

/* 
controleur qui affiche le detail de l'user connecté
 * 
 */

include "lib/init.php";
//on verifirie que l'utlisateur est connecté 
if ($_SESSION["connecte"]!=true){
    header("Location:index.php");  
}

include "$pages/user-connecte-detail.php";

