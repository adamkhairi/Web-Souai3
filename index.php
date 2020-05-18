<?php
//session_start();
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
                            <!--                            <label for="nScolaire"><i class="zmdi zmdi-account material-icons-name"></i></label>-->
                            <!--                            <input type="text" name="nScolaire" id="nScolaire" placeholder="niveau scolaire"/>-->
                            <div class="input-group mb-3">
                                <select class="custom-select" name="nScolaire" id="nScolaire">
                                    <option selected>Niveau Scolaire</option>
                                    <option value="2">Deuxième année Bac</option>
                                    <option value="1">Premiere année Bac</option>
                                </select>
                            </div>

                            <?php

//                            $levelid = $_SESSION['nvScolaire'];
//
//                            $querylevel ="SELECT * FROM niveau where idniveau = '" . $levelid . "' ";
//
//                            $exec_requete = mysqli_query($conn, $querylevel);
//                            $reponse = mysqli_fetch_array($exec_requete);
//                            $levelname= $reponse['niveau'];
//
//
//                            ?>






                            <div class="form-group">
                                <select class="custom-select" name="filier" id="filier">
                                    <option selected>Filière</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <!--                        <div class="form-group">-->
                        <!--                            <label for="filier"><i class="zmdi zmdi-account material-icons-name"></i></label>-->
                        <!--                            <input type="text" name="filier" id="filier" placeholder="Filier"/>-->
                        <!--                        </div>-->
                        <!--                        Password-->

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Mot de passe"/>
                        </div>
                        <div class="form-group">
                            <label for="pass2"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password2" id="pass" placeholder="Confirmer Mot de passe"/>
                        </div>
                        <?php
//                        if(isset($_REQUEST['password']) &&  ){
//
//                        }

                        ?>



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

<div id="student" class="loginPopup popup hide">

    <!-- Sing in  Form for student -->
    <section class="sign-in">
        <div class="container">
            <div id="exit1">
                <i class="fas fa-times"></i>
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="src/img/signin-image.jpg" alt="sing up image"></figure>
                    <a href="forget_the_password.php" class="signup-image-link">Mot de passe Oublié ?</a>

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

                        <input type="text" name="userType" hidden id="userType" value="">
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Connexion"/>
                        </div>
                        <?php
                        if (isset($_GET['erreur'])) {
                            $err = $_GET['erreur'];
                            if ($err == 1 || $err == 2)
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

<div id="teacher" class="loginPopup popup hide">

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



<main>
    <section class="header backGreen">
        <div class="container-fluid">
            <div class="header_content">
                <div class="left d-flex flex-column justify-content-center">
                    <h1>Les bons Profs font des bons élèves </h1>
                    <p>Vous trouvez des difficultés au niveau des cours ?
                        nous avons la solution ! Avec les cours en ligne de <span>Sway3</span>,
                        vous pouvez avoir un professeur qui peut vous
                        assurer des cours de soutien à distance.</p>
                    <div class="btn_for_login">

                        <button id="etud" onclick="logingEtudiant()" class="btn btn-header"
                                data-target="#exampleModalCentertype="
                        >Connectez-vous (Etudient)
                        </button>

                        <button id="prof" onclick="logingTeacher()" class="btn btn-header"
                                data-target="#exampleModalCentertype="
                        >Connectez-vous (Professeur)
                        </button>
                    </div>
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
<?php include "notification.php"; ?>
<!--Footer-->
<?php
include "footer.php" ?>
<script src="src/js/collectInfo.js"></script>

<script>
	// Popups register
	const registerBtn = document.querySelector('#register');
	const registerPop = document.querySelector('.registerPopup');
	registerBtn.addEventListener('click', () => {
		registerPop.classList.remove('hide');
	})

	let student;
	let exit = document.querySelector('#exit');

	exit.addEventListener('click', function () {
		loginPopup.classList.add('hide');
		registerPop.classList.add('hide');
	});
	student = document.getElementById("student");
	let exit1 = document.querySelector('#exit1');
	exit1.addEventListener('click', function () {
		student.classList.add('hide');
		// registerPop.classList.add('hide');
	});
	let exit2 = document.querySelector('#exit2');
	// for (let exitKey in exit) {

	exit2.addEventListener('click', function () {
		teacher.classList.add('hide');
		// registerPop.classList.add('hide');
	});

	// Popups LOGIN
	const loginBtn = document.querySelector('#login');
	const loginPopup = document.querySelector('.popup');

	let teacher = document.getElementById("teacher");
	let prof = document.getElementById("prof");


</script>
