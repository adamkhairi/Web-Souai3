<?php
require("connexion.php");
session_start();

if (isset($_POST['your_email']) && isset($_POST['your_pass'])) {

    $your_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_email']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_pass']));

    if ($_POST["userType"] == "student") {
        $requete = "SELECT * FROM etudiant where
               mailetudiant = '" . $your_email . "' and passwordetudiant = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);

        if (!empty($reponse['mailetudiant'])) // nom d'utilisateur et mot de passe correctes
        {

            // get infos
            $_SESSION['userid'] = $reponse['idetudiant'];
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

        $requete = "SELECT c.nombenevole , c.mailbenevole, c.prenombenevole , c.passwordbenevole , b.idmatiere , b.nommatiere FROM benevole c INNER JOIN matiere b ON b.idmatiere = c.idmatiere WHERE c.mailbenevole = '" . $your_email . "' and c.passwordbenevole = '" . hash('sha256', $password) . "' ;";

        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);

        if (!empty($reponse['mailbenevole'])) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['firstName'] = $reponse['nombenevole '];
            $_SESSION['lastName'] = $reponse['prenombenevole'];
            $_SESSION['mail'] = $reponse['mailbenevole'];
            $_SESSION['password'] = $reponse['passwordbenevole'];
            $_SESSION['matiere'] = $reponse['nommatiere'];

            echo($reponse);
            header('Location: Teacher.php');
        } else {
            header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: index.php?error=ddddd');
    echo "
    <script> 
    
    alert('azdzadsdqsd');
    
    </script>
    
    ";
}

mysqli_close($conn); // fermer la connexion
?>