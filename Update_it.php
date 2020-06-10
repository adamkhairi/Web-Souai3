<?php
require("connexion.php");
session_start();
if (!empty($_POST)){
    if (isset($_REQUEST['username'], $_REQUEST['prenom'], $_REQUEST['nScolaire'], $_REQUEST['filier'],$_REQUEST['password'], $_REQUEST['password2']) && $_REQUEST['password'] == $_REQUEST['password2']) {
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
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // $sql = "UPDATE `etudiant` SET `nometudiant`=". $username . ",`prenometudiant`= ". $prenom .",`niveauscolaire`=". $nScolaire . ",`filiere`= ". $filier .",`passwordetudiant`= ". $password ." WHERE mailetudiant`= ". $_SESSION['mail'] ."";
        $sql = "UPDATE etudiant SET nometudiant= ". $username . ",prenometudiant = ". $prenom .",niveauscolaire= ". $nScolaire .",filiere = ". $filier .",passwordetudiant = ". hash('sha256', $password) ." WHERE mailetudiant = ". $_SESSION['mail'] ." ";
        $res = mysqli_query($conn, $sql);
    
        // if($res){

            header('location:Student.php?m=done');
        // }else{
        //     print_r($sql);
        //         die();
        // }
    }else{
        header('location:Update.php?m=error');
    }
}
if(!empty($_GET['m'])){
    if($_GET['m'] = 'error'){

        echo "
        <div class=\"alert text-center alert-danger m-0 alert-dismissible fade show \" role=\"alert\">
    <strong>Ops !</strong> Verifiez vos Informations .
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    </div>
        ";
    }

}
    //        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
