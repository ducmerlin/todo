<?php

/* 
controleur qui permet d'afficher le formulaure de création d'un utilisateur
 */
include "lib/init.php";


if ($_SESSION["superviseur"]==true){
    include "$pages/user-form-crea.php";
        }else{
          header("Location:index.php");  
        }
