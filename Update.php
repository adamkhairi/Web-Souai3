<?php 
require("connexion.php");
include("navbar.php");
if (!empty($_POST)){
    if (isset($_REQUEST['username'], $_REQUEST['prenom'], $_REQUEST['nScolaire'], $_REQUEST['filier'],$_REQUEST['password'], $_REQUEST['password2']) && $_REQUEST['password'] == $_REQUEST['password2']) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $prenom = stripslashes($_REQUEST['prenom']);
        $prenom = mysqli_real_escape_string($conn, $prenom);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $nScolaire = stripslashes($_REQUEST['nScolaire']);
        $nScolaire = mysqli_real_escape_string($conn, $nScolaire);
        // récupérer le prenom et supprimer les antislashes ajoutés par le formulaire
        $filier = stripslashes($_REQUEST['filier']);
        $filier = mysqli_real_escape_string($conn, $filier);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $sql = "UPDATE etudiant SET nometudiant= ". $username . ",prenometudiant = ". $prenom .",niveauscolaire= ". $nScolaire .",filiere = ". $filier .",passwordetudiant = ". hash('sha256', $password) ." WHERE mailetudiant = ". $_SESSION['mail'] ." ";
        $run = mysqli_query($conn, $sql);
    
        if($run){

            header('location:Student.php?m=done');
        }else{
            print_r($run);
                die();
        }
    }else{
        header('location:Update.php?m=error');
    }
}
if(!empty($_GET['m'])){
    if($_GET['m'] = 'error'){

        echo "
        <div class=\"alert text-center alert-danger m-0 alert-dismissible fade show \" role=\"alert\">
    <strong>Ops !</strong> Verifiez vos Informations .
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    </div>
        ";
    }
}
?>

<div>
<div>
<a href="Student.php" class="text-decoration-none bg-dark"><h2 ><i class="fas fa-arrow-left ml-5 mt-4 font-weight-bold" style="font-size: 1em;"></i></h2></a>
</div>
    <section class="signup">
            <div class="container shadow-sm mt-4 ">
            <div class="signup-content">
                <div class="signup-form">
                    <!--                    Inscriptio-->
                    <h2 class="form-title">Modifier le Profil</h2>
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
                            <div class="input-group mb-3">
                                <select class="custom-select" name="nScolaire" id="nScolaire"
                                        onchange="showfillier(this.value)">
                                    <option selected>Niveau Scolaire</option>
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
                                    <option value="" selected disabled> Choisir une filière</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Mot de passe"/>
                        </div>
                        <div class="form-group">
                            <label for="pass2"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password2" id="pass" placeholder="Confirmer Mot de passe"/>
                        </div>
                        <div class="form-group form-button d-flex justify-centant-center">
                            <input type="submit" name="signup" id="signup" class="form-submit  rounded-pill"
                                   value="Modifier"/>
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
<script>
	function showfillier(str) {
		if (str == "") {
			document.getElementById("filier").innerHTML = "";
			return;
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
</script>
<?php include 'footer.php'; ?>