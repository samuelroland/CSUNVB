<?php

require_once "model/pharmaCheksModel.php";

print "Fonction de récupération des cheks : ";

$allCheks = getAllCheks();

if (count($allCheks) == 4) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de récupération d'un ckek : ";

$chek = getAChek("2020-03-09", 2);

if ($chek["date"] == "2020-03-09" && $chek["batch_id"] == 2) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction d'ajout d'un chek : ";

$newChek = [
    "date" => "2020-03-23",
    "start" => 5,
    "end" => 3,
    "batch_id" => 2,
    "user_id" => 2,
    "stupsheet_id" => 4
];

addAChek($newChek);

$chek = getAChek($newChek["date"], $newChek["batch_id"]);

if ($chek["start"] == $newChek["start"] && $chek["end"] == $newChek["end"]) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de modification d'un check : ";

$chekToUpdate = [
    "id" => 2,
    "end" => 20
];

updateAChek($chekToUpdate);

$cheks = getAllCheks();

$test = false;

if ($cheks[2]["end"] == $chekToUpdate["end"]) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de suppression d'un chek : ";

delAChek(4);

$cheks = getAllCheks();

if (!isset($cheks[4])){
    print "OK\n";
} else {
    print "Pas OK\n";
}

?>