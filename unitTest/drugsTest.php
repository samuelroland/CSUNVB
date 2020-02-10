<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 04.02.2020
*/

require_once "../model/drugModel.php";

$drugs = getAllDrugs();

/*$weekDays = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
$test = 0;
for ($test; $test < count($weekDays);$test++){
    var_dump($weekDays[$test],$drugs[$weekDays[$test]]);
    $test++;
}*/

/*foreach ($drugs as $drug){
    if ($drug == "morphinesamples"){
        var_dump($drug);
    }
}*/

var_dump($drugs["12"]["morphinesamples"]);

?>