<?php
$title = "CSU-NVB - Données";
ob_start();
?>
    <br>
    <h1>Stupéfiants</h1>
    <h2>Site de XXXXX, Semaine N XXX</h2>
    <form action="?action=chagePharmaCheck&batch_id=&stupsheet_id=&date=" method="post">
        <table class="table-bordered">
            <thead>
            <tr><th>XXXX XX XXX XXXX</th></tr>
            <tr>
                <th></th>
                <th>Matin</th>
                <th>Soir</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>XXXX, lot XXXXX</td>
                    <td><input type="number" name="matin" required></td>
                    <td><input type="number" name="soir" required></td>
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