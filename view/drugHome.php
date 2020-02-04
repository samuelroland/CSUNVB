<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<!-- Tableau -->
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th colspan="2"><img src="" alt="Logo médicaments"></th>
    </tr>

    </thead>

</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
