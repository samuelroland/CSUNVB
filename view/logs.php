<?php
$title = "CSU-NVB - logs";
ob_start();
?>
<br>

<table>
    <thead>
    <th>Auteur</th>
    <th>semaine</th>
    <th>Text</th>
    <th>Date</th>
    </thead>
    <tbody>
    <?php foreach ($logs as $log) { ?>
        <tr>
            <td><?= $log["user"] ?></td>
            <td><?= $log["week"] ?></td>
            <td><?= $log["text"] ?></td>
            <td><?= $log["timestamp"] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
