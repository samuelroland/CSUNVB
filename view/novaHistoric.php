<?php
/**
 *   Title:  novaHistoric.php
 *   Author: Luís Pedro
 *   Date:   26.03.2020
 */

ob_start();
$title = "CSU-NVB - Novas Historic";
?>
<h1 style="text-align: center">Historique pour la Nova n°<?= $nova['number'] ?></h1>
<div class="my-auto">
    <table class="table table-bordered h-50 text-center">
        <tr>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php foreach ($guardsheets as $gs) { ?>
            <tr>
                <td><?= date("Y-m-d", strtotime($gs['date'])) ?></td>
                <td class="bg-<?= ($gs['state'] == 'open') ? 'success' : 'danger'?> text-light"><?= $gs['state'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>


<?php
if ($_SESSION['user'][2] == true) {
    $content = ob_get_clean();
} else {
    ob_get_clean();
    $content = "Vous n'êtes pas admin !";
}
require "gabarit.php";
?>

