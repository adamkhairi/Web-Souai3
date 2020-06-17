<div type="button" class="col-sm m-2 rounded p-3 text-truncate bg-light border" id="add-event-TwoW" onclick="show_it('. $array[1] .',"'. $array[2] .'","'. $array[3] .'","'. $array[4] .' ","'. $array[5] .'")">Ajouter l\'événement</div>
                    </div>








                    <div style="display :none;" id="Pop-event-TwoW" class="pop-up-add_events">
        <div class="pop-up-add_event m-auto">
            <form method="POST" action="addEvent.php">
                <div class="clouse">
                    <svg onclick=' hide_it()' aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                         class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 352 512">
                        <path style="fill: #F50057;" fill="currentColor"
                              d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg>
                </div>
                <p id="paraghra"></p>
                <input hidden id="cour_id" name="selCours">
                <!-- <input hidden id="matiar" >
                <input hidden id="filier" >
                <input hidden id="neveau" >
                <input hidden id="cour" > -->
                <p></p>
                <div class="Date">
                    <div> la date
                        <div><input class="thedate" type="date" name="date" id="date"></div>
                    </div>
                    <div class="hour">
                        l'heure
                        <div><input class="thedate ml-2" type="time" id="appt" name="hours"></div>
                    </div>
                </div>
                <div class="form-group Date" style="max-width: 250px">
                    le dernier délai de participation
                    <input class="thedate" type="date" name="lastdate" id="lastdate">
                </div>
                <div>
                    <textarea class="message" name="message" id="message" name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>
                <button type="submit">Ajouter l'événement</button>
            </form>
        </div>
</div>




function show_it(id, id2,id3 ,id4,id5) {
        document.getElementById('Pop-event-TwoW').style.display = "flex";
        document.getElementById('cour_id').value = id;
        // let niveau = document.getElementById('neveau').value ;
        // let filier = document.getElementById('filier').value ;
        // let matiar = document.getElementById('matiar').value ;
        // let cour = document.getElementById('cour').value ;
        // niveau = id5;
        // filier = id4 ;
        // matiar = id3;
        // cour =id2;
        document.getElementById('paraghra').textContent = `${id5}-${id4}-${id3}-${id2}`;

        

        
    };