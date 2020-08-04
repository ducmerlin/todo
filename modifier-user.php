
<?php
//controleur qui va mettre a jour les details d'un user 
// le mot de passe uniquemement pour l'instant 

//on initialise les données
include"lib/init.php";

//on verifirie que l'utlisateur est connecté pour avoir le droit de modifier son pass
if ($_SESSION["connecte"]!==true){
    header("Location:index.php");  
}

$user= new user($_SESSION["id"]);

//print_r($user);
//on verifie si on vient d'une page de modification par un superviseur

//$user->LoadFromPost($oldPwd);
if (isset($_POST["oldPwd"])){
    $oldPwd=$_POST["oldPwd"];
        } 
        
if (isset($_POST["newPwd"])){
    $newPwd=$_POST["newPwd"];
        } 
        
if (isset($_POST["pwd"])){
    $pwd=$_POST["pwd"];
        } 

if(!password_verify($oldPwd, $user->password)){
    header("Location:afficher-mon-profil.php");
    exit;
}
if ($pwd!==$newPwd){
    echo"le nouveau pass ne correspond pas";
    exit;
}else{
    
    $user->password=$pwd;
    
}

//print_r($user);
//
// on hash le mot de pass
$user->password=password_hash($user->password, PASSWORD_DEFAULT);

//on met a jour l'utilisateur

$user->update();
header("Location:afficher-mon-profil.php");

//print_r($oldPwd);
//print_r($pwd);
//print_r($newPwd);

//print_r($user);

//CHANGEMENT DE PASS par SUPERVIUSEUR
//marche pas conflit entre $user et $new user
//on initialise les données
/*
include"lib/init.php";

$user= new user($_SESSION["id"]);

//print_r($user);
//on verifie si on vient d'une page de modification par un superviseur

if (isset($_POST["superviseur"])){
    $superviseur=$_POST["superviseur"];
        } 
//$user->LoadFromPost($oldPwd);

if (isset($_POST["oldPwd"])){
    $oldPwd=$_POST["oldPwd"];
        } 

if (isset($_POST["newPwd"])){
    $newPwd=$_POST["newPwd"];
        } 
        
if (isset($_POST["pwd"])){
    $pwd=$_POST["pwd"];
        } 
if ($superviseur===true){
    if($user->password!==$oldPwd){
        header("Location:afficher-mon-profil.php");
        exit;
    }
}
if ($pwd!==$newPwd){
    echo"le nouveau pass ne correspond pas";
    exit;
}else{
    
    $user->password=$pwd;
    
}

print_r($user);
 * 
 */