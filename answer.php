<?php
require("connexion.php");
session_start();
$Array = $_SESSION['domende'];
$Array2 = $_SESSION['event'];
for ($i = 0; $i < sizeof($Array); $i++) {
    if (isset($_POST['getans_' . $Array[$i]])) {
        $reqet = "UPDATE demande SET reponce =" . $_POST['getans_' . $Array[$i]] . " WHERE idetudiantc = " . $_SESSION['userid'] . " AND iddemande = " . $Array[$i] . ";";
        $send = mysqli_query($conn, $reqet);
        if ($_POST['getans_' . $Array[$i]] = 1) {
            $sql = "INSERT INTO `reponce`(`idetudiant`, `idevent`) VALUES (" . $_SESSION['userid'] . " , " . $Array2[$i] . ");";
            $send2 = mysqli_query($conn, $sql);
            $req = "SELECT COUNT(idevent) AS counters FROM `reponce` WHERE idevent = " . $Array2[$i] . "";
            $do = mysqli_query($conn, $req);
            $reponse = mysqli_fetch_array($do);

        }
        header('location: Student.php');
    }
}
