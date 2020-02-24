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
    print "ok\n";
}
else{
    print "Pas OK\n";
}

?>