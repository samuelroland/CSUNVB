<?php
ob_start();
$date = date('d/m/Y');
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
$taches =['Fax 144 Transmission','Check Ambulance et Comunication','Contrôle des stupéfiants','Check bibliothèque','Changer le bac de nettoyage','Nettoyage centrale et garage','Check bibliothèque','tâche spécifique','Formation','Remise locaux ambulances'];
$tachesnuit =['Check de nuit','Contrôle supédfiants ambulances *Morphine X4 *Sintenyl X6 NOVA°_______','tâche spécifique','Remise locaux Trasmission']
?>
<div class="">
    <h1>Tâches hebdomadaires</h1>

    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
    <th>Semaine 1
        <button class="btn btn-info" >></button>

    </th>
    </div>
</table>

<div class="week" id="calendar">
    <div class="horizontal"> <span style="font-weight: bold">  JOURNÉE</span> </div>

        <?php
        foreach ($jours as $jour) {
            echo "<div class='day'><div class='dayheader'>$jour</div>";
            echo "<div class='dayheader'>$date</div>";
            foreach ($taches as $tache) {
                echo "<div class='hour'>$tache</div>";
            }
        echo "</div>";
        }
        ?>

    </div>

<div class="week">
    <div class="horizontal nuitcolor"> <span style="font-weight: bold">NUIT</span> </div>
    <?php
    foreach ($jours as $jour) {
        echo "<div class='day'>";
        foreach ($tachesnuit as $tache) {
            echo "<div class='hour'>$tache</div>";
        }
        echo "</div>";
    }
    ?>

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
