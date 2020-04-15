<?php
/*
 * Program : CSUNVBA2 affichage de la vue todoHomePage des todos
 * Author: Gatien Jayme / Miguel Soares
 * Date: 04.2020
 * Version: 1.0
 * */
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>
    <h1>Feuilles de Tâches hebdomadaires </h1>


<?php SelectSheets("Todo"); //générer la vue de la sélection des feuilles
?>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>