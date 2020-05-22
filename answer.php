<?php
require("connexion.php");
session_start();
//if (isset($_POST['submit'])) {
    $ans = $_POST['getans'];
    print_r($ans);
//    die();
//    if (!empty($_POST['reponce'])) {

print_r($_SESSION['courses']);
    $reqet = "UPDATE demande SET reponce ='oui' WHERE idetudiantc = " . $_SESSION['userid'] . " AND cours =  ";
    $send = mysqli_query($conn, $reqet);
    print_r($send);
//    die();


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
