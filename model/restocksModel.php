<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 07.04.2020
*/

function getAllRestocks()
{
    $badArray = json_decode(file_get_contents("model/dataStorage/restocks.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getARestock($id)
{
    $restocks = getAllRestocks();

    foreach ($restocks as $onerestock) {
        if ($onerestock["id"] == $id) {
            return $onerestock;
        }
    }
    return null;
}

function getAllRestocksByASheetId($id)
{
    $restocks = getAllRestocks();
    $listofrestocks = null;   //liste de checks venant d'une feuille $id
    foreach ($restocks as $onerestock) {
        if ($onerestock["stupsheet_id"] == $id) {
            $listofrestocks[] = $onerestock;   //on enregistre au bout de la liste
        }
    }
    return $listofrestocks;
}

function saveRestocks($items)
{
    file_put_contents("model/dataStorage/restocks.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

function addARestock($restock)
{
    $items = getAllCheks();
    $test = 0;
    foreach ($items as $item) {
        if ($item["id"] > $test) {
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $restock = array_merge(["id" => $id], $restock);
    $items[] = $restock;

    saveCheks($items);
}

function updateARestock($restock)
{
    $items = getAllRestocks();

    foreach ($items as $item) {
        if ($item["id"] == $restock["id"]) {
            $item = array_merge($item, $restock);
            $items[$item["id"]] = $item;
        }
    }

    saveCheks($items);
}

function deleteARestock($id)
{
    $items = getAllRestocks();

    unset($items[$id]);

    saveRestocks($items);
}

//retourne un grand tableau de restocks trié par date, nova id, batch id.
function getBigSheetOfRestocks($sheetid)
{
    $result = [];   //tableau vide

    $dates = getDatesOfAWeekBySheetId($sheetid);
    foreach ($dates as $index => $onedate) {
        $dates[$index] = date("Y-m-d", $onedate);
    }
    $restocks = getAllRestocks();
    foreach ($restocks as $restock) {
        // if $restock[date] is in the sheet$
        if (in_array(date("Y-m-d", strtotime($restock['timestamp'])), $dates) == true) {
            $result[(date("Y-m-d", strtotime($restock['timestamp'])))][$restock['nova_id']][$restock['batch_id']] = $restock;
        }
    }
    return $result;
}

?>