
<?php
//controleur qui va afficher la page de connexion

//on initialise les données
include"lib/init.php";

if (isset($_SESSION["connecte"])){
    include "$pages/accueil.php";
}else{
//on charge la page d'accueil
include "$pages/connexion.php";
}

