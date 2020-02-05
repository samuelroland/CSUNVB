<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 04.02.2020
*/

require_once "model/drugModel.php";

$drugs = getAllDrugs();

$weekDays = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
$test = 0;
foreach ($drugs as $drug){
    echo $drug[$weekDays[$test]]["BY45677"]["31"];
    $test++;
}

?>