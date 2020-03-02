<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 02.03.2020
*/

function getAllSheets(){
    //$goodArray = json_decode(file_get_contents("../model/dataStorage/drugs.json"), true); //Prend les éléments d'un fichier Json
    $badArray = json_decode(file_get_contents("../model/dataStorage/stupSheets.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

?>