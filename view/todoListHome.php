<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
$taches =['Reparer','titi','toto'];
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
    echo "<th class='table-dark'>" . $jour . "</th>";

}

    echo "<tbody>";
    foreach ($taches as $tache){
        echo "<td class='flex-row'>" . $tache . "</td>";

    }

?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
