<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle quotidien des stupéfiants pour <?= $baseinfo['name'] ?></h3>

<h3>Feuille semaine n <?= $numweek ?> en <?= $year ?> - <?php if ($weekinfo["state"] == "open") {
        echo "Ouverte";
    } else {
        echo "Fermée";
    } ?></h3>

<!-- Boutons de changement de semaines -->
<?php if (changeWeekDown($base, $numweek) == null) { ?>
    <button class="btn btn-info disabled"><</button>
<?php } else { ?>
    <a href="?base=<?= $base ?>&action=detaildrug&week=<?= changeWeekDown($base, $numweek) ?>">
        <button class="btn btn-info"><</button>
    </a>
<?php } ?>
<strong><?= $numweek ?> en <?= $year ?></strong>
<?php if (changeWeekUp($base, $numweek) == null) { ?>
    <button class="btn btn-info disabled">></button>
<?php } else { ?>
    <a href="?base=<?= $base ?>&action=detaildrug&week=<?= changeWeekUp($base, $numweek) ?>">
        <button class="btn btn-info">></button>
    </a>
<?php } ?>
<br>

<?php foreach ($drugs as $drug) { ?>
    <br>
    <table class=" table-striped table-bordered col-1 aligncenter">
        <thead>
        <tr>
            <th colspan="2"></th>   <!-- cellule vide haut gauche du tableau -->

            <?php
            foreach ($datesoftheweek as $onedate) {
                echo "<th colspan='5'>" . date("j F Y", $onedate) . "</th>";
            }
            ?>
        </tr>
        <tr>
            <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                        alt="stups logo" class="imgheadertable"></th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="3">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
        </tr>
        <tr>
            <?php for ($i = 0; $i < 7; $i++) {
                foreach ($weekinfo["novas"] as $nova) {
                    echo "<th>$nova</th>";
                }
                switch (count($weekinfo["novas"])) {
                    case 1 :
                        echo "<th></th>";
                        echo "<th></th>";
                        break;
                    case 2 :
                        echo "<th></th>";
                        break;
                }
            } ?>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2" class=""><strong><?= $drug["name"] ?></strong></td>
            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

            <td>X</td>
            <td>3-3</td>
            <td>7-7</td>
            <td>3-3</td>
            <td>X</td>

        </tr>
        <?php
        foreach ($batches

        as $batch) {
        if ($batch["drug"] == $drug["name"]) { ?>
        <tr>
            <td colspan="2" class=""><?= $batch["number"] ?></td>
            <?php foreach ($checks as $check) {
                if ($check["batch_id"] == $batch["id"]) { ?>
                    <td><?= $check["start"] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?= $check["end"] ?></td>
                <?php }
            }
            }
            } ?>
        </tbody>

    </table>

<?php }
$content = ob_get_clean();
require "gabarit.php";
?>
