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
require_once 'model/pharmaCheksModel.php';

function drugdetails($numweek)  //détails d'une feuille de stups
{
    $datesoftheweek = getDatesOfAWeek($numweek);
    $drugs = getAllDrugs();
    $bases = getAllBases();
    $novas = getAllNovas();
    $stupsheets = getAllSheets();
    $batches = getAllBatches();
    $checks = getAllCheks();
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

//recevoir les dates d'une semaine avec le numéro de la semaine.
function getDatesOfAWeek($weeknb)
{
    //Tests de tous les jours de l'année demandée jusqu'à trouver la date du premier jour de la semaine demandée.
    $datetest = strtotime("2020-01-01");    //on part du 1 janvier de l'année dans une date de test.
    $dateinrun = null;
    if (empty($weeknb) == false) {  //ne pas executer si la semaine n'est pas donnée, sinon boucle infinie !
        while (empty($dateinrun) == true) {
            if (date("W", $datetest) == $weeknb) {  //si la semaine de cette date est la semaine recherchée donc $weeknb
                $dateinrun = $datetest; //on enregistre cette date
                break;  //on sort du while pour arrêter le processus de recherche.
            } else {
                $datetest = strtotime("+1 day", $datetest); //sinon on teste avec le jour suivant.
            }
        }
    }

    //Enregistrer les valeurs dans un tableau avec les numéros des jours comme index
    for ($j = 1; $j <= 7; $j++) {
        $datesoftheweek[$j] = $dateinrun;   //jour de 1 à 7.

        $dateinrun = strtotime("+1 day", $dateinrun);   //Avancer d'un jour pour avoir la date du jour d'après
    }

    return $datesoftheweek;
}

?>
