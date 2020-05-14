<?php
require("connexion.php");
include 'navbar.php';
session_start();

?>

<div class="containers">
    <div class="check">
        <div class="name-and-pen">
            <div class="name-img d-flex flex-column justify-content-center ml-auto mr-auto">
                <img class="profil_img" src="src/img/account.png" alt="">
                <h2 class="mt-4">le nom d'élève</h2>
            </div>
            <div class="pen_for_modify">
                <i class="fas fa-pencil-alt"></i>
            </div>
        </div>
        <div class="inputs d-flex flex-row justify-content-around aline-items-baseline">

            <?php
            if ($_SESSION['your_email'] !== "") {
                $user = $_SESSION['your_email'];
                // afficher un message
                echo "
            <div >
                <h5 class='font-weight-bolder bBottom'>E-mail : </h5>
                <h6 class='ml-4'>$user</h6>
            </div>";
            } ?>
            <div>
                <h5 class="font-weight-bolder bBottom mr-4">Niveau scolaire : </h5>
                <h5 class="">le Niveau scolaire</h5>
            </div>
        </div>

    </div>
</div>


<div class="containers">
    <h2 class="historique d-inline-block bBottom">Historique:</h2>
    <h3 class="activité">aucun activité</h3>
</div>
<div class="agenda">
    <!--        Agenda-->
</div>


<div class="notif">
    <div id="notification_alert" class="notification show">
        <div class="notif_name">
            <h3>Bonjour <span>name</span></h3>
        </div>
        <div class="message">
            <div class="nofit_message">
                <div>
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle"
                         class="svg-inline--fa fa-check-circle fa-w-16" role="img"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>
                    </svg>
                </div>
                <div class="nofit_message_A">
                    <p>Cours : <span>tawalo ind dafadi3</span></br>
                        date : <span>tawalo ind dafadi3</span></br>
                        Profiseur : <span>tawalo ind dafadi3</span></p>
                </div>

            </div>
            <div class="valid">
                <p>Intéressé(e) ?</p>
                <button class="OUI">oui</button>
                <button class="NON">non</button>
            </div>
        </div>


    </div>
    <div id="notification" class="ntif_icon">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bell"
             class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 448 512">
            <path style="fill:white;" fill="currentColor"
                  d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"></path>
        </svg>
    </div>
</div>

<!-- <div class="agenda">
    <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"
        style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
</div> -->

<?php
include 'footer.php';
?>
    
