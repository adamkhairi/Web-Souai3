
//session_start();
//require_once("connexion.php");
//
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form
//
//    $myusername = mysqli_real_escape_string($dbname, $_POST['email']);
//    $mypassword = mysqli_real_escape_string($dbname, $_POST['password']);
//
//    $sql = "SELECT mailetudiant.etudiant,
//    passwordetudiant.etudiant FROM etudiant
//    WHERE mailetudiant == '$myusername' and passwordetudiant == '$mypassword'";
//    $result = mysqli_query($dbname, $sql);
//    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//    $active = $row['active'];
//
//    $count = mysqli_num_rows($result);
//
//    // If result matched $myusername and $mypassword, table row must be 1 row
//
//    if ($count == 1) {
//        //user is etudiant
//        session_register("myusername");
//        $_SESSION['login_user'] = $myusername;
//
//        header("location: etudiant.html");
//        die();
//    } else {
//        $sql = "SELECT mailbenevole.benevole, passwordbenevole.benevole FROM benevole
//        WHERE mailbenevole == '$myusername' and passwordbenevole == '$mypassword'";
//        $result = mysqli_query($dbname, $sql);
//        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//        $active = $row['active'];
//        $count = mysqli_num_rows($result);
//        if ($count == 1) {
//            //user is benevole
//            session_register("myusername");
//            $_SESSION['login_user'] = $myusername;
//            header("location: benevole.html");
//            die();
//        } else {
//            //login or password incorrect
//            $error = "Your Login Name or Password is invalid";
//        }
//    }
//}
//



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('connexion.php');
session_start();

if (isset($_POST['mail'])){
  $mail = stripslashes($_REQUEST['mail']);
  $mail = mysqli_real_escape_string($conn, $mail);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $query = "SELECT mailbenevole, passwordbenevole FROM 'benevole' WHERE mailbenevole='$mail' AND passwordbenevole='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['mail'] = $mail;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="mail" placeholder="Adresse mail">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>