<?php
 require("connexion.php");
 include 'navbar.php';
?>
    

    <div class="container">
        <div class="check">
            <div class="name-and-pen">
                <div class="name-img">
                    <img class="profil_img" src="images/img.png" alt="">
                    <h2>le nom d'élève</h2>
                </div>
                <div class="pen_for_modify">
                    <img class="pen_img" src="images/pen-solid.svg" alt="pen">
                </div>
            </div>
            <div class="inputs">
            <?php
                session_start();
                if($_SESSION['your_email'] !== ""){
                    $user = $_SESSION['your_email'];
                    // afficher un message
                    echo "<div class='container'>
                    <label>E-mail</label>
                    <h4>$user</h4>
                </div>";
                }
            ?>


                
                <div>
                    <label>Niveau scolaire</label>
                    <input type="text" placeholder="le Niveau scolaire">
                </div>
               
            </div>
            
        </div>
    </div>
    <div class="container">
        <h2 class="historique">Historique:</h2>
       

        <h3 class="activité">aucun activité</h3>
    </div>
    <!-- <div class="agenda">
        <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"
            style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
    </div> -->
    
    <?php
 include 'footer.php';
?>
    
