<?php

function getAllNovaChecks()
{
    $badArray = json_decode(file_get_contents("model/dataStorage/novachecks.json"), true); //Prend les éléments d'un fichier Json

    //Ajoute une id aux différantes parties du tableau
    foreach ($badArray as $p) {
        $goodArray[$p["id"]] = $p;
    }

    return $goodArray; //Retourne le tableau indexé avec ses id
}

function getAllNovaChecksBySheetId($sheet_id){
    $cheks = getAllNovaChecks();

    foreach ($cheks as $chek){
        if ($chek["stupsheet_id"] == $sheet_id){
            $trueChecks[] = $chek;
        }
    }

    return $trueChecks;
}

function getANovaCheck($date, $drug_id, $nova_id)
{
    $cheks = getAllNovaChecks();

    foreach ($cheks as $chek) {
        if ($chek["date"] == $date) {
            if ($chek["drug_id"] == $drug_id)
                if ($chek["nova_id"] == $nova_id){
                    return $chek;
                }
        }
    }
    return null;
}

function getAllNovaChecksByASheetId($id)
{
    $checks = getAllNovaChecks();
    $listofchecks = null;   //liste de checks venant d'une feuille $id
    foreach ($checks as $check) {
        if ($check["stupsheet_id"] == $id) {
            $listofchecks[] = $check;   //on enregistre au bout de la liste
        }
    }

    return $listofchecks;
}

function saveNovaChecks($items)
{
    file_put_contents("model/dataStorage/novachecks.json", json_encode($items)); //Écrit les éléments d'une variable dans un fichier Json
}

function addANovaChek($chek)
{
    $items = getAllNovaChecks();
    $test = 0;
    foreach ($items as $item) {
        if ($item["id"] > $test) {
            $test = $item["id"];
        }
    }

    $id = $test + 1;
    $chek = array_merge(["id" => $id], $chek);
    $items[] = $chek;

    saveNovaChecks($items);
}

function updateANovaCheck($chekToUpdate)
{
    $items = getAllNovaChecks();

    foreach ($items as $item) {
        if ($item["id"] == $chekToUpdate["id"]) {
            $item = array_merge($item, $chekToUpdate);
            $items[$item["id"]] = $item;
        }
    }

    saveNovaChecks($items);
}

function delANovaCheck($id)
{
    $items = getAllNovaChecks();

    unset($items[$id]);

    saveNovaChecks($items);
}

?>