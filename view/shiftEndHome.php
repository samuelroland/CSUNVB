<?php
ob_start();
$title = "CSU-NVB - Remise de garde";


?>
<script src="js/shiftEnd.js"></script>
<div class="row m-2">
    <h1>Remises de garde</h1>
    <table class="table table-bordered  table-striped" style="text-align: center">
        <thead class="thead-dark">
            <th>Date</th>
            <th>État</th>
            <th>Véhicule</th>
            <th>Résponsable</th>
            <th>Équipage </th>
            <th></th>
        </thead>
        <?php

        foreach ($guardsheets as $guardsheet) {

            if ($guardsheet['base_id'] == $_SESSION['user'][3]['id']) {

                ?>

                <tr>
                    <td><?= $guardsheet['date']; ?></td>
                    <?php if ($guardsheet['state'] == "open") {?><td class="table-success">
                        <?= "ouvert" ?></td>
                            <?php
                        } else {
                            ?><td class="table-danger"><?= 'fermé' ?></td><?php
                        } ?>

                    <td><?php foreach ($guardusenovas as $guardusenova) {
                            if ($guardsheet['id'] == $guardusenova['guardsheet_id']) {

                                foreach ($novas as $nova) {
                                    if ($guardusenova['nova_id'] == $nova['id'] && $guardusenova['day'] == 1) {
                                        ?>
                                        <span class="font-weight-bold">Jour : </span><?= $nova['number'] //afficher numéro véhicule Jour       ?><br>
                                    <?php } else if ($guardusenova['nova_id'] == $nova['id'] && $guardusenova['day'] == 0) { ?>
                                        <span class="font-weight-bold"> Nuit : </span><?= $nova['number'] //afficher numéro véhicule Nuit       ?>
                                        <?php
                                    }
                                }
                            }
                        } ?>
                    </td>
                    <td>
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
            }
        } ?>

    </table>


    <?php
    /*</div>
    <a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
       href="?action=listShiftEnd" id="btValDeJoux">La Vallée-de-Joux</a>
    <a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
       href="?action=listShiftEnd">Payerne</a>
    <a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
       href="?action=listShiftEnd">Saint-Loup</a>
    <a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
       href="?action=listShiftEnd">Ste-Croix</a>
    <a class="btn btn-outline-primary m-1 pull-right'style='bt-align: center"
       href="?action=listShiftEnd">Yverdon</a>

    <div id="divValleDeJoux" class="">

        <table class="table table-bordered" style="text-align: center">

            <tr>Matériel et Télécom
                <td></td>
                <td>JOUR</td>
                <td>NUIT</td>
                <td>REMARQUE(APPAREIL MANQUANT,ÉTAT DE CHARGE, DEFECTUOSITÉS)</td>
            </tr>
            <tr>
                <td>Radios</td>
                <td onclick="f_check_rd_J"><input type="checkbox" id="check_rd_J">OK</td>
                <td onclick="f_check_rd_J"><input type="checkbox" id="check_rd_N">OK</td>
                <td><textarea cols=100% rows="1"></textarea> </td>
            </tr>
            <tr>
                <td>Détecteurs CO</td>
                <td><input type="checkbox">OK</td>
                <td><input type="checkbox">OK</td>
                <td><textarea cols=100% rows="1"></textarea> </td>
            </tr>
            <tr>
                <td>Téléphones</td>
                <td><input type="checkbox">OK</td>
                <td><input type="checkbox">OK</td>
                <td><textarea cols=100% rows="1"></textarea> </td>
            </tr>
            <tr>
                <td>Gt info avisé</td>
                <td><input type="checkbox">OK</td>
                <td><input type="checkbox">OK</td>
                <td><textarea cols=100% rows="1"></textarea> </td>
            </tr>
            <tr>
                <td>Annonce 144</td>
                <td><input type="checkbox">OK</td>
                <td><input type="checkbox">OK</td>
                <td><textarea cols=100% rows="1"></textarea> </td>
            </tr>


        </table>
    </div>*/

    $content = ob_get_clean();
    require "gabarit.php";
    ?>
