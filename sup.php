<?php 
require("connexion.php");
 $sql = "UPDATE `reponce` SET reponce = '2' WHERE idevent=". $_GET['s'];
 $run = mysqli_query($conn, $sql);