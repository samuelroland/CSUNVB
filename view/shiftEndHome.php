<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<div class="row m-2">
    <h1>Remises de garde</h1>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
