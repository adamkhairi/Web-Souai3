<?php
include("connexion.php");
$pageTitle = "Bénévole Profile";
include('navbar.php');
if (empty($_SESSION['mailb'])) {
    header('Location: index.php');
}
if (!empty($_GET['msg'])) {

    if ($_GET['msg'] == 'done') {
//        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
        echo "

<div class=\"alert text-center alert-success m-0 alert-dismissible fade show\" role=\"alert\">
  Votre événement a été crée avec succès.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
        ";
    }elseif ($_GET['msg'] == 'mailSend') {
        //        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
                echo "
        
        <div class=\"alert text-center alert-success m-0 alert-dismissible fade show\" role=\"alert\">
          Le lien a été crée avec succès.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
    }
}
?>
<div class="vertical-nav pt-lg-5" id="sidebar">
    <div class=" mb-4  menu-head text-center d-flex flex-column align-items-center">
        <i class="far fa-user img-thumbnail shadow-sm rounded-circle p-3"
           style="font-size: 40px; color: #00BFA6"></i>
        <div class="media d-flex align-items-center ">
            <div class="media-body">
                <h3 class="">
                    <?php
                    if (!empty($_SESSION['mailb'])) {
                        echo($_SESSION['teacherFname'] . ' ' . $_SESSION['teacherLname']);
                    };
                    ?>
                </h3>
                <p class="font-weight-light text-muted mb-0">Bénévole</p>
            </div>
        </div>
        <div class="mt-4">
            <h6 class='text-center'>
                <?php
                if (!empty($_SESSION['mailb'])) {
                    echo(' ' . $_SESSION['mailb']);
                };
                ?>
            </h6>
        </div>
        <div>
            <?php
            if (!empty($_SESSION['mailb'])) {
                echo "
            <div  class='p-2 mt-4  demande-bg btn'style='width: 100%;'>
                <a id='add_event_btn' class='text-decoration-none text-white'>Ajouter un événement</a>
            </div>
            <div class='p-2 mt-4  btn btn-danger'style='width: 100%;'>
                <a class='text-decoration-none text-white'  href=\"logout.php\">
                    Déconnexion
                </a>
            </div>
                ";
            }
            ?>
        </div>
    </div>
</div>

<div class="page-content pl-4" id="content">
    <!-- Toggle button -->
    <button class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 m-4" id="sidebarCollapse" type="button">
        <small class="text-uppercase font-weight-bold" id="togl"> <<< </small>
    </button>
    <div class="containers">
        <h4 class="historique">Évènements :</h4>
        <div class="d-flex justify-content-around flex-wrap align-items-center">
            <?php
            setlocale(LC_ALL, 'fr_FR');
            $sql = "SELECT e.coursID,e.message , e.hours, e.theDate, c.nomcours, e.eventID  FROM theevanets e INNER JOIN cours c ON e.coursID = c.idcours WHERE e.ProfID = ". $_SESSION['idProf'] ." AND e.theDate > CURRENT_DATE";
            $run = mysqli_query($conn, $sql);
            $Arry = mysqli_fetch_all($run, MYSQLI_ASSOC);
            if ($run = mysqli_query($conn, $sql)) {
                foreach ($Arry as $Arr) {
                    $sql2 = "SELECT COUNT(idetudiant) FROM `reponce` WHERE idevent =". $Arr['eventID'] ." AND reponce = '1'";
                    $go = mysqli_query($conn,$sql2);
                    $goo = mysqli_fetch_array($go);
                    //***** Change Date Format and Language *****//
                    $newDate = dateToFrench($Arr['theDate'], "l , d , M , Y");
                    echo "
            <div class=\"card m-2 position-relative \" style='max-width: 26em'>
                <div class='card-header text-center demande-bg'>
                    <h4 class=\"card-title font-weight-bold mt-2 \">" . $Arr['nomcours'] . "</h4>
                </div>
                <div class=\"card-body text-left\">
                    <p class=\"card-text text-wrap\">Description sur l'évènement : <br>" . $Arr['message'] . "</p>
                    <hr>
                    <p class=\"card-text\">Le " . $newDate . ' à ' . $Arr['hours'] . "</p>
                    <hr>
                    <p class=\"card-text \">Les participants : <span class='demande-bg rounded-circle p-2 pl-3 pr-3 ml-2'>". $goo['COUNT(idetudiant)'] ."</span> </p>
                    <hr>
                    <button class='btn deldemande'' type='submit' onclick='removeFrom(" . $Arr['eventID'] . ")'>
                    <input type='text' hidden value='" . $Arr['eventID'] . "' id='remove_" . $Arr['eventID'] . "'>
                        <i class=\"fas fa-trash-alt\"></i>
                    </button>
                </div>
              <input  onclick='hidelist(" . $Arr['eventID'] . ")' type='button'  class='btn w-75 text-left font-weight-bold ' style=\" color :#60a8a7;\" value='Afficher la liste'/>
          <div id=\"eventlist\" class=\"popup hide toggll" . $Arr['eventID'] . " \">
            <section class=\"sign-in \">
                <div class=\"container pb-3\">
                    <div id=\"exit\" onclick='hidelist(" . $Arr['eventID'] . ")'>
                        <i class=\"fas fa-times\"></i>
                    </div>
         
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\" thead-dark\">
                                <tr class=''>
                                    <th scope=\"col\">Selectionner</th>
                                    <th scope=\"col\">Prénom</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Adresse mail</th>
                                </tr>
                                </thead>
                                <tbody>";

                    $sql = "SELECT r.idetudiant,e.nometudiant,e.prenometudiant, e.mailetudiant ,r.idevent FROM reponce r 
                                    INNER JOIN etudiant e on r.idetudiant = e.idetudiant WHERE r.idevent =" . $Arr['eventID'] . " ";
                    $req = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_all($req);
                    foreach ($result as $row) {
                        echo "
                            <tr>
                              <th scope=\"row\">
                                <div class=\"custom-control custom-checkbox mr-sm-2\">
                                <input type=\"checkbox\" value='" . $row['3'] . "' class=\"custom-control-input name\" id=\"" . $row['3'] . "" . $row['4'] . "\" name='emails_". $row['4'] ."[]'>
                                <label class=\"custom-control-label\"  for=\"" . $row['3'] . "" . $row['4'] . "\">Choisir</label>
                                </div>
                                <input hidden 
                              </th>
                              <td>" . $row['2'] . "</td>
                              <td>" . $row['1'] . "</td>
                              <td>" . $row['3'] . "</td>
                            </tr>  
                            <input hidden id='m' name='m' >
                    ";
                    };
                    echo "
                            </tbody>
                            </table>
                            <div class=\"text-right\">
                                <button type=\"button\" onclick='send_mails(`". $row['4'] ."`)' class=\"btn bg-dark text-light m-1 rounded-pill\">Envoyer !</button>
                               </div>
                        </div>
           
                </div>
            </section>
        </div>
     </div>       
        ";
                }
              
            };
  
            ?>
        </div>
    </div>
    <div class="containers">
        <div class="statistics">
            <div class="chart_title">
                <h4 class="chart_title_h2 historique">Les cours les plus demandés par ordre:</h4>
            </div>
            <div class="row  font-weight-bold align-items-center text-center" style="min-width: 16em ; max-width: 100%">
                   <div class="col-sm m-2 rounded p-3 text-truncate demande-bg">Nivaeu Scoliere</div>
                   <div class="col-sm m-2 rounded p-3 text-truncate demande-bg" data-toggle="tooltip" data-placement="top" title="' . $array[4] . '">Filiere</div>
                   <div class="col-sm m-2 rounded p-3 text-truncate demande-bg">Mataire</div>
                   <div class="col-sm m-2 rounded p-3 text-truncate demande-bg" data-toggle="tooltip" data-placement="top" title="' . $array[2] . '">Cour</div>
                    <div class="col-sm m-2 rounded p-3 text-truncate demande-bg">Nbr de demande</div>
                    <div class="col-sm m-2 rounded p-3 text-truncate demande-bg">Pour Ajouter l 'événement</div>
            </div>
            <hr class="backRed">
            <?php
            if (!empty($_SESSION['mailb'])) {
                $therequet = "SELECT COUNT(d.cours) AS num, d.cours,c.nomcours , m.nommatiere, f.namfiliere,n.niveau FROM demande d INNER JOIN cours c ON 
           d.cours = c.idcours INNER JOIN matiere m ON c.idmatiere = m.idmatiere  INNER JOIN filiere f on m.idfiliere = f.idfiliere INNER JOIN niveau n on f.idniveau = n.idniveau WHERE reponce = 0 GROUP BY d.cours ORDER BY COUNT(d.cours) DESC;";
                $do = mysqli_query($conn, $therequet);
                if ($do = mysqli_query($conn, $therequet)) {

                    while ($array = mysqli_fetch_array($do)) {
                        echo '
                    <div class="row  font-weight-bold align-items-center text-center" style="min-width: 16em ; max-width: 100%">
                   <div class="col-sm m-2 rounded p-3 text-truncate bg-light border" >' . $array[5] . '</div>
                   <div class="col-sm m-2 rounded p-3 text-truncate bg-light border" data-toggle="tooltip" data-placement="top" title="' . $array[4] . '">' . $array[4] . '</div>
                   <div class="col-sm m-2 rounded p-3 text-truncate bg-light border">' . $array[3] . '</div>

                   <div class="col-sm m-2 rounded p-3 text-truncate bg-light border" data-toggle="tooltip" data-placement="top" title="' . $array[2] . '">' . $array[2] . '</div>
                    <div class="col-sm m-2 rounded p-3 text-truncate bg-light border">' . $array[0] . '</div>
                    <div type="button" class="col-sm m-2 rounded p-3 text-truncate bg-light border" id="add-event-TwoW" onclick="show_it('. $array[1] .', `'. $array[2] .'`, `'. $array[3] .'`, `'. $array[4] .'`, `'. $array[5] .'`)">Ajouter l\'événement</div>
                    </div>
                    <hr class="backRed">';
                    };
                } else {
                    echo "<h5 class='text-danger text-center font-weight-bold mt-5'>Aucune demande</h5>";
                };
            } else {
                echo "<h5 class='text-danger text-center font-weight-bold mt-5'>Aucune demande</h5>";
            };;
            ?>
        </div>
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
                <input hidden id="cour_id" name="selCours">
                <p id="paraghra" class="font-weight-bold text-center"></p>
                <hr>
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



<div style="display :none;" id="pop-up-add_events" class="pop-up-add_events">
        <div class="pop-up-add_event">
            <form method="POST" action="addEvent.php">
                <div class="clouse">
                    <svg id="img_close" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                         class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 352 512">
                        <path style="fill: #F50057;" fill="currentColor"
                              d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg>
                </div>
                <div class="pop-up-add_event_matairs">
                    <div>
                        <select class="custom-select" name="nScolaire" id="nScolaire"
                                onchange="showfillier(this.value)">
                            <option selected>Niveau Scolaire</option>
                            <?php
                            $sql = "SELECT * FROM `niveau`";
                            $send = mysqli_query($conn, $sql);
                            $rows = mysqli_fetch_all($send, MYSQLI_ASSOC);
                            foreach ($rows as $row) {
                                echo '<option value=' . $row['idniveau'] . '> ' . $row['niveau'] . '</option>';
                            }
                            ?>
                        </select>
                        <select class="custom-select " name="filier" id="filiere"
                                onclick="showMatiere(this.value)">
                            <option value="" selected disabled> Choisir une filiere</option>
                        </select>
                        <select class="custom-select " name="matiere" id="matiere"
                                onclick="showCours(this.value)">
                            <option value="" SELECTED disabled>Matières</option>
                        </select>
                        <select class="custom-select " name="cours" id="cours"
                                onclick="getCours(this.value)">
                            <option value="" SELECTED disabled>Cours</option>
                        </select>
                        <input type="text" hidden id="selCours" name="selCours" value="">
                    </div>
                </div>
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
                    <textarea class="message" name="message" id="message" name="message" cols="30" rows="10"
                              placeholder="Votre message"></textarea>
                </div>
                <button type="submit">Ajouter l'événement</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
<script src="src/js/script.js"></script>
<script src="src/js/student.js"></script>
<script>
	// ** Add Event Teacher
	function showfillier(str) {
		if (str == "") {
			document.getElementById("filier").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("filiere").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getfillier.php?q=" + str, true);
			xmlhttp.send();
		}
	}

	function showMatiere(str) {
		if (str == "") {
			document.getElementById("matiere").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("matiere").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getmatiere.php?c=" + str, true);
			xmlhttp.send();
		}
	}

	function showCours(str) {
		if (str == "") {
			document.getElementById("cours").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("cours").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getcours.php?c=" + str, true);
			xmlhttp.send();
		}
	}

	function getCours(str) {
		document.getElementById('selCours').value = str;
	}

	// ** Filter Matiere
	function showfilliers(str) {
		if (str == "") {
			document.getElementById("filieres").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("filieres").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getfillier.php?q=" + str, true);
			xmlhttp.send();
		}
	}

	function showMatieres(str) {
		if (str == "") {
			document.getElementById("matieres").innerHTML = "";
			return;
		} else {
			let xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function () {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById("matieres").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "getmatiere.php?c=" + str, true);
			xmlhttp.send();
		}
	}

	function getMatieres(str) {
		document.getElementById('selMatieres').value = str;
	}

	function removeFrom(val) {
		let str;
		let xmlhttp = new XMLHttpRequest();
		str = document.getElementById("remove_" + val).value;
		xmlhttp.open("GET", "removeFrom.php?r=" + str, true);
		xmlhttp.send();
		setTimeout(reloadpage, 1000)
	}

	function reloadpage() {
		location.reload();
	}

	let exit = document.querySelector('#exit');
	let loginPopup = document.querySelector('.popup');

	function hidelist(x) {
		$('.toggll' + x).toggle('hide');
	};



    function show_it(id) {
        document.getElementById('Pop-event-TwoW').style.display = "flex";
        document.getElementById('cour_id').value = id;
        
    };
    function hide_it() {
		document.getElementById('Pop-event-TwoW').style.display = "none";
    };
    
    function show_it(id, id2,id3 ,id4,id5) {
        document.getElementById('Pop-event-TwoW').style.display = "flex";
        document.getElementById('cour_id').value = id;
        document.getElementById('paraghra').textContent = `${id5} - ${id4} - ${id3} - ${id2}`;

    };
    function send_mails(v2){
        let url = 'API/index.php?id=' + v2;
        let ar = document.getElementsByClassName('name');
        for (let i = 0 ; i < ar.length; i++){
            if(ar[i].checked){
                let x = ar[i].value;
                url = url + '&mail[]=' + x;
            }
        }
        window.open(url,"_self");       
    };

</script>