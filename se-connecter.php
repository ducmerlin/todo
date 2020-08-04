<?php

/* 
controleur qui permet de se connecter et d'ouvrir la session
 * parametre : $email et $pwd, les identifiants d'un user
 */
include "lib/init.php";

$user= new user();

if (isset($_POST["email"])){
    $email=$_POST["email"];
        }   
if (isset($_POST["pwd"])){
    $pwd=$_POST["pwd"];
        }   

if($user->checkLogin($email,$pwd)){
    $_SESSION["connecte"]=true;
    
    //on charge les infos de l'user dans la session
    $_SESSION["nom"]= ucfirst($user->nom)." ".ucfirst($user->prenom);
    $_SESSION["id"]=$user->id;
    $_SESSION["email"]=$user->email;
    $_SESSION["superviseur"]=$user->superviseur;
 

//echo $_SESSION["nom"];
include "$pages/accueil.php";
}else{
    header("Location:index.php");
}