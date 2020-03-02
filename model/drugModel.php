<?php
/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function getAllDrugs()
{
    //$goodArray = json_decode(file_get_contents("../model/dataStorage/drugs.json"), true); //Prend les éléments d'un fichier Json
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
    file_put_contents("../model/dataStorage/drugs.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */

function updateADrug($drugToUpdate)
{

    $items = getAllDrugs();

    $items[$drugToUpdate["id"]] = $drugToUpdate;

    saveDrugs($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
  function addADrug($newDrug)
  {
      $items = getAllDrugs();
      $test = 0;
      foreach ($items as $item){
          if ($item["id"] > $test){
            $test = $item["id"];
          }
      }

      $id = $test + 1;
      $items[] = [
          "id" => $id,
          "name" => $newDrug
      ];

      saveDrugs($items);
      //return ($item); // Pour que l'appelant connaisse l'id qui a été donné
  }

  function delADrug($id)
  {
    $items = getAllDrugs();

    unset($items[$id]);

    saveDrugs($items);
  }



?>
