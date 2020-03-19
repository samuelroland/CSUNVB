<?php

require_once "model/pharmaCheksModel.php";

print "Fonction de récupération des cheks : ";

$allCheks = getAllCheks();

if (count($allCheks) == 4){
    print "OK\n";
}
else{
    print "Pas OK\n";
}

?>
