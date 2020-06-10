<?php
/*
 * Program : CSUNVBA2 ensemble des fonction du controler pour les todos
 * Author: Gatien Jayme / Miguel Soares
 * Date: 04.2020
 * Version: 1.0
 * */

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

function todoListDetailedWeek($sheetid)
{
    $sheet = getASheetById($sheetid);
    // $week = par ex: 2012 donc semaine 12 de 2020
    $numweek = substr($sheet['week'], 2);    // extraire le numéro de la semaine uniquement.
    $year = substr($sheet['week'], 0, 2) + 2000;    // extraire l'année

    // pour tous les numéros des jours de la semaine
    for ($i = 0; $i < 7; $i++) // $i = numéro du jour de la semaine
    {
        $tasks[$i]['daytasks'] = getTodoListTaskByNumdayAndDayOrNight(1, $i);
        $tasks[$i]['nighttasks'] = getTodoListTaskByNumdayAndDayOrNight(0, $i);
    }
    $baseinfo = getABase($sheet['base_id']);
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
