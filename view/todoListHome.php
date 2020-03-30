<?php
ob_start();

$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$semplus = $sheetid + 1;
$semmoins = $sheetid - 1;
$weeknum = $numweek -12.3;

?>




<?php


require_once 'controler/todoListControler.php';
require_once 'controler/drugControler.php';
var_dump($numweek);
?>


<div class="">
    <h1>Tâches hebdomadaires de la base <?= $baseinfo['name'] ?></h1>



    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
        <th>  <?php
            if ($numweek == 1) {

            } else {
                echo "<button class='btn btn-info btnmenu' > <a href='?action=todolisthome&base=$base&sheetid=$semmoins'><</a></button>";
            }

            ?>Semaine <?php echo $numweek; ?>
            <?php


            ?>
            <?php
            if ($numweek != 53) {
                echo "<button class='btn btn-info btnmenu'><a href='?action=todolisthome&base=$base&sheetid=$semplus'>></a></button>";
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

    $dt = new DateTime;
    if (isset($getyear) && isset($sheetid)) {
        $dt->setISODate($getyear, $sheetid);
    } else {
        $dt->setISODate($dt->format('o'),$weeknum+$dt->format('W'));
    }
    // $year = $dt->format('o');
    // $week = $dt->format('W');
    ?>
    <?php
    // Affichage des jours de la semaine et des jours du mois
    foreach ($jours as $jour) {
        echo "<div class='day'><div class='dayheader'>$jour</div>";
        do {
            echo "<div  class='dayheader'>" . $dt->format('d M Y') . "</div>";
            $dt->modify('+1 day');
        } while ($weeknum == $dt->format('w'));


        /* echo "<div class='dayheader'>$date</div>";
         // Trouver le jour de la semaine d'une date donné
     $firstDay = date("N", strtotime($queryYear-$queryMonth-01));
     $lastDayLastMonth = date("t", strtotime("-1 month", strtotime("$queryYear-$queryMonth-01"))); // 31
     $monthDate = "2019-$queryMonth-01";
     // Combien y-a-t'il de jours de la semaine dans un mois 28-31
     $nbDays = date("t", strtotime($monthDate));
     $dates = date("d");

     // date numéro de semaine
     $queryDate = date("W");

     // test tout les jours de l'année' date en cours date W
     foreach ($dates as $date) {
         if($queryDate = 13) {
             return $queryDate;
         } else{
             return null;
         }
     }
     var_dump($queryDate);
     */
        foreach ($tasks as $task) {
            if ($task['daything'] == 1) {
                ?>
                <div class='hour'><?= $task['description']; ?></div><?php


            }
        }
        echo "</div>";
    }
    ?>

</div>
<div class="week">
    <div class="horizontal nuitcolor"><span style="font-weight: bold">NUIT</span></div>

    <?php
    //Code PHP qui fait la nuit
    foreach ($jours as $jour) {
        echo "<div class='day'>";
        foreach ($tasks as $task) {

            if ($task['daything'] == 0) {
                ?>
                <div class='hour'><?= $task['description']; ?></div><?php

            }

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
