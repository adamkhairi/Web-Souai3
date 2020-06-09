<?php
require("connexion.php");
session_start();
$Array2 = $_SESSION['event'];
for ($i = 0; $i < sizeof($Array2); $i++) {
    if (isset($_POST['getans_' . $Array2[$i]])) {
            $sql = "INSERT INTO `reponce`(`idetudiant`, `idevent`, `reponce`) VALUES (" . $_SESSION['userid'] . " , " . $Array2[$i] . ",". $_POST['getans_' . $Array2[$i]] .");";
            $send2 = mysqli_query($conn, $sql);
        header('location: Student.php');
    }
}

