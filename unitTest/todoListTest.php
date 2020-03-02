<?php
/*
  Author : Gatien Jayme
  Project : Test
  Date : 04.02.2020
*/
require 'model/todoListModel.php';

// $task = ["id" => $id, "week" => $week, "state" => $state, "base_id" => $base_id];
$task = ["id" => 23, "week" => 2013, "state" => "closed", "base_id" => 2];
createTodoListTask($task);

/*if() {
    echo"OK";
}
else{
    echo"NO";
}*/

$id = $task['id'];
$id = 5;
destroyTodoListTask($id);

$task = ["id" => 6, "week" => 2020, "state" => "closed", "base_id" => 5];
updateTodoListTask($task);
?>