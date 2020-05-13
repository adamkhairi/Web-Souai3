<?php
require("connexion.php");
//include("inscription.php");
if (isset($_REQUEST['username'], $_REQUEST['prenom'],$_REQUEST['nScolaire'],$_REQUEST['filier'] ,$_REQUEST['email'], $_REQUEST['password'])) {
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
    $prenom = stripslashes($_REQUEST['prenom']);
    $prenom = mysqli_real_escape_string($conn, $prenom);
    // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
    $nScolaire = stripslashes($_REQUEST['nScolaire']);
    $nScolaire = mysqli_real_escape_string($conn, $nScolaire);
    // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
    $filier = stripslashes($_REQUEST['filier']);
    $filier = mysqli_real_escape_string($conn, $filier);
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    //requéte SQL + mot de passe crypté
    $query = "INSERT into `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`,`niveauscolaire`,`filiere`, `mailetudiant`, `passwordetudiant`) 
VALUES ('', '" . $username . "', '" . $prenom . "', '". $nScolaire ."', '". $filier ."','" . $email . "', '" . hash('sha256', $password) . "')";
    // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "
        <script>
        alert('Done');
</script>";
    }
} else {

}

?>