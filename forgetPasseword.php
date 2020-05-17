<?php
require("connexion.php");
$email = $_POST['email'];
session_start();

if(!empty($email)){
    $sql = "SELECT * FROM `etudiant` WHERE mailetudiant = '". $email ."';";
    $result = $conn->query($sql);
    $reponse = mysqli_fetch_array($result);
    if(!empty($reponse['mailetudiant'])){
       header("location: resetNewPassword.php");
    }
    else{
        header("location: index.php");
      
    }


} else{
    header("location: index.php");
  
}











?>

