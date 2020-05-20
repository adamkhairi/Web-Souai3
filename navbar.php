<?php
session_start();
//require("connexion.php");
//$user = $_SESSION['your_email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--    Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/css/main.css"/>
    <title>Document</title>
</head>
<body>
<nav class="sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="src/img/logo-02.png" width="150" class="d-inline-block align-top" alt="">
    </a>

    <div>

        <div class="p-2">
            <div class="p-2 ">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="p-2 ">
                <i class="fas fa-bell"></i>
            </div>
            <div class="p-2 ">
                <i class="far fa-bell"></i>
            </div>


        </div>
        <div class="p-2">

            <!--            -->
            <?php

            if (!empty($_SESSION['type'])) {
//            session_start();
                $teacherMail = $_SESSION['mailb'];

                echo
                "
    <a class=\"inscr\" href=\"Student.php\">
        <div>
               <a href=\"logout.php\">
                     <button class='btn btn-danger rounded-pill ml-4'>Déconnecté</button>
                </a>

        </div>
    </a>";
            } else if (!empty($_SESSION['mail'])) {

                $usermail = $_SESSION['mail'];
                // afficher un message
                echo
                "
    <a class=\"inscr\" href=\"Student.php\">
        <div>
        
               <a href=\"logout.php\">
                  <button class='btn btn-danger rounded-pill'>Déconnecté</button>
                </a>

         </div>
    </a>";
            } else {
                echo "
                <div class='header p-0'>
                <div class='header_content'>

                   
                        <button id=\"etud\" onclick=\"logingEtudiant()\" class=\"btn rounded-pill backOrange  \"
                                data-target=\"#exampleModalCentertype=\"
                        >Se connecter
                        </button>
           </div>
           </div>
           

                ";
            };

            ?>
        </div>
    </div>

</nav>




