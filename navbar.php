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
<html lang="ar">
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
    <title><?php echo $pageTitle ;?></title>
</head>
<body>
<nav class="sticky-top">
<a class="navbar-brand ml-1 d-flex aling-items-center" href="index.php">
         <div>
        <img src="src/img/logo.svg" style="height: 5em; width:5em;"  class="d-inline-block align-top w-100" alt="logo">
             
         </div>
         <div>
             
         <h1 class=" font-weight-bold text-white mt-2">
            Sway3
        </h1>
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
                <div class='header p-0'>
                <div class='header_content d-flex align-items-center'>
                        <p id=\"etud\" onclick=\"logingEtudiant()\"  class=\"btn linko\"
                                data-target=\"#exampleModalCentertype=\"
                        >". $elements['btn_1'] ."
                        </p>
                        <p onclick='reg()' class=\"btn linko\"
                        data-target=\"#exampleModalCentertype=\"
                        >". $elements['btn_3'] ."
                </p>
            </div>
            <div>
            <p id=\"AR\"> <a class='text-dark text-decoration-none font-weight-bold' href=\"index.php?lg=Ar\">العربية</a> <a class='text-dark text-decoration-none font-weight-bold' href=\"index.php?lg=Fr\">| Français</a></p>
           
        </div>
            </div>";
            };
            ?>

        </div>
        
    </div>
    </div>
</nav>






