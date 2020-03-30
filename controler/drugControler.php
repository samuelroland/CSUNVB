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
require_once 'model/logsModel.php';

function drugdetails($week, $base)  //détails d'une feuille de stups
{
    //$week = par ex: 2012 donc semaine 12 de 2020
    $numweek = substr($week, 2);    //extraire le numéro de la semaine uniquement.
    $year = substr($week, 0, 2) + 2000;    //extraire l'année

    $datesoftheweek = getDatesOfAWeek($numweek, $year);
    $drugs = getAllDrugs();
    $bases = getAllBases();
    $novas = getAllNovas();
    $batches = getAllBatches();


    $baseinfo = $bases[$base];
    $weekinfo = getASheet($week, $base);
    var_dump($weekinfo);
    $sheetid = $weekinfo['id'];
    $listofchecks = getAllChecksByASheetId($sheetid);
    require 'view/drugsDetails.php';
}

function logs($weekId)
{
    $logs = getLogsByItemId($weekId);
    require 'view/logs.php';
}

function drugHomePage() //page d'accueil du choix des feuilles de stups
{
    $bases = getAllBases();
    $stupsheets = getAllSheets();
    require_once 'view/drugsHome.php';
}

//recevoir les dates d'une semaine avec le numéro de la semaine.
function getDatesOfAWeek($weeknb, $year)
{
    //Tests de tous les jours de l'année demandée jusqu'à trouver la date du premier jour de la semaine demandée.
    $datetest = strtotime("$year-01-01");    //on part du 1 janvier de l'année donnée pour la date de test.
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

function getDatesOfAWeekBySheetId($sheetid)
{
    $thesheet = getASheetById($sheetid);

    $year = substr($thesheet['week'], 0, 2) + 2000;
    $weeknb = substr($thesheet['week'], 2);
    //Tests de tous les jours de l'année demandée jusqu'à trouver la date du premier jour de la semaine demandée.
    $datetest = strtotime("$year-01-01");    //on part du 1 janvier de l'année donnée pour la date de test.
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
