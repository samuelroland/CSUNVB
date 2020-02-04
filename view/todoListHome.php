<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Diamche'];
$taches =[];
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>


</div>
<table class="table table-striped">
    <th>Semaine 1</th>
</table>
<table class="table">



<?php

foreach ($jours as $jour) {
    echo "<th class='table-dark'>". $jour ."</th>";

    foreach ($taches as $tache){
        echo "<th class='table-secondary'>" . $jour . "</th>";
        echo "<th class='table'>" . $jour . "</th>";
    }
}
?>
</table>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
