<?php
require("connexion.php");
    include "navbar.php";
?>
<div class=".container-{breakpoint} d-flex flex-row flex-wrap-reverse justify-content-around">
  
    <div class=" w-75 ml-0 mr-0">
        <div class="Post_problem">
            <form action="addQst.php" method="post">
                <h2 class="historique d-inline-block " >Précisi votre recherche:</h2>
                <div class="post_pro ">
                   
                    <div class="find_help " style="margin-top:7%">
                        <div>

                            <select name="nvscolaire" id="nvscolaire">
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
                                <!--<option value="3">Philosophique</option>-->
                                <option value="3">Physique Chimie</option>
                                <!-- <option value="5">Anglais</option>-->
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
                        <div >
                            <button class="btn_post" type="submit"><i class="fas fa-search m-1 "></i>chercher</button>
                        </div>
                    </div>
                    <div class="w-50  "> 
                        <img src="src/img/bgvideo.png" alt="imgvideo">
                    </div>

                </div>
                
            </form>
        </div>


        <div class="containers">
            <h2 class="historique d-inline-block bBottom">Les videos:</h2>
            <div class="d-flex flex-wrap justify-content-around m-2">


                    <?php
                                        //            $sql = "SELECT * FROM demande where
                                        //               idetudiantc = '" . $_SESSION['userid'] . "'";
                                        //
//                                        $sql = "SELECT * FROM demande where
//                                        idetudiantc = '" . $_SESSION['userid'] . "'";
//                                        $result = mysqli_query($conn, $sql);
//
//                                        //$reponse = mysqli_fetch_assoc($exec_requete);
//                                        //                var_dump($_SESSION['userid']);
//                                    if (!empty($result)) {
//                                            //                $row = mysqli_fetch_array($result);
//                                            $demandes = [];
//                                            $fname = $_SESSION['firstName'];
//                                            $lname = $_SESSION['lastName'];
//
//                                            while ($row = mysqli_fetch_array($result)) {
//                                                //    echo ($row[1]);  // description
//                                                array_push($demandes, $row[1]);
//
//                                                ////    echo ($row[3]);  // cours
//                                                $requet = "SELECT * FROM cours where
//                                                idcours = '" . $row[3] . "'";
//
//                                                $results = mysqli_query($conn, $requet);
//                                                $row1 = mysqli_fetch_array($results);
//                                                //                    $cours = [];
//
//                            echo "
//                                <div class=\"card mb-4\" style=\"width: 18rem;\">
//                                <div class=\"card-body\">
//                                    <h5 class=\"card-title\">$row1[1]</h5>
//                                    <h6 class=\"card-subtitle mb-2 text-muted\"> $lname  $fname</h6>
//                                    <p class=\"card-text\">$row[1]</p>
//                                </div>
//                                </div>
//                                ";
//                        }
//                        } else {
//                            echo "<h5 class=\"activité\">aucune activité</h5>";
//                        };
                                    ?>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>

