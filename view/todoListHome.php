<?php
ob_start();
//variables utiles pour les dates et jours
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$semplus = changeWeekUp("todo", $sheetid);
$semmoins = changeWeekDown("todo", $sheetid);
//$weeknum = $numweek -12.3;

?>




<?php


require_once 'controler/todoListControler.php';
require_once 'controler/drugControler.php';
?>


<div class="">

    <h1>Tâches hebdomadaires de la base <?= $baseinfo['name'] ?></h1>
    <h2>Feuille de tâches - <?= ($sheet['state'] == 'open') ? 'Ouverte' : 'Fermée' ?></h2>
</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
        <th>  <?php
            //if qui désactive le bouton s'il y a pas de semaines avant
            if ($semmoins == null) {
                echo "<button class='btn btn-info btnmenu' disabled> <</button>";
            } else {
                echo "<a href='?action=todolisthome&sheetid=$semmoins'><button class='btn btn-info btnmenu' > <</button></a>";
            }
            //affichage du numero de la semaine
            echo "Semaine $numweek en $year";
            //if qui désactive le bouton s'il y a pas de semaines après
            if ($semplus == null) {
                echo "<button class='btn btn-info btnmenu' disabled> ></button>";
            } else {
                echo "<a href='?action=todolisthome&sheetid=$semplus'><button class='btn btn-info btnmenu' > ></button></a>";
            }

            ?>

            <?php

            // Seulement les admins peuvent voir les boutons
            if ($_SESSION['user'][2] == true) {
                echo "<button class='btn btn-info btnmenu'>Ajouter une tache</button>";
                echo "<button class='btn btn-info btnmenu' >Modifier une tache</button>";
                echo "<button class='btn btn-info btnmenu' >Supprimer une tache</button>";
            }


            ?>

        </th>
    </div>
</table>

<div class="week" id="calendar">

    <div class="horizontal"><span style="font-weight: bold">JOURNÉE</span></div>
    <?php
    //code qui permets de génerer les dates (qui marche plus ou moins suite a des gros changement dans le code en géneral)
    $dt = new DateTime;
    if (isset($getyear) && isset($sheetid)) {
        $dt->setISODate($getyear, $sheetid);
    } else {
        $dt->setISODate($dt->format('o'), $weeknum + $dt->format('W'));
    }
    // $year = $dt->format('o');
    // $week = $dt->format('W');
    ?>
    <?php
    // Affichage des jours de la semaine et des jours du mois
    foreach ($jours as $numjour => $jour) {
        echo "<div class='day'><div class='dayheader'>$jour</div>";
        do {
            echo "<div  class='dayheader'>" . $dt->format('d M Y') . "</div>";
            $dt->modify('+1 day');
        } while ($weeknum == $dt->format('w'));

        //boucle qui parcours les taches et regarde si elles sont jour ou nuit
        foreach ($tasks[$numjour]['daytasks'] as $onetask) {
            echo "<div class='hour'>" . $onetask['description'] . "</div>";
        }
        echo "</div>";
    }
    ?>

</div>
<div class="week">
    <div class="horizontal nuitcolor"><span style="font-weight: bold">NUIT</span></div>

    <?php
    //Code PHP qui fait la nuit
    foreach ($jours as $numjour => $jour) {
        echo "<div class='day'>";
        //boucle qui parcours les taches et regarde si elles sont jour ou nuit
        foreach ($tasks[$numjour]['nighttasks'] as $onetask) {
            echo "<div class='hour'>" . $onetask['description'] . "</div>";
        }
        echo "</div>";
    }
    ?>

</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
