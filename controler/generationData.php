<?php
/**
 * Fichier: page contenant des fonctions pour générer des données en json
 * Auteur: Samuel Roland
 * Date: Mars 2020
 **/

require "model/pharmaCheksModel.php";
require "controler/drugControler.php";

function createPharmaChecks()   //générer des données de pharmachecks
{
    define("HowMuchGenerateChecks", 224);   //nombres de checks à générer.

    $listChecks = null;
    $indexturn = 1;
    for ($sheetid = 1; $sheetid <= 23; $sheetid++) {  //pour chaque stupsheet
        $datesoftheweek = getDatesOfAWeekBySheetId($sheetid);
        for ($i = 1; $i <= HowMuchGenerateChecks / 7; $i++) {   //pour chaque batch/lo
            $start = rand(3, 20);
            $end = $start - rand(0, 1);
            for ($day = 1; $day <= 7; $day++) {//pour 7 jours.
                $daytoadd = -1 + $day;
                $dateofcheck = strtotime("+$daytoadd day", $datesoftheweek[1]); //rajouter un certain nombre de jours à la première date de la semaine.
                echo "Sheetid = " . $sheetid . " et dateofcheck = " . date("Y-m-d", $dateofcheck) . "   \n ";
            //Générer et insérer les données
            $checktobuild = [
                "id" => $indexturn,
                "date" => date("Y-m-d", $dateofcheck),
                "start" => $start,
                "end" => $end,
                "batch_id" => $i,
                "user_id" => rand(1, 50),
                "stupsheet_id" => $sheetid
            ];

                //enregistrer dans la liste de checks
                $listChecks[$indexturn] = $checktobuild;
                $indexturn++;
            }
        }
    }
    saveCheks($listChecks);
}

createPharmaChecks();
?>