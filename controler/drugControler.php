<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';
require_once 'model/basesModel.php';

function drugdetails()
{
    $drugs = getAllDrugs();
    $bases = getAllBases();
    $novas = getAllNovas();
    $stupsheets = getAllSheets();
    $batches = getAllBatches();
    require_once 'view/drugsDetails.php';
}

function drugHomePage($week, $base)
{
    $bases = getAllBases();

    require_once 'view/drugsHome.php';
}

?>
