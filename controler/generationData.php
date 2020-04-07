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
                $indexturn++;   //numéro suivant (id) pour le prochain tour
            }
        }
    }
    saveCheks($listChecks);
}

function createNovachecks()
{
    $listnovachecks = array();  //liste crée de novachecks

    $indexturn = 1; //pour l'id, index de l'élément généré
    for ($sheetid = 1; $sheetid <= 23; $sheetid++) {    //pour toutes les feuilles
        $dates = getDatesOfAWeekBySheetId($sheetid);

        //Prendre les bonnes novas
        $sheet = getASheetById($sheetid);

        $novas = $sheet['novas'];
        print_r($novas);

        for ($drug = 1; $drug <= 3; $drug++) {  //pour tous les stups
            foreach ($novas as $onenova) {  //pour chaque nova
                foreach ($dates as $onedate) {
                    //Générer start et end et user_id
                    $start = rand(4, 20);

                    $randvar = rand(0, 50); //51 numéros

                    if ($randvar == 0) {    // 1/50 fois on met $end différent de $start
                        $end = $start + rand(-1, 2);
                    } else {
                        $end = $start;  //sinon donnée valide parce que égale
                    }
                    $user = rand(1, 103);

                    $listnovachecks[$indexturn] = [
                        "id" => $indexturn,
                        "date" => date("Y-m-d", $onedate),
                        "start" => $start,
                        "end" => $end,
                        "nova_id" => $onenova['id'],
                        "drug_id" => $drug,
                        "user_id" => $user,
                        "stupsheet_id" => $sheetid
                    ];
                    $indexturn++;   //numéro suivant (id) pour le prochain tour
                }
            }
        }
    }

    saveNovaChecks($listnovachecks);    //enregistrer la liste

}

//Liste des fonctions (à activer ou désactiver avec des commentaires) pour générer selon les besoins.
//createPharmaChecks();
createNovachecks();

?>