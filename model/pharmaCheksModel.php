<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

function getAllCheks(){
    $badArray = json_decode(file_get_contents("model/dataStorage/pharmacheks.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getAChek($number){
    $cheks = getAllCheks(); //Récupère les Vehicules

    foreach ($cheks as $chek) {
        if ($chek["number"] == $number){
            return $chek;
        }
    }
}

function saveCheks($items)
{
    file_put_contents("model/dataStorage/pharmacheks.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateAChek($chekToUpdate)
{

    $items = getAllCheks();

    foreach ($items as $item){
        if ($item["id"] == $chekToUpdate["id"]){
            $item = array_merge($item, $chekToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveCheks($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function addAChek($newChek)
{
    $items = getAllCheks();
    $test = 0;
    foreach ($items as $item){
        if ($item["id"] > $test){
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $newChek =  array_merge( ["id" => $id], $newChek);
    $items[] = $newChek;

    saveCheks($items);
}

?>