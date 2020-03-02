<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 02.03.2020
*/

require_once "../model/stupSheetModel.php";

print "Fonction de récupération des feuilles : ";

$allSheets = getAllSheets();
var_dump( $allSheets);
/*if (count($allSheets) == 22){
    print "OK\n";
}
else{
    print "Pas OK\n";
}*/

/*print "Fonction de récupération d'une feuille : ";

$sheet = getASheet(2);

if ($sheet["week"] == 2009){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de ajout d'une feulle : ";



addASheet("test");

$sheet = getAllSheet();

$test = false;

foreach ($sheets as $sheet){
    if ($sheet == "test"){
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

print "Fonction de modification d'une drogues : ";

$sheetToUpdate = [
    "id" => 2,
    "name" => "test1"
];

updateASheet($sheetToUpdate);

$drugs = getAllSheet();

$test = false;

if ($sheet["2"]["name"] == "test1"){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de supression d'une drogues : ";

delASheet(4);

$sheet = getAllDrugs();

if (!isset($sheet[4])){
    print "OK\n";
}
else{
    print "Pas OK\n";
}*/

?>