<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

function getAllNovas(){
    $badArray = json_decode(file_get_contents("model/dataStorage/novas.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getANova($number){
    $novas = getAllNovas(); //Récupère les Vehicules

    foreach ($novas as $nova) {
        if ($nova["number"] == $number){
            return $nova;
        }
    }
}
function getNova($id){
    $novas = getAllNovas(); //Récupère les Vehicules

    foreach ($novas as $nova) {
        if ($nova["id"] == $id){
            return $nova;
        }
    }
}
function readGuardUseNovas(){
    return json_decode(file_get_contents("model/dataStorage/guard_use_nova.json"),true);
}
function getAGuardUseNova(){
    $GuardNovas = readGuardUseNovas(); //Récupère les Vehicules

    foreach ($GuardNovas as $GuardNova) {
        if ($GuardNova["id"] == $id){
            return $GuardNova;
        }
    }
}

function saveNovas($items)
{
    file_put_contents("model/dataStorage/novas.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateANova($NovaToUpdate)
{

    $items = getAllNovas();

    foreach ($items as $item){
        if ($item["id"] == $NovaToUpdate["id"]){
            $item = array_merge($item, $NovaToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveNovas($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function addANova($newNova)
{
    $items = getAllNovas();
    $test = 0;
    foreach ($items as $item){
        if ($item["id"] > $test){
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $newNova =  array_merge( ["id" => $id], $newNova);
    $items[] = $newNova;

    saveNovas($items);
}

function delANova($id)
{
    $items = getAllNovas();

    unset($items[$id]);

    saveNovas($items);
}

?>