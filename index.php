<?php
session_start();
require_once("connexion.php");
//include("inscription.php");


if (isset($_REQUEST['username'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['password'])) {
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
    $prenom = stripslashes($_REQUEST['prenom']);
    $prenom = mysqli_real_escape_string($conn, $prenom);
    // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    //requéte SQL + mot de passe crypté
    $query = "INSERT into `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `mailetudiant`, `passwordetudiant`) VALUES ('', '" . $username . "', '" . $prenom . "', '" . $email . "', '" . hash('sha256', $password) . "')";
    // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "
        <script>
        alert('Done');
</script>";
    }
} else {
    echo 'Tesst';
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
    <link rel="stylesheet" href="src/css/main.css"/>
    <script src="https://kit.fontawesome.com/8ac7442e81.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<!--  Navbar-->
<nav class="navbar navbar-light backGreen">
    <a class="navbar-brand" href="#">
        <img src="src/img/logo-02.png" width="180" class="d-inline-block align-top" alt="">
    </a>
    <a href="" class="navbar_Name">
        $studentName
        <img src="src/img/account.png" alt="">
    </a>
</nav>
<!--header-->
<div class="registerPopup popup hide">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div id="exit">
                <i class="fas fa-times"></i>
            </div>
            <div class="signup-content">
                <div class="signup-form">
                    <!--                    Inscriptio-->
                    <h2 class="form-title">Inscription</h2>
                    <form method="POST" class="register-form">
                        <!--                        name-->
                        <div class="form-group">
                            <label for="fname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="fname" placeholder="Votre Nom"/>
                        </div>
                        <div class="form-group">
                            <label for="lname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="prenom" id="lname" placeholder="Votre Prénom"/>
                        </div>
                        <!--                        Email-->
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Votre Email"/>
                        </div>
                        <!--                        Password-->
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Mot de passe"/>
                        </div>
                        <!--                        <div class="form-group">-->
                        <!--                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>-->
                        <!--                            <input type="password" name="re_pass" id="rcon_pass"-->
                        <!--                                   placeholder="Confirmez votre mot de passe"/>-->
                        <!--                        </div>-->

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit rounded-pill"
                                   value="Inscrivez-Vousss"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="src/img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Vous êtes déjà un member !</a>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="loginPopup popup hide">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="src/img/signin-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Se Connecter</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="your_name" id="your_email" placeholder="Votre Email"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Mot de passe"/>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Connexion"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



</div>
<div class="loginPopup hide">
    <div class="niveau">
        <div class="inscription-form2 hiding ">
            <div class="containre-form2">

                <h1>Niveau scolaire</h1>

                <div class="inswerinput">
                    <input type="radio" name="choix" id="2emebac">
                    <label for="2emebac" class="widthlabel">
                        <span>2 éme année baccalauréat</span> </label>
                </div>

                <div class="inswerinput ">
                    <input type="radio" name="choix" id="1erebac">
                    <label for="1erebac" class="bgclor2 widthlabel">
                        <span>1ere année baccalauréat</span> </label>
                </div>

                <div class="inswerinput ">
                    <input type="radio" name="choix" id="3emecollege">
                    <label for="3emecollege" class="bgclor3  widthlabel">
                        <span>3eme année collège </span> </label>
                </div>


                <div><a href="#">
                        <button id="btn-next">Next</button>
                    </a></div>

            </div>
        </div>
    </div>
</div>
<div class="loginPopup hide">
    <div class="spec">
        <div class="inscription-form3">
            <div class="containre-form2 d-flex flex-column aline-items-center">

                <h1>Choisi la filière</h1>

                <div class="inswerinput3">
                    <input type="radio" id="sciephyi" name="inpo">
                    <label for="sciephyi">
                        <span>Sciences phyisique</span>
                    </label>
                </div>

                <div class="inswerinput3">
                    <input type="radio" id="scievie" name="inpo">
                    <label for="scievie">
                        <span>Sciences de vie et terre</span>
                    </label>
                </div>

                <div class="inswerinput3">
                    <input type="radio" id="sciemathA" name="inpo">
                    <label for="sciemathA">
                        <span>Sciences mathématiques A  </span>
                    </label>
                </div>

                <div class="inswerinput3">
                    <input type="radio" id="sciemathB" name="inpo">
                    <label for="sciemathB">
                        <span>Sciences mathématiques B  </span>
                    </label>
                </div>

                <div class="inswerinput3">
                    <input type="radio" id="scieagron" name="inpo">
                    <label for="scieagron">
                        <span>Sciences agronomiques  </span>
                    </label>
                </div>


                <div><a href="#">
                        <button id="btn-next">Next</button>
                    </a></div>

            </div>
        </div>
    </div>
</div>
<main>
    <section class="header backGreen">
        <div class="container-fluid">
            <div class="header_content">
                <div class="left d-flex flex-column justify-content-center">
                    <h1>Les bons Profs font des bons élèves </h1>
                    <p>Vous trouvez des difficultés au niveau des cours ?
                        nous avons la solution ! Avec les cours en ligne de '???',
                        vous pouvez avoir un professeur qui peut vous
                        assurer des cours de soutien à distance.</p>
                    <button id="login" class="btn btn-header" data-toggle="modal" data-target="#exampleModalCentertype="
                    >Connectez-vous
                    </button>
                </div>
                <div class="">

                    <img class="header_img" src="src/img/header.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="header backOrange">
        <div class="container-fluid">
            <div class="header_content">
                <div class="">

                    <img class="header_img" src="src/img/sec2.png" alt="">
                </div>
                <div class="left d-flex flex-column justify-content-center">
                    <h1>Comment ?</h1>
                    <p>C’est simple, inscrivez-vous en remplissant ce
                        formulaire d’inscription, poster la problématique
                        et réserver vos places.</p>
                    <button id="register" class="btn btn-header btnG" type="button">Inscrivez-vous</button>
                </div>
            </div>
        </div>
    </section>
    <section class="header backRed">
        <div class="container-fluid">
            <div class="header_content">
                <div class="left d-flex flex-column justify-content-center">
                    <h1>L'enseignement à distance nous rapproche</h1>
                    <p>vous avez raté le cour, ne paniquez pas on a pensé à
                        enregistrer les cours en vidéo.</p>
                    <button id="" class="btnG btn btn-header" type="button">Voir des vidéos</button>
                </div>
                <div class="">

                    <img class="header_img" src="src/img/thirdimg.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<!--Footer-->


<!--  Bootstrap JS-->
<script crossorigin="anonymous"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="src/js/general.js"></script>
</body>
</html>
