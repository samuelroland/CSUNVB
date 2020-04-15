<?php
ob_start();
$title = "Liste des feuilles de stupéfiants";
?>
    <h1>Feuilles de stupéfiants</h1>


<?php
SelectSheets("Stups"); //générer la vue de la sélection des feuilles
?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>