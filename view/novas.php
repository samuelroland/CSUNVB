<?php
/**
 *   Title:  novas.php
 *   Author: Luís Pedro
 *   Date:   23.03.2020
 */

ob_start();
$title = "CSU-NVB - Novas";
?>

<h1 style="text-align: center">Novas</h1>
<table class="table table-bordered" style="text-align: center">

    <tr class="thead-dark">
        <th>Nom</th>
    </tr>

    <?php
    foreach ($listNovas as $nova) {
        ?><tr><td><a href='?action=novaHistoric&novaid=<?=$nova['id']?>'>Nova n°<?=$nova['number']?></a></td></tr><?php
    }
    ?>

<?php
if ($_SESSION['user'][2] == true) {
    $content = ob_get_clean();
} else {
    ob_get_clean();
    $content = "Vous n'êtes pas admin !";
}
require "gabarit.php";
?>
