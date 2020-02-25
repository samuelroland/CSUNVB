<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 04.02.2020
*/

require_once "../model/drugModel.php";

print "Fonction de récupération des drogues : ";

$allDrugs = getAllDrugs();

if (count($allDrugs) == 3){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de récupération d'une drogues : ";

$drug = getADrug(2);

if ($drug["name"] == "Fentanyl"){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de ajout d'une drogues : ";

addADrug("test");

$drugs = getAllDrugs();

$test = false;

foreach ($drugs as $drug){
    if ($drug["name"] == "test"){
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

?>