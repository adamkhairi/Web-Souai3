
<?php
include('navbar.php');
require("connexion.php");
//session_start();
?>
<div class="containers">
    <div class="check">
        <div class="name-and-pen">
            <div class="name-img d-flex justify-content-center">
                <img class="profil_img" src="src/img/account.png" alt="">
                <h2 class="mt-4 ml-4">
                    <?php
                    if (!empty($_SESSION['mailb'])) {
                        echo($_SESSION['teacherFname'] . ' ' . $_SESSION['teacherLname']);
                    };
                    ?>
                </h2>
            </div>
            <div class="pen_for_modify">
                <i class="fas fa-pencil-alt"></i>
            </div>
        </div>
        <div class="inputs d-flex flex-row justify-content-around aline-items-baseline">
            <div>
                <h5 class='font-weight-bold bBottom'>E-mail : </h5>
                <h4 class='ml-4'>
                    <?php
                    if (!empty($_SESSION['mailb'])) {
                        echo(' ' . $_SESSION['mailb']);
                    };
                    ?></h4>
            </div>


            <!--//                    $matiereT = $_SESSION['matiereT-->

            <!--                    // afficher un message-->


            <div class="input-group mb-3 w-25">


                <!--//               getdemande();-->

                <form action="" method="post" class="w-100">

                    <select class="custom-select" id="inputGroupSelect01" name="sel">
                        <option selected>Matières</option>
                        <option value="1">Français</option>
                        <option value="2">Physique</option>
                        <option value="3">Maths</option>
                        <option value="4">Philosophie</option>
                    </select>
                    <button type="submit" name="submit" id="" class="btn backRed btn-lg"> Select</button>
                </form>

            </div>
            <?php
            //$secetion = $_POST['sel'];
            //var_dump($secetion);

            ?>
        </div>

    </div>

</div>


<div class="containers">
    <div class="chart">
        <div class="chart_title">
            <h4 class="chart_title_h2">Les cours qui plus demande :</h4>
        </div>
        <div class="chart_ui">
            <div>Les cours qui plus demande :</div>
            <div class="chart_UI">
                <div class="chart_UI1"></div>

            </div>
            <div>12</div>
        </div>
        <div class="chart_ui">
            <div>Les cours qui plus demande :</div>
            <div class="chart_2">
                <div class="chart_UI2"></div>
            </div>
            <div>5</div>
        </div>
        <div class="chart_ui">
            <div>Les cours qui plus demande :</div>
            <div class="chart_3">
                <div class="chart_UI3"></div>
            </div>
            <div>3</div>
        </div>
        <div class="chart_ui">
            <div>Les cours qui plus demande :</div>
            <div class="chart_4">
                <div class="chart_UI4"></div>
            </div>
            <div>1</div>
        </div>
    </div>
</div>
<div class="containers">
    <h2 class="historique">Historique:</h2>
    <div class="d-flex flex-wrap justify-content-around m-2">
        <?php

        if (isset($_POST['submit'])) {

            if (isset($_POST['submit'])) {
                $matiereT = $_POST['sel'];

                $req = "SELECT * FROM demande where
                   idmatiere = '" . $matiereT . "'";
                $reqt = mysqli_query($conn, $req);
                if (!empty($_SESSION['mailb'] && $reqt)) {
                    $row = mysqli_fetch_array($reqt);
                    while ($row = mysqli_fetch_array($reqt)) {
//                etudiant name
                        $requet = "SELECT * FROM etudiant where
                    idetudiant = '" . $row[2] . "'";
                        $results = mysqli_query($conn, $requet);
                        $row1 = mysqli_fetch_array($results);
//                Course name
                        $requet2 = "SELECT * FROM cours where
                    idmatiere = '" . $row[4] . "'";

                        $results1 = mysqli_query($conn, $requet2);
                        $row2 = mysqli_fetch_array($results1);
//                    $cours = [];

                        echo "
                        <div class=\"card mb-4\" style=\"width: 18rem;\">
                           <div class=\"card-body\">
                            <h5 class=\"card-title\">$row2[1]</h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\"> $row1[1]  $row1[2]</h6>
                            <p class=\"card-text\">$row[1]</p>
                          </div>
                        </div>
                         ";

                    }


                }
            }
        } else {
            echo "
            <h5 class=\"activité\">aucune activité</h5>

        ";
        }
        //    ?>


    </div>

</div>
<div class="agenda">
    <!--    <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"-->
    <!--            style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>-->
</div>

<div class="btn_add_event">
    <button id="add_event_btn" type="button"> Add event</button>


</div>


<div style="display :none;" id="pop-up-add_events" class="pop-up-add_events">

    <div class="pop-up-add_event">
        <div class="clouse">
            <svg id="img_close" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                 class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 352 512">
                <path style="fill: #F50057;" fill="currentColor"
                      d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
            </svg>
        </div>


            <div class="pop-up-add_event_matairs">
            <!-- <div>
                     <select name="nvscolaire" id="nvscolaire">
                        <option value="2">2eme année Bac</option>
                        <option value="1">1er année Bac</option>
                        </select>
                    </div>-->
            
           <div>
                    
                    <select name="matiere" id="matiere">
                        <option value="1">Mathématique(2éme année bac)</option>
                        <option value="2">Sciences de la vie et de la Terre(2éme année bac)</option>
                        <!-- <option value="philos">Philosophique</option> -->
                        <option value="3">Physique Chimie(2éme année bac)</option>
                        <option value="4">Histoire géographie(1éme année bac)</option>`
                        <!-- <option value="an">Anglais</option> -->
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
              <div>  la date
                <div><input class="thedate" type="date" name="date" id="date"></div></div>
                <div class="hour">
                    l'heure
                <div><input class="thedate" type="time" id="appt" name="appt"></div>
                </div>
            </div>
            <div>lien de meeting
                <input  class="lien_for_the_meeting" type="text" placeholder="https://le lien.com">

            </div>
            <div class="hour">
                l'heure
                <div><input class="thedate" type="time" id="appt" name="appt"></div>
            </div>
        </div>
        <div>lien de meeting
            <input class="lien_for_the_meeting" type="text" placeholder="#">
        </div>
        <div>
            <textarea class="message" name="message" id="message" cols="30" rows="10"
                      placeholder="Votre message"></textarea>
        </div>
        <button type="submit">Add event</button>
    </div>
</div>


   <script src="src/js/script.js" ></script>


    <script src="src/js/script.js" ></script>
    <script src="src/js/Student.js" ></script>
    <?php

include 'footer.php';
?>





