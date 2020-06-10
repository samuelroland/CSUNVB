<?php
/*
  Author : Christopher Pardo
  File : drugsTest.php tests du modèle des drugs drugsModel.php
  Date : 04.02.2020
*/

require_once "model/drugModel.php";

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

print "Fonction de modification d'une drogues : ";

$drugToUpdate = [
    "id" => 2,
    "name" => "test1"
];

updateADrug($drugToUpdate);

$drugs = getAllDrugs();

$test = false;

if ($drugs["2"]["name"] == "test1"){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de supression d'une drogues : ";

delADrug(4);

$drugs = getAllDrugs();

if (!isset($drugs[4])){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

?>