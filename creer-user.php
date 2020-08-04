
<?php
//controleur qui va mettre de creer un user 

//on verifier que l'utilisateur a le droit de le faire
//

//on verifirie que l'utlisateur conencté à bien le droit( superviseur) de creer un user
if ($_SESSION["superviseur"]!=true){
    header("Location:index.php");  
}

//on initialise les données
include "lib/init.php";

$user= new user();

//print_r($user);
//$user->LoadFromPost($oldPwd);
foreach(["nom","prenom","email","password","pwdVerif","superviseur"] as $champ){
if (isset($_POST["$champ"])){
    $user->$champ=$_POST["$champ"];
        } 
}
 /*
if (isset($_POST["pwdVerif"])){
    $pwdVerif=$_POST["pwdVerif"];
        } 
if (isset($_POST["nom"])){
    $nom=$_POST["nom"];
        } 
if (isset($_POST["prenom"])){
    $prenom=$_POST["prenom"];
        } 
if (isset($_POST["email"])){
    $email=$_POST["email"];
        } 
if (isset($_POST["password"])){
    $password=$_POST["password"];
        } 
*/


if ($user->password===$user->pwdVerif){
    //on hash le password
    $user->password=password_hash($user->password, PASSWORD_DEFAULT);
    $user->insert();
      
    $user->loadFromId($bdd->lastInsertId());
    include "$pages/user-detail.php"; 
}else{
    header("Location:afficher-form-crea-user.php"); 
   
}



//print_r($user);