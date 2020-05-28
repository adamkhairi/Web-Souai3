<?php
include("connexion.php");
$pageTitle = "Bénévole Profile";
include('navbar.php');

//session_start();
?>
<div class="vertical-nav pt-lg-5" id="sidebar">
    <div class=" mb-4  menu-head text-center d-flex flex-column align-items-center">
        <i class="far fa-user img-thumbnail shadow-sm rounded-circle p-3"
           style="font-size: 40px; color: #00BFA6"></i>
        <div class="media d-flex align-items-center ">


            <!--            <img-->
            <!--                    src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..."-->
            <!--                    width="65" class="">-->
            <div class="media-body">
                <h3 class="">
                    <?php
                    if (!empty($_SESSION['mailb'])) {
                        echo($_SESSION['teacherFname'] . ' ' . $_SESSION['teacherLname']);
                    };
                    ?>
                </h3>

                <p class="font-weight-light text-muted mb-0">Bénévole</p>
            </div>
        </div>
        <div class="mt-4">

            <h6 class='text-center'>
                <?php
                if (!empty($_SESSION['mailb'])) {
                    echo(' ' . $_SESSION['mailb']);
                };
                ?>
            </h6>
        </div>
        <!--        <div class="text-center">-->

        <!--        </div>-->

        <div class="p-2  mb-5">
            <?php
            if (!empty($_SESSION['mailb'])) {
                echo "
            <div class='btn_add_event'>
            <button id='add_event_btn' type='button'>Ajouter l'événement</button>
           </div>
            <div class='mt-2'>
                <a  href=\"logout.php\">
                    <button class='btn btn-danger rounded-pill'>Déconnexion</button>
                </a>
            </div>
             
                ";
            }
            ?>
            <!--        </div>-->
        </div>

    </div>

    <!--   Links Of each section -->


</div>

<div class="page-content pl-4" id="content">
    <!-- Toggle button -->
    <button class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 m-4" id="sidebarCollapse" type="button">
        <small class="text-uppercase font-weight-bold" id="togl"> <<< </small>
    </button>


    <div class="containers">
        <div class="statistics">
            <div class="chart_title">
                <h4 class="chart_title_h2">Les cours les plus demandés :</h4>
            </div>
            <?php


            if (!empty($_SESSION['mailb'])) {

                $therequet = "SELECT COUNT(d.cours) AS num, d.cours,c.nomcours , m.nommatiere FROM demande d INNER JOIN cours c ON 
           d.cours = c.idcours INNER JOIN matiere m ON c.idmatiere = m.idmatiere GROUP BY d.cours ORDER BY COUNT(d.cours) DESC;";
                $do = mysqli_query($conn, $therequet);
                if ($do = mysqli_query($conn, $therequet)) {

                    while ($array = mysqli_fetch_array($do)) {
                        echo '<div class="row  font-weight-bold align-items-center text-nowrap  text-center">
                   <div class="col-sm m-2 rounded p-3  backRed">' . $array[3] . '</div>

                   <div class="col-sm m-2 rounded p-3  backOrange
                    ">' . $array[2] . '</div>
                    <div class="col-sm m-2 rounded p-3  backGreen">' . $array[0] . '</div>
                    </div>
                    <hr class="backRed">';
                    };

                } else {
                    echo "<h5 class='text-danger text-center font-weight-bold mt-5'>Aucune demande</h5>";
                };
            };
            ?>


        </div>
    </div>
    <div class="containers">
        <h2 class="historique">Historique:</h2>
        <div class="d-flex flex-wrap flex-column align-items-center justify-content-center">
            <div class="col-4 mb-3 ">

                <!--//               getdemande();-->

                <form action="" method="post" class="w-100">
                    <div class="d-flex justify-content-between aline-items-baseline">
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


                                <select class="custom-select ml-2" name="filier" id="filiere"
                                        onchange="showMatiere(this.value)">
                                    <option value="" selected disabled> Choisir une filiere</option>
                                </select>

                                <select class="custom-select ml-2" name="matiere" id="matiere"
                                        onchange="getMatiere(this.value)">
                                    <option value="" SELECTED disabled>Matières</option>
                                </select>

                                <input type="text" hidden value="" name="selMatiere" id="selMatiere">
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" id="" class="btn backRed btn-lg">Choisir</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>

            </div>
            <div class="d-flex flex-wrap justify-content-around m-2">
                <?php


                if (isset($_POST['submit'])) {
                    $matiereT = $_POST['selMatiere'];
//print_r($matiereT);
//die();
                    $req = "SELECT c.nomcours, e.prenometudiant, e.nometudiant, d.description,  m.nommatiere FROM demande d 
    INNER JOIN etudiant e ON d.idetudiantc = e.idetudiant INNER JOIN cours c ON c.idcours = d.cours 
    INNER JOIN matiere m ON m.idmatiere = c.idmatiere WHERE m.idmatiere = '" . $matiereT . "' ";

                    $reqt = mysqli_query($conn, $req);
                    $row = mysqli_fetch_array($reqt);

//                    print_r($row);
//                    die();
                    if (!empty($_SESSION['mailb'] && $reqt)) {
//                    $row = mysqli_fetch_array($reqt);

                        while ($row = mysqli_fetch_array($reqt)) {
//                etudiant name


//                    $cours = [];


                            echo "
                        <div class=\"card  card mb-4 rounded-lg m-2\" style=\"width: 18rem;\">
                          <div class=\"card-body  p-0\">
                          
                             <div class='backOrange rounded-top pt-2 p-1 text-center'>
                                 <h5 class=\"card-title mt-2\">$row[0]</h5>
                             </div>
                            
                            <div class='p-2 m-1 text-center'>
                                <h5 class=\"card - title mt - 2\">$row[4]</h5>
    
                                <h6 class=\"card-subtitle text-center m-2 text-muted\"> $row[1]  $row[2]</h6>
                                <p class=\"card-text m-2\">$row[3]</p>
                          </div>
                         </div>
                         </div>
                         ";

                        }


                    }

                } else {
                    $req = "SELECT c.nomcours, e.prenometudiant, e.nometudiant, d.description,  m.nommatiere FROM demande d 
                        INNER JOIN etudiant e ON d.idetudiantc = e.idetudiant INNER JOIN cours c ON c.idcours = d.cours 
                        INNER JOIN matiere m ON m.idmatiere = c.idmatiere";

                    $reqt = mysqli_query($conn, $req);
                    $row = mysqli_fetch_array($reqt);

                    //                    print_r($row);
                    //                    die();
                    if (!empty($_SESSION['mailb']) && $reqt ) {
                        //                    $row = mysqli_fetch_array($reqt);

                        while ($row = mysqli_fetch_array($reqt)) {
                            //                etudiant name


                            //                    $cours = [];


                            echo "
                                <div class=\"card  card mb-4 rounded-lg m-2\" style=\"width: 18rem;\">
                                  <div class=\"card-body  p-0\">
                                     <div class='backOrange rounded-top pt-2 p-1 text-center'>
                                             <h5 class=\"card-title font-weight-bold mt-2\">$row[4]</h5>
                                    </div>
                                    <div class='p-2 m-1 text-center'>
                                        <h5 class=\"card-title text-center m-2\">$row[0]</h5>
                                        <hr>
                                        <p class=\"card-text font-weight-light m-2\">$row[3]</p>
                                     </div>
                                  </div>
                                 </div>
                                 
                                 ";

                        }
                    }
                }

                //    ?>

            </div>
        </div>


    </div>
    <div class="agenda">
        <!--    <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"-->
        <!--            style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>-->
    </div>
    <!-- <div class="btn_add_event">
        <button id="add_event_btn" type="button">Ajouter l'événement</button>
    </div> -->


    <div style="display :none;" id="pop-up-add_events" class="pop-up-add_events">
        <div class="pop-up-add_event">
            <form method="POST" action="addEvent.php">
                <div class="clouse">
                    <svg id="img_close" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                         class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 352 512">
                        <path style="fill: #F50057;" fill="currentColor"
                              d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg>
                </div>
                <div class="pop-up-add_event_matairs">
                    <div>
                        <!-- Matiers -->
                        <select name="matiere" id="matiere">
                            <optgroup label="2éme Année Bac">
                                <option value="1">Mathématique</option>
                                <option value="2">Sciences de la vie et de la Terre</option>
                                <option value="3">Physique Chimie</option>
                                <!-- <option value="philos">Philosophique</option> -->
                                <!-- <option value="an">Anglais</option> -->
                            </optgroup>
                            <optgroup label="1er Année Bac">
                                <option value="4">Histoire géographie</option>
                                `
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <!-- Cours -->
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
                    </div>
                </div>

                <div class="Date">
                    <div> la date
                        <div><input class="thedate" type="date" name="date" id="date"></div>
                    </div>
                    <div class="hour">
                        l'heure
                        <div><input class="thedate" type="time" id="appt" name="hours"></div>
                    </div>
                </div>
                <div>lien de visioconférence

                    <input class="lien_for_the_meeting" type="text" name="lien" placeholder="https//.com">
                </div>
                <div>
            <textarea class="message" name="message" id="message" name="message" cols="30" rows="10"
                      placeholder="Votre message"></textarea>
                </div>
                <button type="submit">Ajouter l'événement</button>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>

<script src="src/js/script.js"></script>
<script src="src/js/student.js"></script>

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

	function showMatiere(str) {
		if (str == "") {
			document.getElementById("matiere").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("matiere").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getmatiere.php?c=" + str, true);
			xmlhttp.send();
		}
	}

	function getMatiere(str) {
		document.getElementById('selMatiere').value = str;

	}
</script>





