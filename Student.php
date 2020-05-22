<?php
require("connexion.php");
//session_start();
include "navbar.php";
include "notification.php";
?>
<div class="vertical-nav pt-lg-5  bg-light" id="sidebar">
    <div class="mb-4  menu-head text-center">
        <i class="far fa-user img-thumbnail shadow-sm rounded-circle p-3"
           style="font-size: 40px; color: #00BFA6"></i>
        <div class="media d-flex align-items-center ">


            <!--            <img-->
            <!--                    src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..."-->
            <!--                    width="65" class="">-->
            <div class="media-body">
                <h3 class=""><?php
                    if (!empty($_SESSION['mail'])) {
                        echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']);
                    }
                    ?>
                </h3>
                <p class="font-weight-light text-muted mb-0">Etudiant</p>

            </div>


        </div>
        <div class="mt-4">

            <h6 class='text-center'>
                <?php
                if (!empty($_SESSION['mail'])) {
                    echo("  " . $_SESSION['mail']);
                }
                ?>
            </h6>

        </div>
        <!--        <div class="text-center">-->

        <!--        </div>-->
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

    </div>
    <!--   Links Of each section -->

    <ul class="nav flex-column  mt-3 text-center">
        <li class="nav-item" id="prods">
            <a class="nav-link text-dark  mt-4 " href="index.php">
                Accueil
            </a>
        </li>
        <li class="nav-item" id="cats">
            <a class="nav-link text-dark mt-4  " href="#">
                Student
            </a>
        </li>
        <li class="nav-item mt-3">
            <a href="#">
                <button class='btn btn-danger rounded-pill'>Voir les videos</button>
            </a>
        </li>


    </ul>
</div>
<div class="page-content pl-4" id="content">
    <!-- Toggle button -->
    <button class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 m-4" id="sidebarCollapse" type="button">
        <small class="text-uppercase font-weight-bold" id="togl"> <<< </small>
    </button>

    <div class="row  w-100 flex-nowrap justify-content-around m-auto  ccc">
        <?php
        $idetudiant = $_SESSION['userid'];
        $sql = "SELECT d.idetudiantc, d.cours, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM demande d INNER JOIN theevanets e ON d.cours = e.coursID INNER JOIN 
                    benevole b ON e.ProfID = b.idbenevole INNER JOIN cours c ON c.idcours = e.coursID WHERE d.idetudiantc = " . $idetudiant . " AND d.reponce = '' ;";
        $exec_requete = mysqli_query($conn, $sql);
        //            var_dump($exec_requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $courses = array();
        $events = array();


        //                    print_r($reponse);
        //                    die();
        if ($exec_requete = mysqli_query($conn, $sql)) {
            while ($reponse = mysqli_fetch_array($exec_requete)) {

                array_push($courses, $reponse['cours']);
                array_push($events, $reponse['eventID']);

                echo "
            <form name='reponce' action=\"answer.php\" method='post' class=\"width ml-3\">
            <div class=\"modal-dialog width shdow\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header backOrange\">
                        <h5 class=\"modal-title text-center \">Évènement</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body pl-4\">
                        <h5>Cours : " . $reponse['nomcours'] . "</h5>
                        <h6>Time : " . $reponse['hours'] . "</h6>
                        <h6>Date : " . $reponse['theDate'] . "</h6>
                        <div class=\"row ml-2\">

                            <p>By</p>
                            <h5 class=\"ml-4\">" . $reponse['nombenevole'] . "  " . $reponse['prenombenevole'] . "</h5>
                        </div>
                    </div>
                    <div class=\"modal-footer text-center d-flex justify-content-around\">
                        <p>Intéressé(e) ?</p>
                        <button type=\"submit\" id='ansoui' class=\"btn m-0 w-25 rounded-pill backGreen\">Oui</button>
                        <button type=\"submit\" id='ansnon' class=\"btn m-0 w-25 rounded-pill backRed\"> Non</button>
                               <input type='text' name='getans' hidden value='' id='getans'>
                    </div>
                </div>
            </div>
        </form>
            ";

            }
        }
        $_SESSION['courses'] = $courses;
        $_SESSION['events'] = $events;
        print_r($_SESSION['courses']);
        ?>

        <!--        <div class="d-flex " role="dialog">-->
    </div>
    <div class="">
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
                                    <option value="13">Geométrie de l’espace Produit scalaire et applications
                                    </option>
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
    <!-- Demo content -->

</div>

<?php
include 'footer.php';
?>
<script src="src/js/general.js"></script>
<script src="src/js/student.js"></script>

<script>
	let oui = document.getElementById('ansoui');
	let non = document.getElementById('ansnon');
	let getans = document.getElementById('getans');

	oui.onclick = () => {
		getans.value = 'oui';
		console.log(getans.value)
	}
	non.onclick = () => {
		getans.value = 'non';
		console.log(getans.value)

	}
	// let slide = document.getElementById('sidebarCollapse'),
	// 	slideBar = document.getElementById('sidebar'),
	// 	content = document.getElementById('content');
	//
	// slide.addEventListener('click', function () {
	// 	slideBar.classList.toggle('active');
	// 	content.classList.toggle('active');
	//
	// })


</script>
