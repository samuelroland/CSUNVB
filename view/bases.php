<?php
/**
 *   Title:  bases.php
 *   Author: Luís Pedro
 *   Date:   16.03.2020
 */


ob_start();
$title = "CSU-NVB - Bases";

?>
<h1 style="text-align: center">Bases</h1>
<table class="table table-bordered" style="text-align: center">
    <tr class="thead-dark">
        <th>Nom</th>
    </tr>
    <?php
    foreach ($listBases as $base) {
        echo "<tr><td>" .$base['name'] . "</td></tr>";
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
