<?php
require("connexion.php");
session_start();
 $matiere = $_POST['matiere'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cours = $_POST['selCours'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $lien = $_POST['lien'];
    $message = $_POST['message'];
    $idProuf = $_SESSION['idProf'];
    $delay = $_POST['lastdate'];

//    print_r($cours,$date,$hours,$lien,$message,$idProuf);
//    die();
    if (!empty($lien) && !empty($hours) && !empty($date)) {


        $sql = "INSERT INTO `theevanets`(`coursID`, `ProfID`, `message`, `lien`, `hours`, `theDate`, `delay`) VALUES ('" . $cours . "','" . $idProuf . "','" . $message . "','" . $lien . "','" . $hours . "','" . $date . "','". $delay ."') ";
        $select = mysqli_query($conn, $sql);
//    print_r($select);
//    die();
        header("location: Teacher.php");
    } else {
        echo "<script>alert('veuillez compléter les informations')</script>";
        // header("location: Teacher.php");
    }
}


?>