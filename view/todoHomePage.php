<?php
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
    <h1>Feuilles de Tâches hebdomadaires</h1>


<?php SelectSheets("Todo"); //générer la vue de la sélection des feuilles
?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>