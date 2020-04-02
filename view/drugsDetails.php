<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->

<h3>Contrôle quotidien des stupéfiants pour <?= $baseinfo['name'] ?></h3>

<h3>Feuille semaine n <?= $numweek ?> en <?= $year ?> - <?php if ($stupsheet["state"] == "open") {
        echo "Ouverte";
    } else {
        echo "Fermée";
    } ?></h3>

<!-- Boutons de changement de semaines -->
<?php if (changeWeekDown("drug", $sheetid) == null) { ?>
    <button class="btn btn-info disabled"><</button>
<?php } else { ?>
    <a href="?base=<?= $base ?>&action=detaildrug&sheetid=<?= changeWeekDown("drug", $sheetid) ?>">
        <button class="btn btn-info"><</button>
    </a>
<?php } ?>
<strong><?= $numweek ?> en <?= $year ?></strong>
<?php if (changeWeekUp("drug", $sheetid) == null) { ?>
    <button class="btn btn-info disabled">></button>
<?php } else { ?>
    <a href="?base=<?= $base ?>&action=detaildrug&sheetid=<?= changeWeekUp("drug", $sheetid) ?>">
        <button class="btn btn-info">></button>
    </a>
<?php } ?>
<a href="?action=logs&sheetid=<?= $sheetid ?>">
    <button class="btn btn-info">Journal</button>
</a>
<br>

<br>
<table class=" table-bordered col-1 aligncenter">
    <thead>
    <tr>
        <th colspan="2"></th>   <!-- cellule vide haut gauche du tableau -->

        <?php
        $nbnovas = count($stupsheet['novas']);
        $colspanforday = $nbnovas + 2;  //nombre de novas + 2 cases pharmacies
        foreach ($datesoftheweek as $onedate) {
            if (strcmp(date("Y-m-d", $onedate), date("Y-m-d")) == 0) {   //si la date est aujourdh'hui.
                echo "<th class='bg-info' colspan='$colspanforday'><img src='assets/images/today.png' class='icontoday' alt='icone pour le jour actuel'>" . date("j F Y", $onedate) . "</th>";
            } else {
                echo "<th colspan='$colspanforday'>" . date("j F Y", $onedate) . "</th>";
            }
        }
        ?>
    </tr>
    <tr>
        <th colspan="2" rowspan="2" class="imgheadertablezone"><img src="/model/dataStorage/img/logo-stups.png"
                                                                    alt="stups logo" class="imgheadertable"></th>
        <?php
        for ($j = 0; $j < 7; $j++) {
            ?>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
            <th colspan="<?= $nbnovas ?>">Véhicules</th>
            <th rowspan="2" class="txtvertical">Pharmacie</th>
        <?php }
        ?>
    </tr>
    <tr>
        <?php for ($i = 0; $i < 7; $i++) {
            foreach ($stupsheet["novas"] as $nova) {
                echo "<th>$nova</th>";
            }

        } ?>
    </tr>
    </thead>
    <?php foreach ($drugs as $i => $drug) { ?>
        <tbody>
        <tr class="bg-lightgrey">
            <td colspan="2" class=""><strong><?= $drug["name"] ?></strong></td>
            <?php for ($f = 1; $f <= 7; $f++) { //pour les 7 jours de la semaine.
                ?>
                <td>X</td>
                <?php
                foreach ($stupsheet["novas"] as $nova) {
                    echo "<td>13-13</td>";  //la case pour novacheck
                }
                ?>
                <td>X</td>
            <?php } ?>
        </tr>
        <?php
        foreach ($batches

        as $batch) {  //pour chaque lot
        if ($batch["drug_id"] == $drug["id"] && in_array($batch['number'], $stupsheet['batches'])) {
        switch ($batch['state']) {
            case "new":
                $CssClassForTheBatch = "bg-lightgreen";
                break;
            case "inuse":
                $CssClassForTheBatch = "bg-lightblue";
                break;
            case "used":
                $CssClassForTheBatch = "bg-violet";
                break;

        }
        ?>
        <tr class="<?= $CssClassForTheBatch ?>">
            <td colspan="2" class=""><?= $batch["number"] . " id:" . $batch['id'] ?> state=<?= $batch["state"] ?></td>
            <?php
            foreach ($datesoftheweek as $day) {  //pour chaque jour de la semaine
                $foundacheck = false;   //si on a trouvé un check pour le jour en cours. par défaut à faux
                foreach ($listofchecks as $check) { //pour chaque check
                    if ($check["batch_id"] == $batch["id"] && strtotime($check['date']) == $day) { //si c'est le bon batch et le jour en cours ?>
                        <td><?= $check["start"] ?> Checkid = <?= $check["id"] ?></td>
                        <?php foreach ($stupsheet['novas'] as $nova) { ?>
                            <td><?= $sheet[$date][$nova_id][$batch_id] ?></td>
                        <?php } ?>

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
            echo "<tr>";
            } ?>
        </tbody>
    <?php }
    echo "</table>";
    echo "<p> </p>";

    $content = ob_get_clean();
    require "gabarit.php";
    ?>
