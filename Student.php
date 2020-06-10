<?php
require("connexion.php");
$pageTitle = "Etudiant Profil";
//session_start();
include "navbar.php";
if (empty($_SESSION['mail'])) {
    header('Location: index.php');
}
if(!empty($_GET['m'])){
 if ($_GET['m'] == 'done') {
        //        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
                echo "
        
        <div class=\"alert alert-success text-center m-0 alert-dismissible fade show\" role=\"alert\">
          Votre modification a été effectué avec succès.
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
                ";
            }elseif ($_GET['m'] == 'done2') {
                //        echo "<script>alert('Votre inscription a été effectué avec succès.')</script>";
                        echo "
                
                <div class=\"alert alert-success text-center m-0 alert-dismissible fade show\" role=\"alert\">
                  Votre demande a été effectué avec succès.
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
                        ";
                    }
}


?>
<div class="vertical-nav pt-lg-5" id="sidebar">
    <div class="mb-4  menu-head text-center">
        <i class="far fa-user img-thumbnail shadow-sm rounded-circle p-3"
           style="font-size: 40px; color: #00BFA6"></i>
        <div class="media d-flex align-items-center ">
            <div class="media-body">
                <h3 class="">
                <?php
                    if (!empty($_SESSION['userid'])) {
                        $sqls = "SELECT e.nometudiant,e.prenometudiant,e.mailetudiant,n.niveau, f.namfiliere, e.filiere FROM etudiant e INNER JOIN niveau n ON n.idniveau = e.niveauscolaire inner JOIN filiere f on f.idfiliere = e.filiere WHERE e.idetudiant ='". $_SESSION["userid"] ."';";
                        $ro = mysqli_query($conn, $sqls);
                        $r = mysqli_fetch_array($ro);
                        $_SESSION['firstName'] = $r['nometudiant'];
                        $_SESSION['lastName'] = $r['prenometudiant'];
                        $_SESSION['nvScolaire'] = $r['niveau'];
                        $_SESSION['banche'] = $r['namfiliere'];
                        $_SESSION['filiere'] = $r['filiere'];
     
                     
                        echo "
                        <h5>" . $r['nometudiant'] . " " . $r['prenometudiant'] . "</h5>
                
                        ";
                    }
                    ?>
                </h3>
                <p class="font-weight-light text-muted mb-0">Etudiant</p>
                <?php
                if (!empty($_SESSION['userid'])) {
                    $sqls = "SELECT e.nometudiant,e.prenometudiant,e.mailetudiant,n.niveau, f.namfiliere FROM etudiant e INNER JOIN niveau n ON n.idniveau = e.niveauscolaire inner JOIN filiere f on f.idfiliere = e.filiere WHERE e.idetudiant ='". $_SESSION["userid"] ."' ";
                    $ro = mysqli_query($conn, $sqls);
                    $r = mysqli_fetch_array($ro);
   
                    echo "
                        <h6>" . $r['niveau'] . "</h6>
                        <h6>" . $r['namfiliere'] . "</h6>
                        ";
                }
                ?>
                </h6>
            </div>
        </div>
        <div class="mt-4 p-2">

     <h6 class='text-center text-truncate text-center'>
                <?php
                if (!empty($_SESSION['mail'])) {
                    echo("  " . $_SESSION['mail']);
                }
                ?>
            </h6>
        </div>
        <!--   Links Of each section -->
        <div class="d-flex mt-2 flex-column justify-content-center align-items-center">
            <?php
            if (!empty($_SESSION['mail'])) {
                echo "<div class='mt-2'>
                <a  href=\"Update.php\">
                <button class='btn btn-light border rounded-pill mb-3' >Modifier le Profil</button>
            </a>
            <a  href=\"logout.php\">
                <button class='btn btn-danger rounded-pill'>Déconnexion</button>
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

    <div class="row  w-100 flex-nowrap justify-content-around m-auto  ccc">
        <?php
        if (!empty($_SESSION['mail'])) {
            $idetudiant = $_SESSION['userid'];
            // $sql = "SELECT d.idetudiantc, d.iddemande ,d.cours, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM demande d INNER JOIN theevanets e ON d.cours = e.coursID INNER JOIN 
            //         benevole b ON e.ProfID = b.idbenevole INNER JOIN cours c ON c.idcours = e.coursID WHERE e.delay > CURRENT_DATE;";
            // $sql = "SELECT e.coursID, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM theevanets e INNER JOIN cours c ON e.coursID = c.idcours INNER JOIN matiere m ON c.idmatiere = m.idmatiere INNER JOIN benevole b ON b.idbenevole = e.ProfID  WHERE m.idfiliere = ". $_SESSION['filiere'] ." AND e.delay > CURRENT_DATE ;";
            $sql = "SELECT e.coursID, e.eventID , b.nombenevole ,b.prenombenevole ,e.hours ,e.theDate, c.nomcours FROM theevanets e INNER JOIN cours c ON e.coursID = c.idcours INNER JOIN matiere m ON c.idmatiere = m.idmatiere INNER JOIN benevole b ON b.idbenevole = e.ProfID WHERE NOT EXISTS(SELECT idetudiant FROM reponce WHERE idevent = e.eventID AND idetudiant = ". $_SESSION['userid'] .") AND m.idfiliere = '". $_SESSION['filiere'] ."' AND e.delay > CURRENT_DATE ";
            $exec_requete = mysqli_query($conn, $sql);
            $reponse = mysqli_fetch_array($exec_requete);
            if (!empty($reponse)) {
                $domende = array();
                $eventID = array();
                    if ($exec_requete = mysqli_query($conn, $sql)) {
                        while ($reponse = mysqli_fetch_array($exec_requete)) {
                            array_push($eventID, $reponse['eventID']);
                            $namefomr = 'reponce_' . $reponse['eventID'];
                            $name = 'getans_' . $reponse['eventID'];
                            echo "
                    <form name='" . $namefomr . "' action=\"answer.php\" method='POST' class=\"width ml-3\">
                        <div class=\"modal-dialog width shdow\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header backOrange\">
                                    <h5 class=\"modal-title text-center \">Évènement</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body pl-4\">     
                                    <h5>Cour : " . $reponse['nomcours'] . "</h5>
                                    <h6>l'heure : " . $reponse['hours'] . "</h6>
                                    <h6>la Date : " . $reponse['theDate'] . "</h6>
                                    <div class=\"row ml-2\">
    
                                        <p>Organisé par: </p>
                                        <h5 class=\"ml-4\">" . $reponse['nombenevole'] . "  " . $reponse['prenombenevole'] . "</h5>
                                    </div>
                                </div>
                                <div class=\"modal-footer text-center d-flex justify-content-around\">
                                    <p>Intéressé(e) ?</p>
                                    <div class='d-flex align-items-center w-25'>
                                        <input class='mb-2' type='radio' name='" . $name . "' value='1' id='oui'>
                                        <label for='oui' >Oui</label>
                                    </div>
                                    <div class='d-flex align-items-center w-25'>
    
                                        <input class='mb-2' type='radio' name='" . $name . "' value='2' id='non'>
                                        <label  for='non'>Non</label>
                                    </div>
                                </div>
                            <button type=\"submit\" id='ansnon' class=\"btn m - 0 w - 25 rounded - pill backRed\">Envoyer</button>
    
                            </div>
                        </div>
                    </form>
                        ";
                        }
                        
                        $_SESSION['domende'] = $domende;
                        $_SESSION['event'] = $eventID;
                    }
                }else {
                    echo "<h5 class='text-center font-weight-bold text-dark pb-3'> Aucun événement pour vous !</h5>";
         
                }
        } 
        ?>
    </div>
    <div class="">
        <div class="Post_problem">
            <form action="addQst.php" method="post">
                <h2 class="historique d-inline-block ">Poster un problème:</h2>
                <div class="post_pro d-flex align-items-center">
                    <div class="find_help">
                        <div>
                            <!-- Matiers -->
                            <select class="custom-select" name="matiere" id="matiere"
                                    onchange="showCours(this.value)">
                                <option value="" SELECTED disabled>Matière</option>
                                <?php
                                $sql = "SELECT * FROM `matiere` WHERE idfiliere = " . $_SESSION['filiere'] . "";
                                $send = mysqli_query($conn, $sql);
                                $rows = mysqli_fetch_all($send, MYSQLI_ASSOC);
                                foreach ($rows as $row) {
                                    echo '<option value=' . $row['idmatiere'] . '> ' . $row['nommatiere'] . '</option>';
                                }
                                ?>
                            </select>
                            <input type="text" hidden value="" name="mt" id="matieres">
                        </div>
                        <div>
                            <select class="hour2" name="cours" id="cours">
                                <option value="" SELECTED disabled>Cours</option>
                            </select>
                        </div>
                    </div>
                    <div class="text_message form-group">
                    <textarea name="description" id="message" cols="30" rows="10"
                              placeholder="Votre message"></textarea>
                    </div>
                </div>
                <div>
                    <button class="btn_post" type="submit">Soumettre</button>
                </div>
            </form>
        </div>
        <div class="containers">
        <h4 class="historique">Évènements :</h4>
        <div class="d-flex justify-content-around flex-wrap align-items-center">
            <?php
            setlocale(LC_ALL, 'fr_FR');
            $sql = "SELECT e.coursID,e.message , e.hours, e.theDate, c.nomcours, e.eventID FROM theevanets e INNER JOIN cours c ON e.coursID = c.idcours INNER JOIN reponce r ON e.eventID = r.idevent WHERE r.idetudiant = '". $_SESSION['userid'] ."' AND r.reponce = '1' ";
            $run = mysqli_query($conn, $sql);
            $Arry = mysqli_fetch_all($run, MYSQLI_ASSOC);
            if ($run = mysqli_query($conn, $sql)) {
                foreach ($Arry as $Arr) {
                    $newDate = dateToFrench($Arr['theDate'], "l , d , M , Y");
                    echo "
            <div class=\"card m-2 position-relative\" style='max-width: 26em'>
                <div class='card-header text-center backOrange'>
                    <h4 class=\"card-title font-weight-bold mt-2 \">" . $Arr['nomcours'] . "</h4>
                </div>
                <div class=\"card-body text-left\">
                    <p class=\"card-text text-wrap\">Description sur l'évènement : <br>" . $Arr['message'] . "</p>
                    <hr>
                    <p class=\"card-text\">Le " . $newDate . ' à ' . $Arr['hours'] . "</p>
                    <hr>
                  
                </div>
          
                <div onclick=(sup(". $Arr['eventID'] .")) class=\"row justify-content-end m-3\"><i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i></div>
             
          <div id=\"eventlist\" class=\"popup hide toggll" . $Arr['eventID'] . " \">
            <section class=\"sign-in \">
                <div class=\"container pb-3\">
                    <div id=\"exit\" onclick='hidelist(" . $Arr['eventID'] . ")'>
                        <i class=\"fas fa-times\"></i>
                    </div>
                    <form action=\"API/index.php\" method=\"post\">
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
                                <input type='text' hidden name='ids' value='" . $row['4'] . "'>
                                <input type=\"checkbox\" value='" . $row['3'] . "' class=\"custom-control-input\" id=\"" . $row['3'] . "" . $row['4'] . "\" name='emails[]'>
                                <label class=\"custom-control-label\"  for=\"" . $row['3'] . "" . $row['4'] . "\">Choisir</label>
                                </div>
                              </th>
                              <td>" . $row['2'] . "</td>
                              <td>" . $row['1'] . "</td>
                              <td>" . $row['3'] . "</td>
                            </tr>  
                    ";
                    };
                    echo "
                            </tbody>
                            </table>
                            <div class=\"text-right\">
                                <button type=\"submit\" class=\"btn bg-dark text-light m-1 rounded-pill\">Envoyer !</button>
                            </div>
                        </div>
                    </form>
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
            <h2 class="historique d-inline-block bBottom">Historique:</h2>
            <div class="d-flex flex-wrap justify-content-around m-2">
                <?php
                $sql = "SELECT * FROM demande where
               idetudiantc = '" . $_SESSION['userid'] . "'";
                $result = mysqli_query($conn, $sql);
                if (!empty($result)) {
//                $row = mysqli_fetch_array($result);
                    $demandes = [];
                    $fname = $_SESSION['firstName'];
                    $lname = $_SESSION['lastName'];
                    while ($row = mysqli_fetch_array($result)) {
                        array_push($demandes, $row[1]);
                        $requet = "SELECT c.idcours, c.nomcours , m.nommatiere,f.namfiliere,n.niveau FROM cours c 
                        INNER JOIN matiere m on c.idmatiere = m.idmatiere 
                        INNER JOIN filiere f on m.idfiliere = f.idfiliere
                        INNER JOIN niveau n on f.idniveau = n.idniveau
                        where idcours =  '" . $row[3] . "'";

                        $results = mysqli_query($conn, $requet);
                        $row1 = mysqli_fetch_array($results);
                        echo "
                        <div class=\"card mb-4 rounded-lg position-relative m-2\" style=\"width: 18rem;\">
                           <div class=\"card-body  p-0\">
                           <div class='backOrange rounded-top pt-2 p-1 text-center'> 
                            <h5 class=\"card-title font-weight-bold mt-2\">$row1[2]</h5>
                            </div>
                            <div class='p-2 m-1 text-center'>
                            <h6 class=\"card-title mb-1\">- $row1[4] -</h6>
                            <h6 class=\"card-title\">$row1[3]</h6>
                            <hr>
                            <h6 class=\"card-title mt-2\">$row1[1]</h6>
                           <hr>
                            <p class=\"card-text  m-2\">$row[1]</p>
                           </div>  
                            <button class='btn deldemande' type='submit' onclick='removeFrom(" . $row['iddemande'] . ")'>
                                 <input type='text' hidden value='" . $row['iddemande'] . "' id='remove_" . $row['iddemande'] . "'>
                                      <i class=\"fas fa-trash-alt\"></i>
                             </button>
                          </div>
                        </div>
                         ";
                    }
                } else {
                    echo "<h5 class=\"activité\">aucune activité</h5>";
                }; ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<script src="src/js/general.js"></script>
<script src="src/js/student.js"></script>
<script>
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

	function removeFrom(val) {
		let str;
		let xmlhttp = new XMLHttpRequest();
		str = document.getElementById("remove_" + val).value;
		xmlhttp.open("GET", "removeFrom.php?e=" + str, true);
		xmlhttp.send();
		setTimeout(reloadpage, 1000)
	}
    function sup(val) {
		let str;
		let xmlhttp = new XMLHttpRequest();
	
		xmlhttp.open("GET", "sup.php?s=" + val, true);
		xmlhttp.send();
		setTimeout(reloadpage, 1000)
	}

	function reloadpage() {
		location.reload();
	}
</script>