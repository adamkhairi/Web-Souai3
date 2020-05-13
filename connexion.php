<?php

//$servername = "localhost";
//$username = "admin";
//$password = "mysql";
//$dbName = "sway3";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOException $e)
//{
//    echo "Connection failed: " . $e->getMessage();
//}


// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'ABDO@RAJA@01');
define('DB_NAME', 'sway3');

// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}