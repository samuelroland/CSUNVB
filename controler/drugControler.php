<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';

function drugdetails()
{
    require_once 'view/drugDetails.php';
}

function drugHomePage($week, $base)
{
    require_once 'view/drugHome.php';
}

?>
