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
<table class="table">

<?php
foreach ($jours as $jour) {
    echo "<th class='table-dark dayheader' >" . $jour . "</th>";

}

    echo "<tbody>";
    foreach ($taches as $tache) {
        echo "<td class='flex-row day'>" . $tache . "</td>";

    }

?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
