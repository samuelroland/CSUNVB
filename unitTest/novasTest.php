<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 05.03.2020
*/

require_once "model/novasModel.php";

print "Fonction de récupération des ambulances : ";

$allNovas = getAllNovas();

if (count($allNovas) == 10){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de récupération d'une ambulance : ";

$nova = getANova(31);

if ($nova["id"] == 1){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de ajout d'une ambulance : ";

$novaToAdd = [
    "number" => 159753
];

addANova($novaToAdd);

$novas = getAllNovas();

$test = false;

foreach ($novas as $nova){
    if ($nova["number"] == 159753){
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

print "Fonction de modification d'une ambulance : ";

$NovaToUpdate = [
    "id" => 2,
    "number"=> 01010101,
];

updateANova($NovaToUpdate);

$Novas = getAllNovas();

$test = false;

if ($Novas[2]["number"] == 01010101){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de supression d'une ambulance : ";

delANova(4);

$Nova = getAllNovas();

if (!isset($Nova[4])){
    print "OK\n";
}
else{
    print "Pas OK\n";
}
?>