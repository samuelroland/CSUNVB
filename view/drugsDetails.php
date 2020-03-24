<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
$base = $bases[$_GET["base"]];
$week = getASheet($_GET["week"] + 2000)
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle des stupéfiants Hebdomadaire</h3>
<?php if (changeWeekDown($_GET["base"], $_GET["week"]) == null) { ?>
    <button class="btn btn-info disabled"><</button>
<?php } else { ?>
    <a href="?base=<?= $_GET["base"] ?>&action=detaildrug&week=<?= changeWeekDown($_GET["base"], $_GET["week"]) ?>">
        <button class="btn btn-info"><</button>
    </a>
<?php } ?>

<h3>Semaine N <?= $_GET["week"]; ?> - Feuille <?php if ($week["state"] == "open") {
        echo "ouverte";
    } else {
        echo "fermée";
    } ?></h3>
<?php if (changeWeekUp($_GET["base"], $_GET["week"]) == null) { ?>
    <button class="btn btn-info disabled">></button>
<?php } else { ?>
    <a href="?base=<?= $_GET["base"] ?>&action=detaildrug&week=<?= changeWeekUp($_GET["base"], $_GET["week"]) ?>">
        <button class="btn btn-info">></button>
    </a>
<?php } ?>


<?php foreach ($drugs as $drug) { ?>
    <table class=" table-striped table-bordered col-1 aligncenter">
        <thead>
        <tr>
            <th colspan="2"></th>
            <th colspan="5">lundi 10 févr 20</th>
            <th colspan="5">mardi 11 févr 20</th>
            <th colspan="5">mercredi 12 févr 20</th>
            <th colspan="5">jeudi 13 févr 20</th>
            <th colspan="5">vendredi 14 févr 20</th>
            <th colspan="5">samedi 15 févr 20</th>
            <th colspan="5">dimanche 15 févr 20</th>
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
                foreach ($week["novas"] as $nova) {
                    echo "<th>$nova</th>";
                }
                switch (count($week["novas"])) {
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
        <?php foreach ($batches as $batch) {
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
                <?php } } } } ?>
        </tbody>

    </table>

<?php }
$content = ob_get_clean();
require "gabarit.php";
?>
