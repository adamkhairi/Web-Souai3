<?php
require("connexion.php");
$your_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
$sql = "SELECT count(*) FROM `etudiant`  WHERE `mailetudiant`= '$your_email' ";
$req = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($req);
if ($data[0] == 0) {
    if (!empty($_POST['username'] && $_POST['prenom'] && $_POST['nScolaire'] && $_POST['filier'] && $_POST['email'] && $_POST['password'] && $_POST['password2']) && $_POST['password'] == $_POST['password2']) {
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $prenom = stripslashes($_POST['prenom']);
        $prenom = mysqli_real_escape_string($conn, $prenom);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $nScolaire = stripslashes($_POST['nScolaire']);
        $nScolaire = mysqli_real_escape_string($conn, $nScolaire);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $filier = stripslashes($_POST['filier']);
        $filier = mysqli_real_escape_string($conn, $filier);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `etudiant` (`nometudiant`, `prenometudiant`,`niveauscolaire`,`filiere`, `mailetudiant`, `passwordetudiant`) 
        VALUES ('" . $username . "', '" . $prenom . "', '" . $nScolaire . "', '" . $filier . "','" . $email . "', '" . hash('sha256', $password) . "')";
        // Exécuter la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if ($res) {
//                header('Location: index.php');
            header("location: index.php?msg=inscriptiondone");

//                echo "<script>alert('Done')</script>";
        }
    } else {
//        echo "<script>alert('Verifier vos informations !')</script>";
        header("location: index.php?msg=pwdNotMatch");

    }
}
?>