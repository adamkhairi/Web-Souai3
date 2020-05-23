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

//print_r($idetud,$idde);
//die();
// $idetudiant = $_SESSION['userid'];
//if (!empty($_POST['submit'])) {
//     $ans = $_POST['getans'];
// print_r($_POST['iddmd'] , $idetudiant);
// //    if (!empty($_POST['reponce'])) {
// //    print_r($_SESSION['courses']);
//     $reqet = "UPDATE demande SET reponce =" . $ans . " WHERE idetudiantc = " . $idetudiant . " AND iddemande = " . $_POST['iddmd'] . " ";
//     $send = mysqli_query($conn, $reqet);
//     print_r($_POST['iddmd'] , $idetudiant);

   $Array = $_SESSION['domende'];
   $Array2 = $_SESSION['event'];
    for($i = 0 ; $i < sizeof($Array) ; $i++){

        if(isset($_POST['getans_'. $Array[$i]])){
            $reqet = "UPDATE demande SET reponce =" . $_POST['getans_'. $Array[$i]] . " WHERE idetudiantc = " . $_SESSION['userid'] . " AND iddemande = " . $Array[$i]. ";";
            $send = mysqli_query($conn, $reqet);
            if($_POST['getans_'. $Array[$i]] = 1){
                $sql = "INSERT INTO `reponce`(`idetudiant`, `idevent`) VALUES (" . $_SESSION['userid'] . " , $Array2[$i]);";
                $send2 = mysqli_query($conn, $sql);
            }
            $sql2 = "DELETE FROM `demande` WHERE iddemande = " . $Array[$i]. "";
            $send3 = mysqli_query($conn , $sql2);
            header('location: Student.php');

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