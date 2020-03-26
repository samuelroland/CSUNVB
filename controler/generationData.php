<?php
/**
 * Fichier: page contenant des fonctions pour générer des données en json
 * Auteur: Samuel Roland
 * Date: Mars 2020
 **/

require "model/pharmaCheksModel.php";

function createPharmaChecks()   //générer des données de pharmachecks
{
    define("HowMuchGenerateChecks", 224);   //nombres de checks à générer.

    $listChecks = null;
    $indexturn = 1;
    for ($i = 1; $i <= HowMuchGenerateChecks / 7; $i++) {
        //Valeurs complexes et dépendantes:
        $start = rand(3, 20);
        $end = $start - rand(0, 1);

        for ($day = 1; $day <= 7; $day++) {//pour 7 jours.
            $dayofmarch = 16 - 1 + $day;
            echo $dayofmarch . "   \n ";

            //Générer et insérer les données
            $checktobuild = [
                "id" => $indexturn,
                "date" => "2020-03-" . $dayofmarch,
                "start" => $start,
                "end" => $end,
                "batch_id" => $i,
                "user_id" => rand(1, 50),
                "stupsheet_id" => 11
            ];

            //enregistrer dans la liste de checks
            $listChecks[$indexturn] = $checktobuild;
            $indexturn++;
        }
    }
    saveCheks($listChecks);
}

createPharmaChecks();
?>