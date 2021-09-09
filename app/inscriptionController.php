<?php 
include "database.php";
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
$password2 = $_POST['password2'];


$sql = "INSERT INTO `users`(`pseudo`, `password`) VALUES (:pseudo,:hashedpassword)";
$res = $db->prepare($sql);
if($_POST['password'] == $_POST['password2']){
$exec = $res->execute(array(":pseudo"=>$pseudo,":hashedpassword"=>$hashedpassword));
} else {
    echo "Les mots de passes ne correspondent pas";
}
if($exec){
    header("Location:index.php");
  }else{
    echo "Échec de l'opération d'insertion";
  }
