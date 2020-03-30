<?php
/**
 *   Title:  novaHistoric.php
 *   Author: Luís Pedro
 *   Date:   26.03.2020
 */

ob_start();
$title = "CSU-NVB - Novas Historic";
?>
<h1 style="text-align: center">Historic pour la Nova n°<?= $nova['number'] ?></h1>
<table>
    <tr>
        <th>Date</th>
        <th>Status</th>
    </tr>
    <tr>
        <?php foreach ($guardsheets as $gs){?>
        <td><?=date("d-m-Y",strtotime("Y-m-d",$gs['date']))?></td>
        <td></td>
        <?php }?>
    </tr>
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

