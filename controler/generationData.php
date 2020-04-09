<?php
/**
 * Fichier: page contenant des fonctions pour générer des données en json
 * Auteur: Samuel Roland
 * Date: Mars 2020
 **/


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

function getACheck($sheetid, $batchid, $date)
{
    $checks = getAllChecksByASheetId($sheetid);

    foreach ((array)$checks as $onecheck) {
        if ($onecheck['batch_id'] == $batchid) {
            if ($onecheck['date'] == $date) {
                return $onecheck;
            }
        }
    }
    return null;    //si il n'a pas trouvé alors le check n'existe pas.
}


function createRestocks()
{
    $listrestocks = array();  //liste crée de restocks
    $nbchecknull = 0;
    $indexturn = 1; //pour l'id, index de l'élément généré
    for ($sheetid = 1; $sheetid <= 22; $sheetid++) {    //pour toutes les feuilles
        $dates = getDatesOfAWeekBySheetId($sheetid);
        //Prendre les bonnes novas
        $sheet = getASheetById($sheetid);
        $novas = $sheet['novas'];
        //Prendre les batches dans $sheet
        $batchesid = array_keys((array)$sheet['batches']);

        foreach ($batchesid as $onebatchid) {    //pour chaque lot de la feuille
            foreach ($dates as $onedate) {  //pour toutes les dates de la semaine
                $datestr = date("Y-m-d ", $onedate);
                //Prendre le check correpondant à la position actuel: même feuille, même lot, même date.

                $check = getACheck($sheetid, $onebatchid, trim($datestr));  //date sans espace de fin
                $quantityremoved = 0;   //quantitée enlevée sur les novas pour le check en cours. = total des quantity pour ce check
                $indexnova = 0;
                foreach ($novas as $onenova) {  //pour chaque nova de la feuille
                    $indexnova++;   //index s'incrémente
                    //Générer les données autres que les clés étrangères

                    //Générer un timestamp
                    $stringprecisetime = date("H:i:s", rand(1500000000, 1586349000));    //string d'un temps en format H:i:s random sur une date random pour ne pas avoir 00:00:00
                    $timestamp = $datestr . $stringprecisetime;

                    $randvar = rand(0, 25); //25 pour 1 erreur sur 3-4 parmi 80-90 restocks par feuille

                    $user = rand(1, 103);

                    if ($check == null) {
                        $nbchecknull++;
                        echo "check null n $nbchecknull $sheetid $indexturn\n";
                        //On ne crée pas le restock car il n'y a pas de pharmacheck à cet endroit.
                    } else {

                        //si on est sur la dernière nova de la liste pour ce check
                        if ($indexnova == count($novas)) {
                            $quantity = $check['start'] - $check['end'] - $quantityremoved;
                        } else {
                            //Quantité donnée par la différence de start et end, divisé par nombre de novas, arrondi inférieur, moins 1.
                            $quantity = round($check['start'] - $check['end'] / count($novas), 0, PHP_ROUND_HALF_DOWN) - 1; //division integer
                        }

                        //Enregistrer la quantité enlevée
                        $quantityremoved += $quantity;

                        // 1/25 fois on met une erreur de comptage donc: somme des quantity != start - end
                        if ($randvar == 0) {
                            $quantity += rand(-2, 2);   //on met une erreur de 2 unités maximum
                            //ne pas compter l'erreur dans quantityremoved, continuer comme si ca n'avait pas changé
                        }

                        //Si après toutes ces manipulations $quantity vaut 0 on ne le crée pas, et ca fera une case vide.
                        if ($quantity <= 0) {
                            $quantity = null;
                            $quantityremoved -= $quantity;  //retirer la quantité enlevée parce que pas enlevée finalement.
                        } else {    //sinon le crée
                            $listrestocks[$indexturn] = [
                                "id" => $indexturn,
                                "timestamp" => $timestamp,
                                "quantity" => $quantity,
                                "user_id" => $user,
                                "nova_id" => $onenova['id'],
                                "batch_id" => $onebatchid,
                                "sheetidtest" => $sheetid
                            ];
                        }
                    }
                        $indexturn++;   //numéro suivant (id) pour le prochain tour même si pas créé

                }
            }
        }
    }
    saveRestocks($listrestocks);    //enregistrer la liste

}

//Liste des fonctions (à activer ou désactiver avec des commentaires) pour générer selon les besoins.
//createPharmaChecks();
//createNovachecks();
createRestocks();

?>