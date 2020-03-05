<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 02.03.2020
*/

require_once "model/stupSheetModel.php";

print "Fonction de récupération des feuilles : ";

$allSheets = getAllSheets();

if (count($allSheets) == 22){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de récupération d'une feuille : ";

$sheet = getASheet(2009);

if ($sheet["id"] == 2){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de ajout d'une feulle : ";

$sheetToUpdate = [
    "week"=> 6,
    "state"=> "closed",
    "base_id" => 1
];

addASheet($sheetToUpdate);

$sheets = getAllSheets();

$test = false;

foreach ($sheets as $sheet){
    if ($sheet["week"] == 6){
        $test = true;
        break;
    }
}

if($test == true){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de modification d'une feuille : ";

$sheetToUpdate = [
    "id" => 1,
    "week"=> 4,
];

updateASheet($sheetToUpdate);

$sheets = getAllSheets();

$test = false;

if ($sheets["1"]["week"] == 4){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de supression d'une feuille : ";

delASheet(4);

$sheet = getAllSheets();

if (!isset($sheet[4])){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

?>