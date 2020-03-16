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

    <tr>
        <th>Nom</th>
    </tr>

    <?php
    foreach ($listBases as $base) {
        echo "<tr><td>" .$base['name'] . "</td></tr>";
        if ($_SESSION['user'][3][1] == $base['id'])
            {
                echo "</td><td>Ceci est votre utilisateur</td></tr>";
            }
    }
    ?>


</table>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
