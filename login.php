<?php
require("connexion.php");
session_start();

if (isset($_POST['your_email']) && isset($_POST['your_pass'])) {

    // connexion à la base de données
//    $db_username = 'root';
//    $db_password = '';
//    $db_name = 'sway3';
//    $db_host = 'localhost';
//    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
//    or die('could not connect to database');

    $your_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_email']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['your_pass']));

    if ($_POST["userType"] == "student") {
        $requete = "SELECT * FROM etudiant where
               mailetudiant = '" . $your_email . "' and passwordetudiant = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);

        if (!empty($reponse['mailetudiant'])) // nom d'utilisateur et mot de passe correctes
        {
//            var_dump($reponse);
//            die();
//            $_SESSION['your_email'] = $your_email;

            // get infos
            $_SESSION['userid'] = $reponse['idetudiant'];
            $_SESSION['firstName'] = $reponse['nometudiant'];
            $_SESSION['lastName'] = $reponse['prenometudiant'];
            $_SESSION['nvScolaire'] = $reponse['niveauscolaire'];
            $_SESSION['banche'] = $reponse['filiere'];
            $_SESSION['mail'] = $reponse['mailetudiant'];
            $_SESSION['password'] = $reponse['passwordetudiant'];


//            $sql = "SELECT * FROM demande where idetudiantc = '". $_SESSION['userid'] ."' ";
//            $exec_sql = mysqli_query($conn,$sql);
//            $sqlReponse = mysqli_fetch_array($exec_sql);
//
//            $_SESSION['idcours'] = $reponse['iddemande'];
//            $_SESSION['matiers'] = $reponse['matiere'];
//            $_SESSION['cours'] = $reponse['cours'];
//            $_SESSION['coursDesc'] = $reponse['description'];
//            $_SESSION['userCours'] = $reponse['idetudiantc'];

//            var_dump($sqlReponse);
//            die();



//            var_dump($sqlReponse);
//            die();






            echo($reponse);
            header('Location: Student.php');
        } else {
            header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }

    }



    elseif ($_POST["userType"] == "teacher") {
        $requete = "SELECT * FROM benevole where
                   mailbenevole = '" . $your_email . "' and passwordbenevole = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($conn, $requete);
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
    header('Location: index.php?error=ddddd');
    echo "
    <script> 
    
    alert('azdzadsdqsd');
    
    </script>
    
    ";
}

mysqli_close($conn); // fermer la connexion
?>