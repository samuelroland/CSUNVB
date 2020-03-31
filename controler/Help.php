<?php

//Gére la génération de la vue d'une zone de sélection d'une feuille (stups par ex.) dépendant de la base et du site
function SelectSheets($mode)
{
    $bases = getAllBases(); //les bases sont les mêmes pour tous les cas
    switch ($mode) {
        case "Stups":
            $sheets = getAllSheets();   //prendre les feuilles des stups
            $action = "detaildrug"; //action une fois la feuille trouvée
            break;
        case "Todo":
            $sheets = getTodoListWeeks(); //prendre les feuilles todolists
            $action = "todolisthome";//action une fois la feuille trouvée
            break;
        default:    //en cas d'erreur: choisir "Todo"
            $sheets = getTodoListWeeks(); //prendre les feuilles todolists
            $action = "todolisthome";//action une fois la feuille trouvée
    }
    require 'view/sheetselect.php';
}
function changeWeekDown($type, $weekId)
{
    switch ($type){
        case "drug" :
            $weekNumber = getASheetById($weekId)["week"];
            $base = getASheetById($weekId)["base_id"];
            $weeks = getAllSheets();
            break;
        case "todo" :
            $weekNumber = readTodoListWeekById($weekId)["week"];
            $base = readTodoListWeekById($weekId)["base_id"];
            $weeks = getTodoListWeeks();
            break;
    }

    $beforWeek = null;
    foreach ($weeks as $week) {
        if ($week["base_id"] == $base && $week["week"] < $weekNumber) {
            if ($week["week"] > $beforWeek) {
                $beforWeek = $week["id"];
            }
        }
    }

    if ($beforWeek == null) {
        return $beforWeek;
    } else {
        return $beforWeek;
    }
}

function changeWeekUp($type, $weekId)
{
    switch ($type){
        case "drug" :
            $weekNumber = getASheetById($weekId)["week"];
            $base = getASheetById($weekId)["base_id"];
            $weeks = getAllSheets();
            break;
        case "todo" :
            $weekNumber = readTodoListWeekById($weekId)["week"];
            $base = readTodoListWeekById($weekId)["base_id"];
            $weeks = getTodoListWeeks();
            break;
    }

    $afterWeek = 10000000;
    foreach ($weeks as $week) {
        if ($week["base_id"] == $base && $week["week"] > $weekNumber) {
            if ($week["week"] < $afterWeek) {
                $afterWeek = $week["id"];
            }
        }
    }

    if ($afterWeek == 10000000) {
        return null;
    } else {
        return $afterWeek;
    }

}

?>