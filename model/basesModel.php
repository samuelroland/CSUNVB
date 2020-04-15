<?php
/*
  Author : Christopher Pardo
  File : baseModel.php fonctions du modèle pour les bases
  Date : 09.03.2020
*/

function getAllBases()
{
    $badArray = json_decode(file_get_contents("model/dataStorage/bases.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getABase($id)
{
    $bases = getAllBases(); //Récupère les bases

    foreach ($bases as $base) {
        if ($base["id"] == $id){
            return $base;
        }
    }
}