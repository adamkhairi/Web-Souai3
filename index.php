<?php
require("connexion.php");
$pageTitle = "Bienvenue dans Sway3";
include("navbar.php");
if (!empty($_GET['msg'])) {

    if ($_GET['msg'] == 'inscriptiondone') {
//        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
        echo "

<div class=\"alert alert-success m-0 alert-dismissible fade show\" role=\"alert\">
  <strong>Bienvenue !</strong> Votre inscription a été effectué avec succès.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
        ";
    } elseif ($_GET['msg'] == 'mailexist') {
        echo "

        <div class=\"alert alert-danger text-center m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>Ops !</strong> Cette email déjà exist
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    } elseif ($_GET['msg'] == 'invalidInfos') {
        echo "
        <div class=\"alert text-center alert-danger m-0 alert-dismissible fade show \" role=\"alert\">
  <strong>Ops !</strong> Verifiez vos Informations .
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
        ";
    } elseif ($_GET['msg'] == 'invalidPassword') {
        echo "

        <div class=\"alert alert-danger text-center m-0 alert-dismissible fade show\" role=\"alert\">
          <strong>Ops !</strong> Veuillez verifier votre Mot de Pass
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }

}


?>
<!--header-->
<div id="insc" class="registerPopup popup hide">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div id="exit" onclick="hidelist()">
                <i class="fas fa-times"></i>
            </div>
            <div class="signup-content">
                <div class="signup-form">
                    <!--                    Inscriptio-->
                    <h2 class="form-title"><?php echo $elements['btn_3'] ?></h2>
                    <form method="POST" action="inscription.php" class="register-form">
                        <!--                        name-->
                        <div class="form-group">
                            <label for="fname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="fname" placeholder="<?php echo $elements['name'] ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="lname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="prenom" id="lname" placeholder="<?php echo $elements['name2'] ?>"/>
                        </div>
                        <!--                        Email-->
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="<?php echo $elements['mail'] ?>"/>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <select class="custom-select" name="nScolaire" id="nScolaire"
                                        onchange="showfillier(this.value)">
                                    <option selected><?php echo $elements['niveau'] ?></option>
                                    <?php
                                    $sql = "SELECT * FROM `niveau`";
                                    $send = mysqli_query($conn, $sql);

                                    $rows = mysqli_fetch_all($send, MYSQLI_ASSOC);

                                    foreach ($rows as $row) {

                                        echo '<option value=' . $row['idniveau'] . '> ' . $row['niveau'] . '</option>';

                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" id="filiere">
                                <select class="custom-select" name="filier" id="filier">
                                    <option value="" selected disabled><?php echo $elements['filiere'] ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="<?php echo $elements['mode'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="pass2"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password2" id="pass" placeholder="<?php echo $elements['mode2'] ?>"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit rounded-pill"
                                   value="<?php echo $elements['btn_3'] ?>"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="src/img/signup-image.jpg" alt="sing up image"></figure>
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
                    <a href="forget_the_password.php" id="changepass" class="signup-image-link"><?php echo $elements['passO'] ?></a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title"><?php echo $elements['btn'] ?></h2>
                    <form action="login.php" class="register-form" id="login-form" method="POST">
                        <div class="form-group">
                            <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class="intLogin" type="email" name="your_email" id="your_email"
                                   placeholder="<?php echo $elements['mail'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input class="intLogin" type="password" name="your_pass" id="your_pass"
                                   placeholder="<?php echo $elements['mode'] ?>"/>
                        </div>

                        <input type="text" name="userType" hidden id="userType" value="">

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="<?php echo $elements['btn'] ?>"/>
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
<main>
    <section class="header section backGreen ">
        <div class="container-fluid">
            <div class="header_content">
                <div class="left d-flex flex-column justify-content-center align-items-center">
                    <div data-aos="flip-right" class="w-75">

                        <h1 class=" animate__slideInLeft"><?php echo $elements['title_1'] ?></h1>
                        <p class="animate__slideInLeft"><?php echo $elements['para_1'] ?></p>
                    </div>
                    <?php 
                    if(empty($_SESSION['mail']) && empty($_SESSION['mailb'])){
                        echo '
                        
                        <div class="btn_for_login ">
    
    
                            <button id="etud" onclick="logingEtudiant()" class="btn btn-header"
                                    data-target="#exampleModalCentertype="
                            >'.  $elements['btn_1'] .'
                            </button>
    
                            <button id="prof" onclick="logingTeacher()" class="btn btn-header backro"
                                    data-target="#exampleModalCentertype="
                            >'. $elements['btn_2'] .'
                            </button>
                        </div>
                        ';

                    }
                    ?>
                </div>
                <div class="" data-aos="zoom-in-up">

                    <img class="header_img" src="src/img/undraw_exams_g4ow.svg" alt="img">
                </div>
            </div>
    </section>
    <section class="header section backOrange">
        <div class="container-fluid">
            <div class="header_content">
                <div class="" data-aos="zoom-in-up">

                    <img class="header_img" src="src/img/undraw_researching_22gp.svg" alt="">
                </div>
                <div class=" left d-flex flex-column justify-content-center align-items-center" data-aos="flip-left">

                    <div class="w-100 p-2 ml-2 d-flex flex-column justify-content-center align-items-center">

                        <h1 class="left"><?php echo $elements['title_2'] ?></h1>
                        <p class="left"><?php echo $elements['para_2'] ?>.</p>
                        <?php 
                        if(empty($_SESSION['mail']) && empty($_SESSION['mailb'])){
                            echo '
                            
                            <button id="register" class="btn backGreen btn-header" stye="background-color:#10375ce0 ;" type="button">' .$elements['btn_3'] .'</button>
                            ';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!--Footer-->
<?php
include "footer.php" ?>

<script>
	// Popups register
	const registerBtn = document.querySelector('#register');
	const registerPop = document.querySelector('.registerPopup');

	function reg(){
		$('.registerPopup').toggle('hide');

	}
	registerBtn.addEventListener('click', () => {
		$('.registerPopup').toggle('hide');
	});
	const loginBtn = document.querySelector('#login');
	const loginPopup = document.querySelector('.popup');

	let teacher = document.getElementById("teacher");
	let prof = document.getElementById("prof");
	let student;
	student = document.getElementById("student");
	let exit1 = document.querySelector('#exit1');
	exit1.addEventListener('click', function () {
		student.classList.add('hide');
	});

	// ********************

	function showfillier(str) {
		if (str == "") {
			document.getElementById("filier").innerHTML = "";

		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("filiere").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getfillier.php?q=" + str, true);
			xmlhttp.send();
		}
	}

	function hidelist() {
		$('#insc').toggle('hide');
	}




</script>
<script src="src/js/collectInfo.js"></script>

