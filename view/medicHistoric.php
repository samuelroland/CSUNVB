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
            <th>Nom</th>
        </tr>

        <?php
        foreach ($AllMedics as $medic) {
            ?>
            <tr>
            <td><a href='?action=medicsHistoric&medsid=<?= $medic['id'] ?>'><?= $medic['name'] ?></a></td></tr><?php
        }
        ?>
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