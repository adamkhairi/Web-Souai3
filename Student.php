<?php
require("connexion.php");
session_start();
include 'navbar.php';

include "notification.php"
?>

<div class="containers">
    <div class="check">
        <div class="name-and-pen">
            <div class="name-img d-flex justify-content-center">
                <img class="profil_img" src="src/img/account.png" alt="">
                <h2 class="mt-4 ml-4"><?php echo($_SESSION['lastName'] .' '. $_SESSION['lastName']) ?></h2>
            </div>
            <div class="pen_for_modify">
                <i class="fas fa-pencil-alt"></i>
            </div>
        </div>
        <div class="inputs d-flex flex-row justify-content-around aline-items-baseline">


            <div>
                <h5 class='font-weight-bold bBottom'>E-mail : </h5>
                <h4 class='ml-4'>  <?php

                    // afficher un message
                    echo($_SESSION['mail'])
                    ?></h4>
            </div>
            <div>

                <?php

                  if (!empty($_SESSION['mail'])) {
                      $usermail = $_SESSION['mail'];
                      // afficher un message
                      echo
                      " 
 
                <h5 class=\"font-weight-bold bBottom mr-4\">Niveau scolaire : </h5>
                <h4> ".$_SESSION['nvScolaire']."</h4>

                ";
                  } else{
                      echo "
                      <h5 class=\"font-weight-bold bBottom mr-4\">Niveau scolaire : </h5>
                <h4>le Niveau scolaire</h4>
                      ";
                  }
                ?>



            </div>
        </div>

    </div>
</div>
<?php

$levelid=$_SESSION['nvScolaire'];

$querylevel ="SELECT * FROM niveau where idniveau = '" . $levelid . "' ";

$exec_requete = mysqli_query($conn, $querylevel);
$reponse = mysqli_fetch_array($exec_requete);
$levelname= $reponse['niveau'];

$querymatiere ="SELECT * FROM matiere where idniveau = '" . $levelid . "' ";
$exec_requete = mysqli_query($conn, $querymatiere);
 $reponsematiere = mysqli_fetch_array($exec_requete);
var_dump($reponsematiere);
$listcours = [];

foreach ($reponsematiere as $cours){
    $coursid = $cours[0];
    $querycours ="SELECT * FROM cours where idmatiere = '" . $levelid . "' ";
    $exec_requetes = mysqli_query($conn, $querycours);
    $reponsecours = mysqli_fetch_array($exec_requetes);
    array_push($listcours,$reponsecours);
}


//?>
<div class="Post_problem">
    <form action="addQst.php" method="post">

        <h2 class="historique d-inline-block">Poster un problème:</h2>
        <div class="post_pro">
            <div class="find_help">
                <div>

                    <select name="nvscolaire" id="nvscolaire">
<!--                        --><?php
//                        echo "
//                        <option value='$levelid'>$levelname</option>
//
//                        ";
//                        ?>




                    </select>

                </div>
                <div>
                    <!-- Matiers -->
                    <select name="matiere" id="matiere">
                       <?php
foreach ($reponsecours as $cours){
echo "
                        <option value='$cours[0]'>$cours[1]</option>

                        ";
}
//?>
                    </select>

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
                </div>
            </div>
            <div class="text_message form-group">
                <textarea name="description" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
            </div>
        </div>
        <div>
            <button class="btn_post" type="submit">Poster</button>
        </div>
    </form>

</div>


<?php

//
echo '<div class="containers"><h2 class="historique d-inline-block bBottom">Historique:</h2> ';

if (!empty($_SESSION['userCours']) && !empty($_SESSION['mail'])) {
    while (!empty($_SESSION['idcours'])) {

        echo "

        <h5 class=\"activité\"> " . $_SESSION['cours'] . "  </h5> 

     ";
    };


} else {
    echo "

    <h5 class=\"activité\">aucun activité</h5></div>

";
}

echo '</div>'

?>


<div class="agenda">
    <!--        Agenda-->
</div>


<!-- <div class="agenda">
    <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"
        style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
</div> -->
<script src="src/js/general.js"></script>
<script src="src/js/student.js" ></script>
<?php
include 'footer.php';
?>

    
