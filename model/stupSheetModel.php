<?php
/*
  Author : Christopher Pardo
  Project :
  Date : 02.03.2020
*/

function getAllSheets()
{
    $badArray = json_decode(file_get_contents("model/dataStorage/stupsheets.json"), true); //Prend les éléments d'un fichier Json
    $novas = getSheetUseNova();
    $batches = getSheetUseBatch();

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $base = getABase($p["base_id"]);
        $p["base"] = $base["name"];
        foreach ($novas as $key => $nova) {
            if ($nova["stupsheet_id"] == $p["id"]) {
                $p["novas"][$key] = $nova;
            }
        }
        foreach ($batches as $key => $batch) {
            if ($batch["stupsheet_id"] == $p["id"]) {
                $p["batches"][$key] = $batch["batch"];
            }
        }
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getASheet($week, $baseid)
{
    $sheets = getAllSheets(); //Récupère les Drogues

    foreach ($sheets as $sheet) {
        if ($sheet["week"] == $week) {
            if ($sheet['base_id'] == $baseid) {
                return $sheet;
            }
        }
    }
    return null;
}

function getASheetById($id)
{
    $sheets = getAllSheets(); //Récupère les Drogues

    foreach ($sheets as $sheet) {
        if ($sheet["id"] == $id) {
            return $sheet;
        }
    }
    return null;
}

function saveSheets($items)
{
    file_put_contents("model/dataStorage/stupsheets.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateASheet($sheetToUpdate)
{

    $items = getAllSheets();

    foreach ($items as $item) {
        if ($item["id"] == $sheetToUpdate["id"]) {
            $item = array_merge($item, $sheetToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveSheets($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function addASheet($newSheet)
{
    $items = getAllSheets();
    $test = 0;
    foreach ($items as $item) {
        if ($item["id"] > $test) {
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $newSheet = array_merge(["id" => $id], $newSheet);
    $items[] = $newSheet;

    saveSheets($items);
}

function delASheet($id)
{
    $items = getAllSheets();

    unset($items[$id]);

    saveSheets($items);
}

function getSheetUseNova()
{
    $novas = getAllNovas();
    $uses = json_decode(file_get_contents("model/dataStorage/stupSheet_use_nova.json"), true);

    foreach ($uses as $key => $use) {
        $nova_id = $use["nova_id"];
        $nova = $novas[$nova_id]["number"];
        $uses[$key]["nova"] = $nova;
    }
    return $uses;
}

function getSheetUseBatch()
{
    $batches = getAllBatches();
    $uses = json_decode(file_get_contents("model/dataStorage/stupSheet_use_batch.json"), true);

    foreach ($uses as $key => $use) {
        $batch_id = $use["batch_id"];
        $batch = $batches[$batch_id]["number"];
        $uses[$key]["batch"] = $batch;
    }
    return $uses;
}

function getBigSheet($weeknb)
{
    /*
    $result = [];
    // Find date of first day: 2020-03-09
    "Y-m-d H:i"
    $restocks=getRestocks();
    foreach ($restocks as $restock)
    {
        // if $restock[date] is in the sheet
        $result[$restock['date as day']][$restock['nova_id']][$restock['batch_id']] = $restock['quantity'];
    }
    return $result;
    */
}
?>
