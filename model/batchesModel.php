<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

function getAllBatches()
{
    $badArray = json_decode(file_get_contents("model/dataStorage/batches.json"), true); //Prend les éléments d'un fichier Json

    $drugs = getAllDrugs();

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        foreach ($drugs as $drug) {
            if ($p["drug_id"] == $drug["id"]) {
                $p["drug"] = $drug["name"];
            }
        }
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getABatche($number)
{
    $batches = getAllBatches(); //Récupère les Drogues

    foreach ($batches as $batche) {
        if ($batche["number"] == $number) {
            return $batche;
        }
    }
}

function savebatches($items)
{
    file_put_contents("model/dataStorage/batches.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateABatche($batcheToUpdate)
{

    $items = getAllbatches();

    foreach ($items as $item) {
        if ($item["id"] == $batcheToUpdate["id"]) {
            $item = array_merge($item, $batcheToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveBatches($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function addAbatche($newBatche)
{
    $items = getAllbatches();
    $test = 0;
    foreach ($items as $item) {
        if ($item["id"] > $test) {
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $newBatche = array_merge(["id" => $id], $newBatche);
    $items[] = $newBatche;

    savebatches($items);
}

function delABatche($id)
{
    $items = getAllBatches();

    unset($items[$id]);

    savebatches($items);
}

?>