<?php
/**
 *   Title:  medicHistoric.php
 *   Author: Luís Pedro
 *   Date:   06.04.2020
 */

ob_start();
$title = "CSU-NVB - Medics Historic";
?>

    <h1 style="text-align: center"><?= $medic['name'] ?></h1>

    <table class="table table-bordered" style="text-align: center">

        <tr class="thead-dark">
            <th colspan="100%">Utilisation des lots de <?= $medic['name'] ?> par semaine</th>
        </tr>
        <tr class="font-weight-bold">
            <th>
                <p class="text-right">Semaine</p>
                <p class="text-left">Lot</p>
            </th>
            <?php foreach ($weeks as $w){?><th><?= $w?></th><?php } ?>
        </tr>
        <?php foreach ($batch as $b){?>
            <tr>
                <td><?= $b['number'] ?></td>

            </tr>

        <?php } ?>

    </table>

<?php
if ($_SESSION['user'][2] == true) {
    $content = ob_get_clean();
} else {
    ob_get_clean();
    $content = "Vous n'êtes pas admin !";
}
require "gabarit.php";
?>