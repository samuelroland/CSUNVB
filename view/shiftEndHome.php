<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<div class="row m-2">
    <h1>Remises de garde</h1>
</div>
<a class="class='btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">La Vallée-de-Joux</a>
<a class="class='btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Payerne</a>
<a class="class='btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Saint-Loup</a>
<a class="class='btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Ste-Croix</a>
<a class="class='btn btn-outline-primary m-1 pull-right'style='bt-align: center"
   href="?action=listShiftEnd">Yverdon</a>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
