<?php
require("connexion.php");
session_start();
include "navbar.php";
include "notification.php";
?>

<div class="containers">
    <div class="check">
        <div class="name-and-pen">
            <div class="name-img d-flex justify-content-center">
                <img class="profil_img" src="src/img/account.png" alt="">
                <h2 class="mt-4 ml-4">
                    <?php
                    if (!empty($_SESSION['mail'])) {
                        echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']);
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
                    if (!empty($_SESSION['mail'])) {
                        echo(' '. $_SESSION['mail']);
                    };
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
                <h4> " . $_SESSION['nvScolaire'] . "</h4>

                ";
                } else {
                    echo "
                      <h5 class=\"font-weight-bold bBottom mr-4\">Niveau scolaire : </h5>
                <h4>le Niveau scolaire</h4>
                      ";
                };
                ?>


            </div>
        </div>

    </div>
</div>

<div class="Post_problem">
    <form action="addQst.php" method="post">
        <h2 class="historique d-inline-block">Poster un problème:</h2>
        <div class="post_pro">
            <div class="find_help">
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
                        <option value="math">Mathématique</option>
                        <option value="svt">Sciences de la vie et de la Terre</option>
                        <option value="philos">Philosophique</option>
                        <option value="fr">Physique Chimie</option>
                        <option value="phys">Anglais</option>
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
                <textarea name="description" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
            </div>
        </div>
        <div>
            <button class="btn_post" type="submit">Poster</button>
        </div>
    </form>
</div>



<div class="containers">
    <h2 class="historique d-inline-block bBottom">Historique:</h2>

    <?php
    if ()


    ?>
    <h5 class="activité">aucun activité</h5>
</div>





<script src="src/js/general.js"></script>
<script src="src/js/student.js"></script>

<?php
include 'footer.php';
?>