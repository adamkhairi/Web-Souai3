<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <link rel="stylesheet" href="src/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet"> 

</head>

<body style="font-family: 'Poppins', sans-serif;">

<?php
include('navbar.php');
?>
   
   <div class="containers">
        <div class="chart">
            <div class="chart_title">
                <h class="chart_title_h2">Les cours qui plus demande :</h2>
            </div>
            <div class="chart_ui">
                <div>Les cours qui plus demande :</div>
                <div class="chart_UI"><div class="chart_UI1"></div></div>
                <div>12</div>
            </div>
            <div class="chart_ui">
                <div>Les cours qui plus demande :</div>
                <div class="chart_2"><div class="chart_UI2"></div></div>
                <div>5</div>
            </div>
            <div class="chart_ui">
                <div>Les cours qui plus demande :</div>
                <div class="chart_3"><div class="chart_UI3"></div></div>
                <div>3</div>
            </div>
            <div class="chart_ui">
                <div>Les cours qui plus demande :</div>
                <div class="chart_4"><div class="chart_UI4"></div></div>
                <div>1</div>
            </div>
        </div>
        



    </div>
    <div class="containers">
        <h2 class="historique">Historique:</h2>
        <h5 class="activité">aucun activité</h5>
    </div>
    <div class="agenda">
        <iframe src="https://calendar.google.com/calendar/embed?src=minanon77%40gmail.com&ctz=Africa%2FCasablanca"
            style="border: 0" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <div class="btn_add_event">
        <button  id="add_event_btn" type="button"> Add event</button>
    
    
    </div>



    <div  id="pop-up-add_events" class="pop-up-add_events">
        
        <div class="pop-up-add_event">
            <div class="clouse">
                <svg id="img_close" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path style="fill: #F50057;"  fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
            </div>

            <div class="pop-up-add_event_matairs">
            <div>
                    <!-- Matiers -->
                    <select name="matiere" id="matiere">
                        <option value="math">Mathématique</option>
                        <option value="svt">Sciences de la vie et de la Terre</option>
                        <!-- <option value="philos">Philosophique</option> -->
                        <option value="pc">Physique Chimie</option>
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
            <div>
                <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
            </div>
            <button  type="submit">Add event</button>
        </div>
    </div>


    <script src="src/js/student.js" ></script>
    <?php
include 'footer.php';
?>





