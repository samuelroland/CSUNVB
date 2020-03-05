<?php
ob_start();
$title = "CSU-NVB - Liste Stupéfiants";
?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>