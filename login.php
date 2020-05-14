<?php
session_start();
if(isset($_POST['your_email']) && isset($_POST['your_pass']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'sway3';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS






    //
    $your_email = mysqli_real_escape_string($db,htmlspecialchars($_POST['your_email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['your_pass']));

    if($your_email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM etudiant where 
              mailetudiant = '".$your_email."' and passwordetudiant = '" . hash('sha256', $password) . "' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['your_email'] = $your_email;
           header('Location: Student.php');
        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>