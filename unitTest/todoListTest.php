<?php
/*
  Author : Gatien Jayme
  Project : Test
  Date : 04.02.2020
*/
require 'model/todoListModel.php';

// $item = ["id" => $id, "date" => $date, "base" => $base, "nightjob" => $nightjob, "description" => $description, "acknowledged_by" => $aknowledged_by, "type" => $type, "value" => $value];
$item = ["id" => 4, "date" => 2,2,23, "base" => 'Payerne', "nightjob" => '1', "description" => 'Samuel est trop fort et en plus il est gentil et defois il est pas sympa',
    "acknowledged_by" => null, "type" => 3, "value" => 13];
createTodoListItem($item);


?>