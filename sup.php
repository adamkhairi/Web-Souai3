<?php 
require("connexion.php");
session_start();
//  $sql = "UPDATE `reponce` SET reponce = '2' WHERE idevent=". $_GET['s'] ." AND idetudiant = ". $_SESSION['userid'] ."";
//  $sql = "UPDATE `reponce` SET reponce = '2' WHERE idevent=". $_GET['s'] ." AND idetudiant = ". $_SESSION['userid'] ."";
 $sql = "DELETE FROM `reponce`WHERE idevent= ". $_GET['s'] ." AND idetudiant = ". $_SESSION['userid'] ."";
 $run = mysqli_query($conn, $sql);