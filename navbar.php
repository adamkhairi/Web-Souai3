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
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="src/css/main.css"/>
    <link href="src/img/icon.ico" rel="shortcut icon"/>

    <title><?php echo $pageTitle ;?></title>
</head>
<body>
<nav class="sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="src/img/logo-02.png"  class="d-inline-block align-top" alt="">
    </a>

    <div>

        <div class="p-2">
            <?php
            if (!empty($_SESSION['mail'])) {
                echo "
              <div class=\"rounded-circle p-2 \">
                <a href=\"Student.php\">
                <i class=\"fas iconProfile fa-user-circle\"></i>
                </a>
              </div>

                ";
            }else
            if (!empty($_SESSION['mailb'])){


                echo "
                <div class=\"rounded-circle p-2 \">
                    <a href=\"Teacher.php\">
                        <i class=\"fas iconProfile fa-user-circle\"></i>
                    </a>
                </div>
";
                        }


            ?>


        </div>
        <div class="p-2">

            <!--            -->
            <?php

            if (!empty($_SESSION['type'])) {
//            session_start();
                $teacherMail = $_SESSION['mailb'];

                echo
                "
    
        <div class=' rounded-circle p-2'>
        
               <a href=\"logout.php\">
            <i class=\"fas deleteSec fa-sign-out-alt\"></i>
                  
                </a>

         </div>
    ";
            } else if (!empty($_SESSION['mail'])) {

                $usermail = $_SESSION['mail'];
                // afficher un message
                echo
                "
    
        <div class=' rounded-circle p-2'>
        
               <a href=\"logout.php\">
            <i class=\"fas deleteSec fa-sign-out-alt\"></i>
                  
                </a>

         </div>
   ";
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




