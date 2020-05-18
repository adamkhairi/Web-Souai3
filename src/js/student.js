let School_level = document.getElementById("nvscolaire");
let The_matiers = document.getElementById("matiere");
let cours = document.getElementById("cours");
let lesMatair_de_1erBac = `
<option value="1">Langue arabe</option>
<option value="2">1ère langue étrangère</option>
<option value="3">Education islamique</option>
<option value="4">Histoire géographie</option>`
let lesMatair_de_2EmeBac = `
 <option value="1">Mathématique</option>
<option value="2">Sciences de la vie et de la Terre</option>
<option value="3">Physique Chimie</option>`
let cours_for_SVT = `
<optgroup label="Consommation de la matière organique et flux de l’énergie">
<option value="1">Réactions responsables de libération de l’énergie de la matière organique au niveau cellulaire</option>
 <option value="2">Le rôle du muscle squelettique strié dans la conversion d'énergie</option>
</optgroup>
<optgroup label=" Nature de l’information génétique et les mécanismes de son expression – Génie génétique">
<option value="3"> Notion de l'information génétique et les mécanismes de son expression</option>
 <option value="4">Mécanismes de l'expression de l'information génétique : les étapes de la synthèse des protéines</option>
</optgroup>
<optgroup label=" Usage des matériaux organiques et inorganiques">
<option value="5"> Les déchets ménagers résultant de l'utilisation de matériaux organiques</option>
 <option value="6">Les matières radioactives et l'énergie nucléaire</option>
 <option value="7">Les pollutions résultantes de la consommation des matériaux énergétiques et de l’usage des matériaux organiques et inorganiques dans les industries chim</option>
 <option value="8">La surveillance de la qualité et la santé des milieux naturels</option>
</optgroup>
<optgroup label=" Phénomènes géologiques accompagnant la formation des chaînes de montagnes et leur relation ‎avec la tectonique des plaques">
<option value="9">Les chaînes de montagnes actuelles et leurs relations avec la tectonique des plaques</option>
 <option value="10">Le Métamorphisme et sa relation avec la dynamique des plaques</option>
 <option value="11">La Granitisation et sa relation avec le métamorphisme</option>
</optgroup>
<optgroup label="Transmission de l’information génétique par reproduction sexuée - Génétique humaine">
<option value="12">Lois statistiques de transmission des caractères génétiques chez les diploïdes</option>
 <option value="13">Transmission de l'information génétique par reproduction sexuée</option>
</optgroup>`;
let cours_for_math = `    <option value="1">Continuité d'une fonction numérique</option>
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
</optgroup>`;
let cours_for_pc = `
<optgroup label="PHYSIQUE">
    <optgroup label=" Les ondes">
        <option value="1">Ondes progressives</option>
        <option value="2">Ondes progressives périodiques</option>
        <option value="3">Propagation d'une onde lumineuse</option>
    </optgroup>
    <optgroup label="Les transformations nucléaires">
        <option value="4">Décroissance radioactive</option>
        <option value="5">Noyau-masse et énergie</option>
    </optgroup>
    <optgroup label="  L’électricité">
        <option value="6">Dipôle RC</option>
        <option value="7">Dipôle RL</option>
        <option value="8">Oscillations libres dans un circuit RLC série</option>
        <option value="9">les ondes électromagnétiques-transmission d’informations</option>
    </optgroup>
    <optgroup label=" La mécanique">
        <option value="10">Les Lois de Newton</option>
        <option value="11">Applications de Lois de Newton: Chute verticale</option>
        <option value="12">La relation quantitative entre le total des moments et l'accélération angulaire</option>
        <option value="13">Systèmes oscillants</option>
        <option value="14">Aspects énergétiques</option>
        <option value="15">Applications de Lois de Newton: mouvements plans </option>
        <option value="16">Atome et mécanique de Newton</option>
    </optgroup>
</optgroup>
<optgroup label="CHIMIE">
    <optgroup label=" Transformations rapides et transformations lentes d'un groupe chimique">
        <option value="17">Transformations rapides et transformations lentes</option>
        <option value="18">Suivi temporel d'une transformation chimique - Vitesse de réaction</option>                         
    </optgroup>
    <optgroup label=" Les transformations non totales d'un système chimiques">
        <option value="19">Transformations chimiques s'effectuant dans les deux sens</option>
        <option value="20">Etat d'équilibre d'un système chimique</option>                         
        <option value="21">Transformations liées à des réactions acido - basiques dans une solution aqueuse</option>                         
    </optgroup>
    <optgroup label="Sens d'évolution d'un système chimique">
        <option value="22">Evolution spontanée d'un système chimique</option>
        <option value="23">Transformations spontanées dans les piles et récupération d'énergie</option>                         
        <option value="24">Exemples de transformations forcées</option>                         
    </optgroup>
    <optgroup label=" Comment contrôler l'évolution des systèmes chimiques">
        <option value="25">Réactions d'estérification et d'hydrolyse</option>
        <option value="26">Contrôle de l'évolution des groupes chimiques depuis la modification du réactif ou depuis l'autocatalytique</option>                                                
    </optgroup>
       
</optgroup>`
let cours_for_hg = `    <optgroup label="Histoire">
<option value="1">Les transformations économiques du monde capitaliste</option>
<option value="2">Présentation générale pour la matière d'Histoire</option>
<option value="3">Rivalité Impérialiste</option>
<option value="4">la vigilance intellectuelle dans l'orient arabe</option>
</optgroup>
<optgroup label="Géographie">
<option value="10">Concept de développement, la multiplicité des approches, les grandes divisions du monde</option>
<option value="11">La zone marocaine, les ressources naturelles et humaines</option>
<option value="12">Les grands choix de la politique de préparation du territoire national</option>
<option value="13">Configuration urbaine et rurale, la crise de la ville et de la campagne et les formes d'intervention</option>
</optgroup>`

function School_levels(){
	if(School_level.value == "1"){
		The_matiers.innerHTML = lesMatair_de_1erBac;
	}else if(School_level.value == "2"){
		The_matiers.innerHTML = lesMatair_de_2EmeBac;
	}
}



function show_matiers(){
	if(The_matiers.value === "1"){
		cours.innerHTML = cours_for_math;
		
	}else if(The_matiers.value === "2"){
		cours.innerHTML = cours_for_SVT;
		
	}else if(The_matiers.value === "3"){
		cours.innerHTML = cours_for_pc;
		
	}else if(The_matiers.value === "4"){
		cours.innerHTML = cours_for_hg;
		
	}
}
// let getinfos = () => {
//
// };
function getinfos() {
	let niveaux = document.getElementById('niveauS');
	niveaux.value = School_level.value;
	console.log(niveaux.value);
	let matieres = document.getElementById('matieres');
	matieres.value = The_matiers.value;
	console.log(matieres.value);
	let courss =document.getElementById('cours');
	let inputCours = document.getElementById('courses');
	inputCours.value = courss.value ;
}



// School_level.addEventListener('click' , School_levels);
The_matiers.addEventListener("click", show_matiers);

School_level.addEventListener('click' , School_levels);



