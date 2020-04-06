<?php

require_once "model/novaChecksModel.php";

print "Fonction de récupération des cheks : ";

$allCheks = getAllNovaChecks();

if (count($allCheks) == 4) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de récupération d'un ckek : ";

$chek = getANovaCheck("2020-02-18", 2, 1);

if ($chek["date"] == "2020-02-18" && $chek["drug_id"] == 2 && $chek["nova_id"] == 1) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction d'ajout d'un chek : ";

$newChek = [
    "date" => "2020-04-06",
    "start" => 6,
    "end" => 3,
    "nova_id" => 1,
    "drug_id" => 2,
    "user_id" => 2,
    "stupsheet_id" => 1
];

addANovaChek($newChek);

$chek = getANovaCheck($newChek["date"], $newChek["drug_id"], $newChek["nova_id"]);

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

updateANovaCheck($chekToUpdate);

$cheks = getAllNovaChecks();

$test = false;

if ($cheks[2]["end"] == $chekToUpdate["end"]) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de suppression d'un chek : ";

delANovaCheck(4);

$cheks = getAllNovaChecks();

if (!isset($cheks[4])){
    print "OK\n";
} else {
    print "Pas OK\n";
}

?>
