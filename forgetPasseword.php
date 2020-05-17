<?php
require("connexion.php");
$email = $_POST['email'];

if(isset($email)){
    $sql = "SELECT * FROM `etudiant` WHERE mailetudiant = '". $email ."';";
    $result = $conn->query($sql);
    $reponse = mysqli_fetch_array($result);
    if(!empty($reponse['mailetudiant'])){
       header("location: resetNewPassword.php");
    }
    else{
        
        header("location: index.php");
    }


}



// $req = mysqli_query($conn,$sql);
?>

