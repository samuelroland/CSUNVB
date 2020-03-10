<?php
ob_start();
$date = date('d/M/Y');
$title = "CSU-NVB - Tâches hebdomadaires";
$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];


?>




<?php


require_once 'controler/todoListControler.php';
?>


<div class="">
    <h1>Tâches hebdomadaires</h1>

    <script src="js/todoList.js"></script>

</div>
<table class=" table table-striped">
    <div class="navbar nav-pills">
        <th>  <?php
            if ($semaine == 1) {

            } else {
                echo "<button class='btn btn-info btnmenu' > <a href='?ym=<?= $prev; ?>'><</a></button>";
            }

            ?>Semaine <?php echo $semaine; ?>
            <?php


            ?>
            <?php
            if ($semaine != 52) {


                echo "<button class='btn btn-info btnmenu'><a href='?ym=<?= $next; ?>'>></a></button>";
            }

            ?>
            <?php
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
    <div class="horizontal"><span style="font-weight: bold">  JOURNÉE</span></div>

    <?php
    foreach ($jours as $jour) {
        echo "<div class='day'><div class='dayheader'>$jour</div>";

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
