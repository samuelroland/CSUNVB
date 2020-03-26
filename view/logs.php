<?php
$title = "CSU-NVB - logs";
ob_start();
?>
<br>

<table>
    <thead>
    <th>Auteur</th>
    <th>Type</th>
    <th>Item</th>
    <th>Text</th>
    <th>Date</th>
    </thead>
    <tbody>
    <?php foreach ($logs as $log) { ?>
        <tr>
            <td><?= $log["author_id"] ?></td>
            <td><?= $log["item_type"] ?></td>
            <td><?= $log["item_id"] ?></td>
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
