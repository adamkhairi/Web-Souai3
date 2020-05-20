<?php
require("connexion.php");
session_start();
 $matiere = $_POST['matiere'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cours = $_POST['cours'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $lien = $_POST['lien'];
    $message = $_POST['message'];
    $idProuf = $_SESSION['idProf'];
    if (!empty($lien) && !empty($hours) && !empty($date)) {
        $sql = "INSERT INTO `theevanets`(`coursID`, `ProfID`, `message`, `lien`, `hours`, `theDate`) VALUES ('" . $cours . "','" . $idProuf . "','" . $message . "','" . $lien . "','" . $hours . "','" . $date . "') ";
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