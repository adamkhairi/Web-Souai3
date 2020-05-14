<?php
 session_start();
require("connexion.php");
include("navbar.php");

?>

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
                    <form method="POST" action="inscription.php" class="register-form">
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

                        <div class="form-group">
                            <label for="nScolaire"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="nScolaire" id="nScolaire" placeholder="niveau scolaire"/>
                        </div>

                        <div class="form-group">
                            <label for="filier"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="filier" id="filier" placeholder="Filier"/>
                        </div>
                        <!--                        Password-->
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Mot de passe"/>
                        </div>


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

<div id="student"  class="loginPopup popup hide">

    <!-- Sing in  Form for student -->
    <section class="sign-in">
        <div class="container">
        <div id="exit1">
                <i class="fas fa-times"></i>
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="src/img/signin-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Se Connecter</h2>
                    <form method="POST" action="login.php" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="your_email" id="your_email" placeholder="Votre Email"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Mot de passe"/>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Connexion"/>
                        </div>
                        <?php 
                              if(isset($_GET['erreur'])){
                                $err = $_GET['erreur'];
                                if($err==1 || $err==2)
                                    echo "<script>
                                    alert('Utilisateur ou mot de passe incorrect')</script>";
                            }
            
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="teacher"  class="loginPopup popup hide">

    <!-- Sing in  Form for teacher -->
    <section class="sign-in">
        <div class="container">
        <div id="exit2">
                <i class="fas fa-times"></i>
            </div>
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
                    <button id="etud" onclick="logingEtudiant()" class="btn btn-header" data-toggle="modal" data-target="#exampleModalCentertype="
                    >Connectez-vous (Etudient)
                    </button>
                    <button id="prof" class="btn btn-header" data-toggle="modal" data-target="#exampleModalCentertype="
                    >Connectez-vous (Profiseur)
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
<?php
include "footer.php"?>