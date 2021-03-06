<?php
function dateToFrench($date, $format)
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}
session_start();
if(!empty($_GET['lg'])){
    $_SESSION['lg'] = $_GET['lg'];
}
if(!empty($_SESSION['lg'])){
    
    require_once "". $_SESSION['lg'] .".php";
}else{
    require_once 'Fr.php';
}
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/main.css"/>
    <link href="src/img/icon.ico" rel="shortcut icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="normalize.css">
    <title><?php echo $pageTitle ;?></title>
</head>
<body>
<nav class=" bg-light">
<a class="navbar-brand d-flex justify-content-center aling-items-center" href="index.php">
         <div class="p-2" style="width: 6rem">
             
            <img src="src/img/logo.svg" class="d-inline-block align-top" style="width:5rem" alt="logo">
         </div>
         <div class='d-flex flex-column align-items-start justify-content-center'>
             
         <h2 class=" font-weight-bold text-dark mt-3 linko2">
            Sway3
        </h2>
        <p class='text-decoration-none text-dark pb-0 linko'>Vous accordez le temps pour réussir</p>
         </div>
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
            if (!empty($_SESSION['mailb'])) {
                $teacherMail = $_SESSION['mailb'];
                echo
                "
            <div class=' rounded-circle p-2'>
           
         </div>
    ";
            } else if (!empty($_SESSION['mail'])) {

                $usermail = $_SESSION['mail'];
                // afficher un message
                echo
                "
        <div class=' rounded-circle p-2'>

         </div>
   ";
            } else {
                echo "
                         <div>
            <p id=\"AR\"> <a class='text-dark text-decoration-none font-weight-bold ' href=\"index.php?lg=Ar\">العربية</a> <a class='text-dark text-decoration-none font-weight-bold mr-3' href=\"index.php?lg=Fr\">| Français</a></p>
            
           
        </div>
                <div class='header p-0'>
                <div class='header_content d-flex align-items-center'>
                        <p id=\"etud\" onclick=\"logingEtudiant()\" style='width:9em;'  class=\"btn  backOrange text-light rounded-pill mr-2 linko\"
                                data-target=\"#exampleModalCentertype=\"
                        >". $elements['btn1_navbar'] ."
                        </p>
                        <p onclick='reg()' style='width:9em;' class=\" btn rounded-pill backGreen text-light mr-2  linko\"
                        data-target=\"#exampleModalCentertype=\"
                        >". $elements['btn2_navbar'] ."
                </p>
            </div>
   
            </div>";
            };
            ?>

        </div>
        
    </div>
    </div>
</nav>






