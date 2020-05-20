<?php
require("connexion.php");
//session_start();
include "navbar.php";
include "notification.php";
?>
<div class="vertical-nav pt-lg-5 " id="sidebar">

    <div class="py-4 px-3 mb-4 bg-light menu-head">
        <div class="media d-flex align-items-center"><img
                    src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..."
                    width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0"><?php
                    if (!empty($_SESSION['mail'])) {
                        echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']);
                    }
                    ?>
                </h4>
                <p class="font-weight-light text-muted mb-0">Web developer</p>
            </div>


        </div>
    </div>

    <div class="w-50 ml-auto p-2 mr-auto mb-5">
        <!--        <div>-->
        <!---->
        <!--            --><?php
        //            if (!empty($_SESSION['mail'])) {
        //                $usermail = $_SESSION['mail'];
        //                // afficher un message
        //                echo
        //                    "
        //                 <h5 class=\"font-weight-bold bBottom mr-4\">Niveau scolaire : </h5>
        //
        //                <h4> " . $_SESSION['nvScolaire'] . "</h4>
        //
        //                ";
        //            } else {
        //                echo "
        //                      <h5 class=\"font-weight-bold bBottom mr-4\">Niveau scolaire : </h5>
        //                <h4>le Niveau scolaire</h4>
        //                      ";
        //            }
        //            ?>
        <!---->
        <!--        </div>-->
        <div class="text-center">
            <h5 class='font-weight-bold bBottom'>E-mail : </h5>
            <h4 class=''>
                <?php
                if (!empty($_SESSION['mail'])) {
                    echo(' ' . $_SESSION['mail']);
                }
                ?></h4>
        </div>
    </div>
    <!--   Links Of each section -->

    <ul class="nav flex-column bg-light mb-0">
        <li class="nav-item" id="prods">
            <a class="nav-link text-dark  mb-4 " href="#">
                Products
            </a>
        </li>
        <li class="nav-item" id="cats">
            <a class="nav-link text-dark mb-4  " href="#">
                Categories
            </a>
        </li>
        <li class="nav-item" id="coops">
            <a class="nav-link text-dark mb-4  " href="#">
                Cooperatives
            </a>
        </li>
    </ul>
</div>
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 mb-4" id="sidebarCollapse" type="button">
        <small class="text-uppercase font-weight-bold" id="togl"> <<< </small>
    </button>

    <section class="welcome">
        <h1 class="card-title text-center" id="admin-title">Welcome to admin panel</h1>
    </section>


    <!-- Demo content -->
    <div class="Post_problem">
        <form action="addQst.php" method="post">
            <h2 class="historique d-inline-block">Poster un problème:</h2>
            <div class="post_pro">
                <div class="find_help">

                    <div>
                        <select name="nvscolaire" id="nvscolaire" onclick="School_levels()">
                            <option value="2">2eme année Bac</option>
                            <option value="1">1er année Bac</option>
                        </select>
                        <input type="text" hidden value="" name="nv" id="niveauS">
                    </div>

                    <div>
                        <!-- Matiers -->
                        <select name="matiere" id="matiere">
                            <option value="1">Mathématique</option>
                            <option value="2">Sciences de la vie et de la Terre</option>
                            <!--                            <option value="3">Philosophique</option>-->
                            <option value="3">Physique Chimie</option>
                            <!--                            <option value="5">Anglais</option>-->
                        </select>
                        <input type="text" hidden value="" name="mt" id="matieres">

                    </div>
                    <div>

                        <select class="hour2" name="cours" id="cours">
                            <optgroup label="Analyse">
                                <option value="1">Continuité d'une fonction numérique</option>
                                <option value="2">Dérivabilité d'une fonction, fonctions primitives</option>
                                <option value="3">Etude des fonctions</option>
                                <option value="4">Fonctions logarithmiques</option>
                                <option value="5">Calcul intégral</option>
                                <option value="7">Equations différentielles</option>
                                <option value="8">Les suites numériques</option>
                                <option value="9">Fonctions exponentielles</option>
                            </optgroup>
                            <optgroup label="Algèbre">
                                <option value="10">Les nombres complexes 1</option>
                                <option value="11">Les nombres complexes 2</option>
                                <option value="12">Calcul des Probabilités</option>
                                <option value="13">Geométrie de l’espace Produit scalaire et applications</option>
                                <option value="14">Fonctions exponentielles</option>
                            </optgroup>
                        </select>

                        <input type="text" hidden value="" name="crs" id="courses">

                    </div>
                </div>
                <div class="text_message form-group">
                    <textarea name="description" id="message" cols="30" rows="10"
                              placeholder="Votre message"></textarea>
                </div>
            </div>
            <div>
                <button class="btn_post" type="submit">Poster</button>
            </div>
        </form>
    </div>


    <!--    <div class="left menuStudnt">-->
    <!---->
    <!--        <nav class="navbar navbar-light bg-light">-->
    <!--            <ul class="navbar-nav">-->
    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link active" href="#">Home</a>-->
    <!--                </li>-->
    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="#">Tutorials</a>-->
    <!--                </li>-->
    <!--                <li class="nav-item">-->
    <!--                    <a class="nav-link" href="#">Articles</a>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--       </nav>-->
    <!---->
    <!--    </div>-->


    <div class="containers">
        <h2 class="historique d-inline-block bBottom">Historique:</h2>
        <div class="d-flex flex-wrap justify-content-around m-2">


            <?php
            //            $sql = "SELECT * FROM demande where
            //               idetudiantc = '" . $_SESSION['userid'] . "'";
            //
            $sql = "SELECT * FROM demande where
               idetudiantc = '" . $_SESSION['userid'] . "'";
            $result = mysqli_query($conn, $sql);

            //$reponse = mysqli_fetch_assoc($exec_requete);
            //                var_dump($_SESSION['userid']);
            if (!empty($result)) {
//                $row = mysqli_fetch_array($result);
                $demandes = [];
                $fname = $_SESSION['firstName'];
                $lname = $_SESSION['lastName'];

                while ($row = mysqli_fetch_array($result)) {
//    echo ($row[1]);  // description
                    array_push($demandes, $row[1]);

////    echo ($row[3]);  // cours
                    $requet = "SELECT * FROM cours where
                    idcours = '" . $row[3] . "'";

                    $results = mysqli_query($conn, $requet);
                    $row1 = mysqli_fetch_array($results);
//                    $cours = [];

                    echo "
                        <div class=\"card mb-4\" style=\"width: 18rem;\">
                           <div class=\"card-body\">
                            <h5 class=\"card-title\">$row1[1]</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\"> $lname  $fname</h6>
                            <p class=\"card-text\">$row[1]</p>
                          </div>
                        </div>
                         ";
                }
            } else {
                echo "<h5 class=\"activité\">aucune activité</h5>";
            }; ?>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
<script src="src/js/general.js"></script>
<script src="src/js/student.js"></script>

<script>

	// let slide = document.getElementById('sidebarCollapse'),
	// 	slideBar = document.getElementById('sidebar'),
	// 	content = document.getElementById('content');
	//
	// slide.addEventListener('click', function () {
	// 	slideBar.classList.toggle('active');
	// 	content.classList.toggle('active');
	//
	// })
	let toggleBtn;
	toggleBtn = () => {
		let x = document.getElementById("togl");
		if (x.textContent === ">>>") {
			x.textContent = "<<<";
		} else {
			x.textContent = ">>>";
		}
	};

	$(function () {
		// Sidebar toggle behavior
		$('#sidebarCollapse').on('click', function () {
			toggleBtn();
			$('#sidebar, #content').toggleClass('active');
		});
	});

</script>
