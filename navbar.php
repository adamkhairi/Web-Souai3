<?php
//session_start()
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
<nav>
    <a class="navbar-brand" href="logout.php">
        <img src="src/img/logo-02.png" width="150" class="d-inline-block align-top" alt="">
    </a>

        <div>

            <!--            -->
            <?php
            if (!empty($_SESSION['mail'])) {
                $usermail = $_SESSION['mail'];
                // afficher un message
                echo
                "
    <a class=\"inscr\" href=\"Student.php\">
<div class='text-right '>
                    <h4 class='mt-2'>Your E-mail :</h4>
                    <h4 class='mt-2 ml-4'>$usermail</h4>
                </div>
                </a>";
            } else {
                echo "
<div class='header p-0'>
<div class='header_content'>

             <div class=\"left d-flex flex-row justify-content-center\">
                   
                        <button id=\"etud\" onclick=\"logingEtudiant()\" class=\"btn small btn-header\"
                                data-target=\"#exampleModalCentertype=\"
                        >Connectez-vous (Etudient)
                        </button>
                    </div>
                 </div>
                  </div>

                ";
            }
            ?>
        </div>
</nav>




