<?php 
require("connexion.php");
session_start();
$sql = "DELETE FROM `reponce`WHERE idevent= ". $_GET['s'] ." AND idetudiant = ". $_SESSION['userid'] ."";
$run = mysqli_query($conn, $sql);