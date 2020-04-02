<?php
$title = "CSU-NVB - Données";
ob_start();
setlocale(LC_ALL,"French_Swiss")
?>
    <br>
    <h1>Stupéfiants</h1>
    <h2>Site de <?= $stupsheet["base"] ?>, Semaine N <?= $stupsheet["week"] ?></h2>
    <form action="?action=chagePharmaCheck&batch_id=<?= $batch_id ?>&stupsheet_id=<?= $stupsheet_id ?>&date=<?= $date ?>" method="post">
        <table class="table-bordered">
            <thead>
            <tr><th><?= date("l j F Y", strtotime($date)) ?></th></tr>
            <tr>
                <th></th>
                <th>Matin</th>
                <th>Soir</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $batch["drug"] ?>, lot <?= $batch["number"] ?></td>
                    <td><input type="number" name="matin" value="<?= $check["start"] ?>" required></td>
                    <td><input type="number" name="soir" value="<?= $check["end"] ?>" required></td>
                    <td><input type="submit"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <th></th>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>