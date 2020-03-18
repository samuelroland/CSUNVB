<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

require_once "model/batchesModel.php";
require_once "model/drugModel.php";

print "Fonction de récupération des lots : ";

$allBatches = getAllBatches();

if (count($allBatches) == 15) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de récupération d'un lot : ";

$batche = getAbatche(123123);

if ($batche["id"] == 2) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de ajout d'un lot : ";

$batcheToAdd = [
    "state" => "used",
    "number" => "159753",
    "drug_id" => 1
];

addAbatche($batcheToAdd);

$batches = getAllbatches();

$test = false;

foreach ($batches as $batche) {
    if ($batche["number"] == 159753) {
        $test = true;
        break;
    }
}

if ($test == true) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de modification d'un lot : ";

$batcheToUpdate = [
    "id" => 2,
    "number" => 01010101,
];

updateAbatche($batcheToUpdate);

$batches = getAllbatches();

$test = false;

if ($batches[2]["number"] == 01010101) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de supression d'un lot : ";

delAbatche(4);

$batche = getAllbatches();

if (!isset($batche[4])) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Ajout des Drogue : ";

$batches = getAllBatches();

if (($batches[2]["drug"] == "Morphine")) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

var_dump($batches[3]);
var_dump($batches[8]);

?>