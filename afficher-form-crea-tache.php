<?php

/* 
controleur qui permet d'afficher le formulaire de création d'une tache
 */
include "lib/init.php";
$user=new user();

//on crée une liste des utilisateurs pour le select
$liste=$user->liste();

if ($_SESSION["connecte"]==true){
    include "$pages/tache-form-crea.php";
        }else{
          header("Location:index.php");  
        }
