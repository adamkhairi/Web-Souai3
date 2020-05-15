<?php
require("connexion.php");
session_start();
include 'navbar.php';





?>

<div class="containers">
    <div class="check">
        <div class="name-and-pen">
            <div class="name-img d-flex justify-content-center">
                <img class="profil_img" src="src/img/account.png" alt="">
                <h2 class="mt-4 ml-4"><?php echo ($_SESSION['lastName'] . $_SESSION['lastName']) ?></h2>
            </div>
            <div class="pen_for_modify">
                <i class="fas fa-pencil-alt"></i>
            </div>
        </div>
        <div class="inputs d-flex flex-row justify-content-around aline-items-baseline">


            <div >
                <h5 class='font-weight-bold bBottom'>E-mail : </h5>
                <h4 class='ml-4'>  <?php

                // afficher un message
                echo ($_SESSION['mail'])
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
    <h2 class="historique d-inline-block">Poster un problème:</h2>
    <div class="post_pro">
        <div class="find_help">
            <div>
                <!-- Matiers -->
                <select name="Matiers" id="Matiers">
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                </select>
            </div>
            <div>
                <!-- Cours -->
                <select class="hour2" name="Matiers" id="Matier">
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                    <option value="#">Matiers 1</option>
                </select>
            </div>
        </div>
        <div class="text_message">
            <textarea  name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
        </div>
    </div>
    <div>
        <button class="btn_post" type="submit">Poster</button>
    </div>
</div>

<div class="containers">
    <h2 class="historique d-inline-block bBottom">Historique:</h2>
    <h3 class="activité">aucun activité</h3>
</div>
<div class="agenda">
    <!--        Agenda-->
</div>


<?php include "notification.php"; ?>


<!-- <div class="agenda">
    <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"
        style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
</div> -->

<?php
include 'footer.php';
?>
    
