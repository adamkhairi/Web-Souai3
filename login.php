<?php
require("connexion.php");
session_start();
if (isset($_POST['your_email']) && isset($_POST['your_pass'])) {
    $your_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_email']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_pass']));
    if ($_POST["userType"] == "student") {
        $requete = "SELECT * FROM etudiant where mailetudiant = '" . $your_email . "'";
        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        if (!empty($reponse['mailetudiant']))   {
            if( hash('sha256', $password) == $reponse['passwordetudiant']){

                    $_SESSION['userid'] = $reponse['idetudiant'];
                    $_SESSION['firstName'] = $reponse['nometudiant'];
                    $_SESSION['lastName'] = $reponse['prenometudiant'];
                    $_SESSION['nvScolaire'] = $reponse['niveauscolaire'];
                    $_SESSION['banche'] = $reponse['filiere'];
                    $_SESSION['mail'] = $reponse['mailetudiant'];
                    $_SESSION['password'] = $reponse['passwordetudiant'];
                    $_SESSION['filiere'] = $reponse['filiere'];
                    $requete = "SELECT f.namfiliere, n.niveau FROM filiere f INNER JOIN niveau n ON n.idniveau = f.idniveau where
                        idfiliere =" . $_SESSION['banche'];
                    $exec_requete = mysqli_query($conn, $requete);
                    $reponse = mysqli_fetch_array($exec_requete);
                    $_SESSION['nomFiliere'] = $reponse['namfiliere'];
                    $_SESSION['nomniveau'] = $reponse['niveau'];
                    header("Location: Student.php");
            }else {
                    header("location: index.php?msg=invalidPassword");
            }
        }else {
                header("location: index.php?msg=invalidInfos");
        }
            // get infos
    } elseif ($_POST["userType"] == "teacher") {
        $_SESSION['type'] = $_POST['userType'];
        $requete = "SELECT * FROM benevole WHERE mailbenevole = '" . $your_email . "'";
        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        if (!empty($reponse['mailbenevole'])) // nom d'utilisateur et mot de passe correctes
        {
            if($password == $reponse['passwordbenevole']){
                $_SESSION['idProf'] = $reponse['idbenevole'];
                $_SESSION['teacherFname'] = $reponse['nombenevole'];
                $_SESSION['teacherLname'] = $reponse['prenombenevole'];
                $_SESSION['mailb'] = $reponse['mailbenevole'];
                $_SESSION['password'] = $reponse['passwordbenevole'];
                header('Location: Teacher.php');
            }else {
                header("location: index.php?msg=invalidPassword");
            }
        } else {
            header("location: index.php?msg=invalidInfos");
        }
    }
} else {
    header("location: index.php?msg=invalidInfos");
}
// mysqli_close($conn); // fermer la connexion
?>
