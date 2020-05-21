<?php
require("connexion.php");
session_start();
//require("login.php");
//$db_username = 'root';
//$db_password = '';
//$db_name = 'sway3';
//$db_host = 'localhost';
//$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
//or die('could not connect to database');
////if (!empty($reponse['cours'])) // nom d'utilisateur et mot de passe correctes
////{
//
//if (isset($_REQUEST['matiere'], $_REQUEST['cours'], $_REQUEST['description'], $_REQUEST['nvscolaire'])) {
//    $matiere = stripslashes($_REQUEST['matiere']);
//    $cours = stripslashes($_REQUEST['cours']);
//    $description = stripslashes($_REQUEST['description']);
//    $nvscolaire = stripslashes($_REQUEST['nvscolaire']);
//
////    $sql = "INSERT INTO `demande` (`iddemande`,`matiere`,`cours`,`description`,`nvscolaire`,`idetudiantc`)
////VALUES ( ''," . $_POST['matiere'] . "," . $_POST['cours'] . "," . htmlspecialchars($_POST['description']) . "," . htmlspecialchars($_POST['nvscolaire']) . "," . $_SESSION['userid'] . " )";
//
//    $sql = "INSERT into demande1 (`iddemande`,`matiere`,`cours`,`description`,`nvscolaire`)
//VALUES ( ''," . $matiere . "," . $cours . "," . $description. "," . $nvscolaire . " )";
//
//    $rep = mysqli_query($conn, $sql);
//
//    if ($rep) {
//        echo "
//        <script> alert('Success')</script>";
//    } else {
//        echo "
//        <script> alert('Error')</script>";
//    }
//    var_dump($rep);
//    die();
//
//}
//}
//}
//};

if (!empty($_SESSION['mail']) && $_POST['description']) {
    $usermail = $_SESSION['mail'];
    $iduser = $_SESSION['userid'];

// Escape user inputs for security
    $inputNv = $_POST['nvscolaire'];
    $inputMt = $_POST['matiere'];
    $inputCrs = $_POST['cours'];
    $inputMsg = $_POST['description'];
    echo $inputMt, $inputCrs, $inputMsg, $inputNv;
// die();
// Attempt insert query execution
    $sql = "INSERT INTO demande (description,idetudiantc,cours ) VALUES ( '" . $inputMsg . "' , '" . $iduser . "'  ,  '" . $inputCrs . "' , ";
    $res = mysqli_query($conn, $sql);

    if (!empty($res)) {
        header('Location: Student.php');

    } else {
        header('Location: Student.php');
        echo "<script>
            alert('erroor !!!');
            </script>";

    };

// Close connection
//mysqli_close($conn);

};


