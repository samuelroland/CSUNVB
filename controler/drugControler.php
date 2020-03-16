<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';
require_once 'model/basesModel.php';
require_once 'model/novasModel.php';
require_once 'model/stupSheetModel.php';
require_once 'model/batchesModel.php';

function drugdetails()  //détails d'une feuille de stups
{
    $drugs = getAllDrugs();
    $bases = getAllBases();
    $novas = getAllNovas();
    $stupsheets = getAllSheets();
    $batches = getAllBatches();
    require 'view/drugsDetails.php';
}

function drugHomePage() //page d'accueil du choix des feuilles de stups
{
    $bases = getAllBases();
    $stupsheets = getAllSheets();
    require_once 'view/drugsHome.php';
}

function changeWeekDown($base, $weekNumber)
{
    $weeks = getAllSheets();
    $weekNumber += 2000;

    $beforWeek = null;
    foreach ($weeks as $week) {
        if ($week["base_id"] == $base && $week["week"] < $weekNumber) {
            if ($week["week"] > $beforWeek) {
                $beforWeek = $week["week"];
            }
        }
    }

    if ($beforWeek == null) {
        return $beforWeek;
    } else {
        return $beforWeek - 2000;
    }
}

function changeWeekUp($base, $weekNumber)
{
    $weeks = getAllSheets();
    $weekNumber += 2000;

    $afterWeek = 10000000;
    foreach ($weeks as $week) {
        if ($week["base_id"] == $base && $week["week"] > $weekNumber) {
            if ($week["week"] < $afterWeek) {
                $afterWeek = $week["week"];
            }
        }
    }

    if ($afterWeek == 10000000) {
        return null;
    } else {
        return $afterWeek - 2000;
    }

}

?>
