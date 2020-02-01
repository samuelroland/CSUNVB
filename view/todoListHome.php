<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
<div class="row m-2">
    <h1>Tâches hebdomadaires</h1>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
