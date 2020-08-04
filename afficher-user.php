<?php

/* 
controleur qui va afficher un utlisateur
 * parametre l'id de l'user
 * //TESTE UNIQUEMENT
 */
include "lib/init.php";

//on charge un user
$user=new user(2);
include "$pages/user-detail.php";
