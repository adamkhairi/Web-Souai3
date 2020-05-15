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
                <h2 class="mt-4 ml-4"><?php echo($_SESSION['lastName'] . $_SESSION['lastName']) ?></h2>
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
                <h5 class="font-weight-bold bBottom mr-4">Niveau scolaire : </h5>
                <h4 class="">le Niveau scolaire</h4>
            </div>
        </div>

    </div>
</div>

<div class="Post_problem">
    <form action="addQst.php">


        <h2 class="historique d-inline-block">Poster un problème:</h2>
        <div class="post_pro">
            <div class="find_help">
                <div>
                    <!-- Matiers -->
                    <select name="matiere" id="Matiers">
                        <option value="math">Mathématique</option>
                        <option value="svt">Sciences de la vie et de la Terre</option>
                        <option value="philos">Philosophique</option>
                        <option value="fr">Français</option>
                        <option value="phys">Physique</option>
                    </select>
                </div>
                <div>
                    <!-- Cours -->
                    <select class="hour2" name="cours" id="cours">
                        <option value="1">Matiers 11</option>
                        <option value="2">Matiers 22</option>
                        <option value="3">Matiers 33</option>
                        <option value="4">Matiers 44</option>
                        <option value="5">Matiers 55</option>
                        <option value="6">Matiers 66</option>
                    </select>
                </div>
            </div>
            <div class="text_message">
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

<?php
include 'footer.php';
?>
    
