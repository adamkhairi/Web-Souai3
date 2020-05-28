<?php
require "connexion.php";
$c = intval($_GET['c']);
die();

//  $inpu = (isset($_POST['nScolaire']) ? $_POST['inpu'] : null);
//  print_r($_SESSION['inpu']);

$sql1 = "SELECT * FROM `cours` WHERE idmatiere = " . $c . "";
$send1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_all($send1, MYSQLI_ASSOC);
if ($send1 = mysqli_query($conn, $sql1)) {

   foreach ($row as $r) {
        echo "<option value=  ". $r['idcours'] . "> " . $row['nomcours']  ."</option>";
        print_r($c);

    };
}

