<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>