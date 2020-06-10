<?php
/*
  Author : Christopher Pardo
  File : logsTest.php tests du modèle des logs logsModel.php
  Date : 26.03.2020
*/
require_once "model/logsModel.php";
require_once "model/loginModel.php";
require_once "model/stupSheetModel.php";
require_once "model/novasModel.php";
require_once "model/batchesModel.php";
require_once "model/drugModel.php";

print "Fonction de récupération des logs : ";

$allLogs = getAllLogs();

if (count($allLogs) == 2) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de récupération d'une log : ";

$log = getALog(1);

if ($log["id"] == 1) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de ajout d'une log : ";

$logToAdd = [
    "author_id" => 12,
    "item_type" => 1,
    "item_id" => 20,
    "text" => "Test"
];

addALog($logToAdd);

$logs = getAllLogs();

$test = false;

foreach ($logs as $log) {
    if ($log["text"] == $logToAdd["text"]) {
        $test = true;
        break;
    }
}

if ($test == true) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de modification d'une log : ";

$logToUpdate = [
    "id" => 1,
    "text" => "test",
];

updateALog($logToUpdate);

$logs = getAllLogs();

$test = false;

if ($logs[1]["text"] == "test") {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de supression d'une log : ";

delALog(2);

$logs = getAllLogs();

if (!isset($logs[2])) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction d'ajout des utilisateurs : ";

$logs = getAllLogs();


if ($logs[1]["user"] == "NFD") {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction d'ajout des semaines : ";

$logs = getAllLogs();


if ($logs[1]["week"] == 2012) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

print "Fonction de recupérations de logs par l'id de leurs semaine : ";

$logs = getLogsByItemId(20);

if (count($logs) == 2) {
    print "OK\n";
} else {
    print "Pas OK\n";
}

?>