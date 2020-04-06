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
        <tr class="thead-dark">
            <th rowspan="2">Date</th>
            <th rowspan="2">Base</th>
            <th colspan="2">Responsable</th>
        </tr>
        <tr class="font-weight-bold thead-dark">
            <th>Jour</th>
            <th>Nuit</th>
        </tr>
        <?php foreach ($guardsheets as $gs) { ?>
            <tr>
                <td><?= date("Y-m-d", strtotime($gs['date'])) ?></td>
                <td><?php foreach ($bases as $b){if ($b['id']==$gs['base_id']) echo $b['name'];}?></td>
                <td><?php foreach ($crews as $c){if ($c['guardsheet_id'] == $gs['id'] && $c['boss']== 1 && $c['day'] == 1) $user = getAnUser($c['user_id']);}?><?=$user['initials']?></td>
                <td><?php foreach ($crews as $c){if ($c['guardsheet_id'] == $gs['id'] && $c['boss']== 1 && $c['day'] == 0) $user = getAnUser($c['user_id']);}?><?=$user['initials']?></td>
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

