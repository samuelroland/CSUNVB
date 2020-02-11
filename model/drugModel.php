<?php
/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function getAllDrugs()
{
    $badArray = json_decode(file_get_contents("../model/dataStorage/drugs.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */

function getADrug($id)
{
    $items = getAllDrugs(); //Récupère les Drogues

    //Vérifie l'id choisi et retourne la valeur du tableau ou si non retourne "NULL"
    if (isset($items[$id])) {
        return $items[$id];
    } else {
        return null;
    }
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */

function saveDrugs($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateADrug($item)
{
    $item = [
        "day" => "mon",
        "numero" => 12345,
        "vehicule" => 35,
        "value" => 4
    ];
    $items = getAllDrugs();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items

    saveDrugItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 *
 * function createDrugItem($item)
 * {
 * $items = getDrugItems();
 * // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
 * saveDrugItem($items);
 * return ($item); // Pour que l'appelant connaisse l'id qui a été donné
 * }
 */

?>
