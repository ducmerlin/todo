<?php

/*
 * controleur qui permet de deconnecter l'user connecté
 * 
 */

include "lib/init.php";
//on vide la session
//print_r($_SESSION);
$_SESSION=[];

session_unset();

//puis on la detruit 
session_destroy();

header("Location:index.php");

