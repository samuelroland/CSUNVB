<?php
ob_start();
$title = "CSU-NVB - Remise de garde";


?>
<script src="js/shiftEnd.js"></script>
<div class="row m-2">
    <h1>Remises de garde</h1>


        <select class="custom-select" id="Sites" name="base">
            <?php
            foreach ($bases as $base) {
                if ($base['id'] == $_SESSION['user'][3]['id']) { //si la base est celle de la session
                    echo "<option value=\"" . $base['id'] . "\" selected>{$base['name']}</option>";   //la selectionner par défaut
                } else {
                    echo "<option value=\"" . $base['id'] . "\">{$base['name']}</option>";
                }
            }
            ?>
    </select>
    <table class="table table-bordered  table-striped" style="text-align: center">
        <thead class="thead-dark">
        <th>Date</th>
        <th>État</th>
        <th>Véhicule</th>
        <th>Résponsable</th>
        <th>Équipage</th>
        <th></th>
        </thead>
        <?php

        foreach ($guardsheets as $guardsheet) {


        ?>

        <tr>
            <td><?= $guardsheet['date']; ?></td>
            <?php if ($guardsheet['state'] == "open") { ?>
            <td class="table-success">
                <?= "ouvert" ?></td>
            <?php
            } else {
            ?>
            <td class="table-danger"><?= 'fermé' ?></td><?php
            } ?>

            <td>
                Jour : <?= $guardsheet['novaday'] ?><br>
            Nuit : <?= $guardsheet['novanight'] ?><br>

            </td>
            <td>
                <?php var_dump($guardsheet['bossday']); ?><br>
                <?php var_dump($guardsheet['bossnight']); ?><br>
                <?php foreach ($crews as $crew) {
                if ($guardsheet['id'] == $crew['guardsheet_id']) {
                foreach ($users as $user) {
                if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 1 && $crew['day'] == 1)) {//affiche le responsable Jour/Nuit
                ?><span class="font-weight-bold">Jour : </span><?= $user['initials'] ?><br><?php
                } else if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 1 && $crew['day'] == 0)) {
                ?> <span class="font-weight-bold"> Nuit : </span><?= $user['initials'] ?><?php
                }
                }
                }
                } ?>
            </td>
            <td>
                <?php var_dump($guardsheet['teamday']); ?><br>
                <?php var_dump($guardsheet['teamnight']); ?><br>
                <?php foreach ($crews as $crew) {
                if ($guardsheet['id'] == $crew['guardsheet_id']) {
                foreach ($users as $user) {
                if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 0 && $crew['day'] == 1)) {//affiche le responsable Jour/Nuit
                ?><span class="font-weight-bold">Jour : </span><?= $user['initials'] ?><br><?php
                } else if ($crew['user_id'] == $user['id'] && ($crew['boss'] == 0 && $crew['day'] == 0)) {
                ?> <span class="font-weight-bold"> Nuit : </span><?= $user['initials'] ?><?php
                }
                }
                }
                } ?>
            </td>
            <td><a href='?action=shiftEndList&sheetid=<?= $guardsheet['id']; ?>' class='btn btn-primary m-1 '
                   style='bt-align: center'>Vue détaillée</a>
            </td>
        </tr>


        <?php

        } ?>

    </table>


    <?php

    $content = ob_get_clean();
    require "gabarit.php";
    ?>
