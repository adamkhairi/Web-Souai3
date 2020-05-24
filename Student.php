<?php
require("connexion.php");
$pageTitle = "Etudiant Profil";
//session_start();
include "navbar.php";
?>
<div class="vertical-nav pt-lg-5  bg-light" id="sidebar">
    <div class="mb-4  menu-head text-center">
        <i class="far fa-user img-thumbnail shadow-sm rounded-circle p-3"
           style="font-size: 40px; color: #00BFA6"></i>
        <div class="media d-flex align-items-center ">
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
        <!--   Links Of each section -->
        <div class="d-flex mt-2 flex-column justify-content-center align-items-center">
            <div class='mt-4 '>
                <a href="#">
                    <button class='btn backOrange rounded-pill'>Voir les vidéos</button>
                </a>
            </div>
            <?php
            if (!empty($_SESSION['mail'])) {
                echo "<div class='mt-2'>
            <a  href=\"logout.php\">
                <button class='btn btn-danger rounded-pill'>Déconnexion</button>
            </a>
            </div>
             
                ";
            }
            ?>

        </div>

    </div>
</div>


<div class="page-content pl-4" id="content">
    <!-- Toggle button -->
    <button class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 m-4" id="sidebarCollapse" type="button">
        <small class="text-uppercase font-weight-bold" id="togl"> <<< </small>
    </button>

    <div class="row  w-100 flex-nowrap justify-content-around m-auto  ccc">
        <?php
        $idetudiant = $_SESSION['userid'];
        $sql = "SELECT d.idetudiantc, d.iddemande ,d.cours, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM demande d INNER JOIN theevanets e ON d.cours = e.coursID INNER JOIN 
                    benevole b ON e.ProfID = b.idbenevole INNER JOIN cours c ON c.idcours = e.coursID WHERE d.idetudiantc = " . $idetudiant . " ;";
        $exec_requete = mysqli_query($conn, $sql);
        $reponse = mysqli_fetch_array($exec_requete);
        $domende = array();
        $eventID = array();
        if ($exec_requete = mysqli_query($conn, $sql)) {
            while ($reponse = mysqli_fetch_array($exec_requete)) {
                array_push($domende, $reponse['iddemande']);
                array_push($eventID, $reponse['eventID']);
                $namefomr = 'reponce_' . $reponse['iddemande'];
                $name = 'getans_' . $reponse['iddemande'];
                // print_r($name);
                // die();
                echo "
                <form name='" . $namefomr . "' action=\"answer.php\" method='POST' class=\"width ml-3\">
                    <div class=\"modal-dialog width shdow\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header backOrange\">
                                <h5 class=\"modal-title text-center \">Évènement</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            
                            <div class=\"modal-body pl-4\">     
                                <h5>Cour : " . $reponse['nomcours'] . "</h5>
                                <h6>l'heure : " . $reponse['hours'] . "</h6>
                                <h6>la Date : " . $reponse['theDate'] . "</h6>
                                <div class=\"row ml-2\">

                                    <p>Organisé par: </p>
                                    <h5 class=\"ml-4\">" . $reponse['nombenevole'] . "  " . $reponse['prenombenevole'] . "</h5>
                                </div>
                            </div>
                            <div class=\"modal-footer text-center d-flex justify-content-around\">
                                <p>Intéressé(e) ?</p>
                                <div class='d-flex align-items-center w-25'>
                                    <input class='mb-2' type='radio' name='" . $name . "' value='1' id='oui'>
                                    <label for='oui' >Oui</label>
                                </div>
                                <div class='d-flex align-items-center w-25'>

                                    <input class='mb-2' type='radio' name='" . $name . "' value='2' id='non'>
                                    <label  for='non'>Non</label>
                                </div>

                     
                                 
                            </div>
                        <button type=\"submit\" id='ansnon' class=\"btn m - 0 w - 25 rounded - pill backRed\">Envoyer</button>

                        </div>
                    </div>
                </form>
                    ";
            }
        }
        $_SESSION['domende'] = $domende;
        $_SESSION['event'] = $eventID;
        ?>
    </div>
    <div class="">
        <div class="Post_problem">
            <form action="addQst.php" method="post">
                <h2 class="historique d-inline-block">Poster un problème:</h2>
                <div class="post_pro">
                    <div class="find_help">

                        <div>
                            <select name="nvscolaire" id="nvscolaire" onclick="School_levels()">
                                <option value="2">Deuxieme année baccalauréat</option>
                                <option value="1">Première année baccalauréat</option>
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
                    <button class="btn_post" type="submit">Soumettre</button>
                </div>
            </form>
        </div>
        <div class="containers">
            <h2 class="historique d-inline-block bBottom">Historique:</h2>
            <div class="d-flex flex-wrap justify-content-around m-2">


                <?php

                $sql = "SELECT * FROM demande where
               idetudiantc = '" . $_SESSION['userid'] . "'";
                $result = mysqli_query($conn, $sql);


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
                        <div class=\"card mb-4 rounded-lg m-2\" style=\"width: 18rem;\">
                           <div class=\"card-body  p-0\">
                           <div class='backOrange rounded-top pt-2 p-1 text-center'>
                           
                            <h6 class=\"card-title mt-2\">$row1[1]</h6>
                            </div>
                            <div class='p-2 m-1'>
                            <h6 class=\"card-subtitle text-center m-2 text-muted\"> $lname  $fname</h6>
                            <p class=\"card-text m-2\">$row[1]</p>
                           </div>  
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