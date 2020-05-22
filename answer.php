<?php
require("connexion.php");
session_start();
//if (isset($_POST['submit'])) {
//    $ans = $_POST['getans'];
//    print_r($ans);
////    die();
////    if (!empty($_POST['reponce'])) {
//
//print_r($_SESSION['courses']);
//    $reqet = "UPDATE demande SET reponce ='oui' WHERE idetudiantc = " . $_SESSION['userid'] . " AND iddemande = ". $reponse['iddemande']." ";
//    $send = mysqli_query($conn, $reqet);
//    print_r($send);
////    die();
//
//$idetud = $_GET['idetudiant'];
//$idde = $_GET['iddemande'];

$idetudiant = $_SESSION['userid'];
$sql = "SELECT d.idetudiantc, d.iddemande ,d.cours, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM demande d INNER JOIN theevanets e ON d.cours = e.coursID INNER JOIN 
                    benevole b ON e.ProfID = b.idbenevole INNER JOIN cours c ON c.idcours = e.coursID WHERE d.idetudiantc = " . $idetudiant . " AND d.reponce = '' ;";
$exec_requete = mysqli_query($conn, $sql);
//            var_dump($exec_requete);
$reponse = mysqli_fetch_array($exec_requete);

if ($exec_requete = mysqli_query($conn, $sql)) {
    while ($reponse = mysqli_fetch_array($exec_requete)) {

        $i = 0;
//        $namefomr = 'reponce_'. $i;
        if (isset($_POST['submit'])) {

            if (!empty($_POST['reponce_' . $i])) {

//print_r($idetud,$idde);
//die();
                $idetudiant = $_SESSION['userid'];
//if (!empty($_POST['submit'])) {
                $ans = $_POST['getans'];
                print_r($_POST['iddmd'], $idetudiant);
//    if (!empty($_POST['reponce'])) {
//    print_r($_SESSION['courses']);
                $reqet = "UPDATE demande SET reponce =" . $ans . " WHERE idetudiantc = " . $idetudiant . " AND iddemande = " . $_POST['iddmd'] . " ";
                $send = mysqli_query($conn, $reqet);
                print_r($_POST['iddmd'], $idetudiant);
                $i++;
            } else {
                echo "<script>alert('Error2')</script>";
            }
        }
    }
}
//}
//else {
//    echo "<script>alert('Error2')</script>";
//
//}
//    if ($ans == 'oui') {
//        $req = "INSERT INTO reponce(idetudiant, idevent) VALUES (" . $idetudiant . "," . $reponse['eventID'] . ")";
//        $reqsend = mysqli_query($conn, $req);
//        echo "<script>alert('done')</script>";
//
//
//    } else {
//        echo "<script>alert('Error1')</script>";
//
//    }
//} else {
//    echo "<script>alert('Error2')</script>";
//
////    }
//}