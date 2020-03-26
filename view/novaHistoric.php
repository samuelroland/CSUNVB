<?php
/**
 *   Title:  novaHistoric.php
 *   Author: Luís Pedro
 *   Date:   26.03.2020
 */

ob_start();
$title = "CSU-NVB - Novas Historic";
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

