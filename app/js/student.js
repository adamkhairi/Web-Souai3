let The_matiers = document.getElementById("Matiers");
let cours = document.getElementById("cours");
let cours_for_SVT = `<optgroup label="Consommation de la matière organique et flux de l’énergie">
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
function show_matiers(){
    if(The_matiers.value == "math"){
        cours.innerHTML = cours_for_math;

    }else if(Matiers.value == "svt"){
        cours.innerHTML = cours_for_SVT;

    }
}
The_matiers.addEventListener("click", show_matiers)