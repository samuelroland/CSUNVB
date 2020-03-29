<?php

function getAllLogs(){
    $badArray = json_decode(file_get_contents("model/dataStorage/logs.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $user = getAnUser($p["author_id"]);
        $p["user"] = $user["initials"];

        $week = getASheetById($p["item_id"]);
        $p["week"] = $week["week"];

        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getALog($id){
    $logs = getAllLogs(); //Récupère les logs

    foreach ($logs as $log) {
        if ($log["id"] == $id){
            return $log;
        }
    }
}

function saveLogs($items)
{
    file_put_contents("model/dataStorage/logs.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

function addALog($newLog)
{
    $items = getAllLogs();
    $test = 0;
    foreach ($items as $item){
        if ($item["id"] > $test){
            $test = $item["id"];
        }
    }

    date_default_timezone_set('Europe/Zurich');
    $timestamp = date("Y-m-j G:i:s");

    $id = $test + 1;
    $newLog =  array_merge( ["id" => $id, "timestamp" => $timestamp], $newLog);
    $items[] = $newLog;

    saveLogs($items);
}

function updateALog($logToUpdate)
{

    $items = getAllLogs();

    foreach ($items as $item){
        if ($item["id"] == $logToUpdate["id"]){
            $item = array_merge($item, $logToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveLogs($items);
}

function delALog($id)
{
    $items = getAllLogs();

    unset($items[$id]);

    saveLogs($items);
}



?>