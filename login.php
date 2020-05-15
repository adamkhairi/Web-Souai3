<?php
session_start();
require_once("connexion.php");

if (isset($_POST['your_email']) && isset($_POST['your_pass'])) {
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'sway3';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
    or die('could not connect to database');

    $your_email = mysqli_real_escape_string($db, htmlspecialchars($_POST['your_email']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['your_pass']));

    if ($_POST["userType"] == "student") {
        $requete = "SELECT * FROM etudiant where
               mailetudiant = '" . $your_email . "' and passwordetudiant = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        if (!empty($reponse['mailetudiant'])) // nom d'utilisateur et mot de passe correctes
        {
//            var_dump($reponse);
//            die();
//            $_SESSION['your_email'] = $your_email;
            $_SESSION['firstName'] = $reponse['nometudiant'];
            $_SESSION['lastName'] = $reponse['prenometudiant'];
            $_SESSION['nvScolaire'] = $reponse['niveauscolaire'];
            $_SESSION['banche'] = $reponse['filiere'];
            $_SESSION['mail'] = $reponse['mailetudiant'];
            $_SESSION['password'] = $reponse['passwordetudiant'];



            echo($reponse);
            header('Location: Student.php');
        } else {
            header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }

    }



    elseif ($_POST["userType"] == "teacher") {
        $requete = "SELECT * FROM benevole where
                   mailbenevole = '" . $your_email . "' and passwordbenevole = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);

        if (!empty($reponse['mailbenevole'])) // nom d'utilisateur et mot de passe correctes
        {
//            $_SESSION['your_email'] = $your_email;
            $_SESSION['firstName'] = $reponse['nombenevole '];
            $_SESSION['lastName'] = $reponse['prenombenevole'];
            $_SESSION['mail'] = $reponse['mailbenevole'];
            $_SESSION['password'] = $reponse['passwordbenevole'];

            echo($reponse);
            header('Location: Teacher.php');
        } else {
            header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: index.php');
}

mysqli_close($db); // fermer la connexion
?>