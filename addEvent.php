<?php
require("connexion.php");
session_start();

    $cours = $_POST['selCours'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $message = $_POST['message'];
    $idProuf = $_SESSION['idProf'];
    $delay = $_POST['lastdate'];
    $timestamp = strtotime($hours) + 60*60;
    $time = date('H:i', $timestamp);
    $timestamp1 = strtotime($hours) - 60*60;
    $time1 = date('H:i', $timestamp1);
    $sql1 = "SELECT COUNT(ProfID) AS n FROM theevanets WHERE ProfID = ". $idProuf ." AND theDate = '". $date ."' AND hours >= '". $time1 ."' AND hours <= '". $time ."'";
    $select = mysqli_query($conn, $sql1);
    $select = mysqli_fetch_array($select);
    if (!empty($hours && $date) && $select['n'] == 0) {
        $sql = "INSERT INTO `theevanets`(`coursID`, `ProfID`, `message`, `hours`, `theDate`, `delay`) VALUES ('" . $cours . "','" . $idProuf . "','" . $message . "','" . $hours . "','" . $date . "','" . $delay . "') ";
        $select = mysqli_query($conn, $sql);
        header("location: Teacher.php?msg=done");
    }else {
        header("location: Teacher.php?msg=NotDone");
}
?>