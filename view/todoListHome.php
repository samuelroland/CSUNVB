<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
$taches =['Reparer','titi','toto','tete'];
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>


</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
    <th>Semaine 1
        <button class="btn btn-info" >></button>
        <button class="btn btn-info" >Ajouter une tache</button>
        <button class="btn btn-info" >Modifier une tache</button>
        <button class="btn btn-info" >Supprimer une tache</button>

    </th>
    </div>
</table>

<div class="week">
    <div class="day">
        <div class="dayheader">Lundi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Réparations</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Mardi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Formation</div>
        <div class="hour">Check Bibliothèque</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Mercredi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Do something</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Jeudi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Réparations</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Vendredi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Réparations</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Samedi</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Lessive</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
    </div>
    <div class="day">
        <div class="dayheader">Dimanche</div>
        <div class="hour">Check ambulances</div>
        <div class="hour">Check stupéfiants</div>
        <div class="hour">Check Sécurité</div>
        <div class="hour">Nettoyages</div>
        <div class="hour">Remise locaux</div>
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
