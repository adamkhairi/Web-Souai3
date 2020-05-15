<?php
session_start();
require("connexion.php");

//if(!empty($_POST['matiere'] && $_POST['cours'])){
    $sql = 'INSERT INTO `demande` (`idcours`,`matiere`,`cours`,`description`,`idetudiantc`) VALUES ( 9,'.$_POST['matiere'].','.$_POST['cours'].',' . htmlspecialchars($_POST['description']) .','. $_SESSION['userid'] .' )';
    $exec_sql = mysqli_query($conn,$sql);
//    $rep = mysqli_fetch_array($exec_sql);

//};




