<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

function getAllCheks(){
    $badArray = json_decode(file_get_contents("model/dataStorage/pharmachecks.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

?>