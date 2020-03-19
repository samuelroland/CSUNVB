<?php

require_once "model/pharmaCheksModel.php";

print "Fonction de récupération des cheks : ";

$allCheks = getAllCheks();

if (count($allCheks) == 3){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de récupération d'un chek : ";

$chek = getAChek(2);

if ($chek["name"] == "Fentanyl"){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de ajout d'un chek : ";

addAChek("test");

$cheks = getAllCheks();

$test = false;

foreach ($cheks as $chek){
    if ($chek["name"] == "test"){
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

print "Fonction de modification d'un chek : ";

$chekToUpdate = [
    "id" => 2,
    "name" => "test1"
];

updateAChek($chekToUpdate);

$cheks = getAllCheks();

$test = false;

if ($cheks["2"]["name"] == "test1"){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

print "Fonction de supression d'un chek : ";

delAChek(4);

$cheks = getAllCheks();

if (!isset($cheks[4])){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

?>
