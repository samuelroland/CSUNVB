<?php
/*
  Author : Christopher Pardo
  Project : 
  Date : 04.02.2020
*/

require_once "..\model\drugModel.php";

$drugs = getAllDrugs();

echo "il y a ".count($drugs);

?>