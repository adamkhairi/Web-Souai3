<?php
require("connexion.php");
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


if ($password1 == $password2) {
    $sql = "UPDATE `etudiant` SET `passwordetudiant` = '" . hash('sha256', $password1) . "' WHERE `mailetudiant` = '". $email ."';";
    $req = mysqli_query($conn,$sql);
}else {
    echo "<script>alert('blbla')</script>";
}




?>