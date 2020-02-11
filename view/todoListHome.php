<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
$taches =['Reparer','titi','toto','tete'];
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>

    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
    <th>Semaine 1
        <button class="btn btn-info" >></button>
        <button class="btn btn-info" id="cmdedit" >Ajouter une tache</button>
        <button class="btn btn-info" >Modifier une tache</button>
        <button class="btn btn-info" >Supprimer une tache</button>

    </th>
    </div>
</table>

<div>

</div>
<div class="div">

<div class="week">

    <span class="horizontal">Journée  _  Nuit</span>
    <div class="day">
        <div class="dayheader">Lundi</div>
        <div id="div1" class="hour">Check ambulances</div>
        <div id="div2" class="hour">Check stupéfiants</div>
        <div id="div3" class="hour">Réparations</div>
        <div id="div4" class="hour">Nettoyages</div>
        <div id="div5" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Mardi</div>
        <div id="div6"  class="hour">Check ambulances</div>
        <div id="div7" class="hour">Check stupéfiants</div>
        <div id="div8" class="hour">Formation</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Mercredi</div>
        <div id="div11"  class="hour">Check ambulances</div>
        <div id="div12"  class="hour">Check stupéfiants</div>
        <div id="div13"  class="hour">Do something</div>
        <div id="div14"  class="hour">Nettoyages</div>
        <div id="div15"  class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Jeudi</div>
        <div id="div16"  class="hour">Check ambulances</div>
        <div id="div17"  class="hour">Check stupéfiants</div>
        <div id="div18"  class="hour">Réparations</div>
        <div id="div19"  class="hour">Nettoyages</div>
        <div id="div20"  class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Vendredi</div>
        <div id="div21"  class="hour">Check ambulances</div>
        <div id="div22"  class="hour">Check stupéfiants</div>
        <div id="div23"  class="hour">Réparations</div>
        <div id="div24"  class="hour">Nettoyages</div>
        <div id="div25"  class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Samedi</div>
        <div id="div26"  class="hour">Check ambulances</div>
        <div id="div27"  class="hour">Check stupéfiants</div>
        <div id="div28"  class="hour">Lessive</div>
        <div id="div29"  class="hour">Nettoyages</div>
        <div id="div30"  class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>

    </div>
    <div class="day">
        <div class="dayheader">Dimanche</div>
        <div id="div31"  class="hour">Check ambulances</div>
        <div id="div32"  class="hour">Check stupéfiants</div>
        <div id="div33"  class="hour">Check Sécurité</div>
        <div id="div34"  class="hour">Nettoyages</div>
        <div id="div35"  class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
        <div id="div9" class="hour">Check Bibliothèque</div>
        <div id="div10" class="hour">Remise locaux</div>
    </div>
</div>
</div>

<!--
<div class="">
    <div class="week">
        <div class="">
<?php
/*
foreach ($jours as $jour) {
    echo "<span class=' dayheader' >" . $jour . "</span>";
    echo "</div>";
}
echo "</div>";


    foreach ($taches as $tache) {
        echo "<span class=' hour'>" . $tache . "</span>";

    }
*/
?>
</div>-->
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
