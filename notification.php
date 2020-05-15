<div class="notif">
    <div id="notification_alert" class="notification show">
        <div class="notif_name">


<?php
if (!empty($_SESSION['lastName'])) {
    $lastname = $_SESSION['lastName'];
    // afficher un message
    echo
    "<h2 class='h4-w'>Bonjour 
            $lastname
            </h2>";
} else {
    echo "<h4 class='h4-w'>Bonjour</h4>";
}

?>





    </div>
        <div class="message">
            <div class="nofit_message">
                <div class="">
                    <i class="far fa-check-circle"></i>
                </div>
                <div class="nofit_message_A">
                    <p>Cours : <span>tawalo ind dafadi3</span><br>
                        date : <span>tawalo ind dafadi3</span><br>
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
    <div class="show_notification">
        <p>0</p>
    </div>

    <div id="notification" onclick="show_notify()" class="ntif_icon">
        <svg focusable="false" data-prefix="far" data-icon="bell"
             class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 448 512">
            <path style="fill:white;" fill="currentColor"
                  d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"></path>
        </svg>
    </div>
</div>
