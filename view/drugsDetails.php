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

<br>
<table class=" table-striped table-bordered col-1 aligncenter">
    <thead>
    <tr>
        <th colspan="2"></th>   <!-- cellule vide haut gauche du tableau -->

        <?php
        foreach ($datesoftheweek as $onedate) {
            if (strcmp(date("Y-m-d", $onedate), date("Y-m-d")) == 0) {   //si la date est aujourdh'hui.
                echo "<th class='bg-info' colspan='5'><img src='assets/images/today.png' class='icontoday' alt='icone jour actuel'>" . date("j F Y", $onedate) . "</th>";
            } else {
                echo "<th colspan='5'>" . date("j F Y", $onedate) . "</th>";
            }
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
                default:    //si il y en a 3 par exemple, ne rien afficher.
                    break;
            }
        } ?>
    </tr>
    </thead>
    <?php foreach ($drugs as $i => $drug) { ?>
        <tbody>
        <tr>
            <td colspan="2" class=""><strong><?= $drug["name"] ?></strong></td>
            <?php for ($f = 1; $f <= 7; $f++) { ?>
                <td>X</td>
                <td>13-13</td>
                <td>17-17</td>
                <td>13-13</td>
                <td>X</td>
            <?php } ?>
        </tr>
        <?php
        foreach ($batches

        as $batch) {  //pour chaque lot
        if ($batch["drug"] == $drug["name"]) { ?>
        <tr>
            <td colspan="2" class=""><?= $batch["number"] . " id:" . $batch['id'] ?></td>
            <?php
            foreach ($datesoftheweek as $day) {  //pour chaque jour de la semaine
                $foundacheck = false;   //si on a trouvé un check pour le jour en cours. par défaut à faux
                foreach ($listofchecks as $check) { //pour chaque check
                    if ($check["batch_id"] == $batch["id"] && strtotime($check['date']) == $day) { //si c'est le bon batch et le jour en cours ?>
                        <td><?= $check["start"] ?> Checkid = <?= $check["id"] ?></td>
                        <td class="bg-info"><?= date("d M", strtotime($check["date"])) ?></td>
                        <td class="bg-secondary"><?= "stupsheetid = " . $check['stupsheet_id'] ?></td>
                        <td class="bg-grey"><?= $check["batch_id"] ?></td>
                        <td><?= $check["end"] ?></td>
                        <?php
                        $foundacheck = true;    //donc on a trouvé.
                    }
                }
                if ($foundacheck == false) {   //si on a pas trouvé de check parce qu'il est manquant ou pas encore créé
                    echo "<td></td><td></td><td></td><td></td><td></td>";    //afficher 5 cases vides ne pas décaler les checks des jours suivants
                }
            }
            }
            } ?>
        </tbody>
    <?php }
    echo "</table><p>asjkldf</p><p>asdfjklsafjklsaj klésafjk safjklésa fjklsadf</p>";

    $content = ob_get_clean();
    require "gabarit.php";
    ?>
