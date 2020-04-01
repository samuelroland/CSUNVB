<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require 'model/todoListModel.php';
require_once 'model/drugModel.php';
require_once 'model/basesModel.php';
require_once 'model/novasModel.php';
require_once 'model/stupSheetModel.php';
require_once 'model/batchesModel.php';
require_once 'model/pharmaCheksModel.php';

function todoListHomePage()
{


    require_once 'view/todoHomePage.php';

}

function todoListDetailedWeek($sheetid, $base)
{
    //$week = par ex: 2012 donc semaine 12 de 2020
    $numweek = substr($sheetid, 2);    //extraire le numéro de la semaine uniquement.
    $year = substr($sheetid, 0, 2) + 2000;    // extraire l'année

    $tasks = getTodoListTasks();
    for ($i=0; $i<7; $i++)
    {
        $tasks[$i]['daytasks'] = getTodoListTaskByDay($i,1);
        $tasks[$i]['nighttasks'] = getTodoListTaskByDay($i,0);
    }

    $daytasks = getTodoListTaskByDayOrNight(1);
    var_dump($daytasks);
    $nightasks = getTodoListTaskByDayOrNight(0);
    var_dump($nightasks);
    $bases = getAllBases();
    $baseinfo = $bases[$base];
    require_once 'view/todoListHome.php';
}



function addNewToDo($tasks)
{
    // if (isset($_POST["user"]) && isset($_POST["password"]) != "" && $_POST["user"] != "" && $_POST["password"] != "") {

    // }
    require_once 'view/todoListHome.php';
}

function deleteNewToDo()
{

}

function updateNewToDo()
{

}

?>
