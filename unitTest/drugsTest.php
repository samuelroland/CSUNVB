<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 04.02.2020
*/

require_once "../model/drugModel.php";

$drugs = getADrug(12);

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

$drug = [
    "id" => 12,
    "day" => "mon",
    "numero" => "BY45677",
    "vehicule" => 31,
    "value" => 8
];

updateADrug($drug);

?>