<?php
/*
  Author : Gatien Jayme
  Project : Test
  Date : 04.02.2020
*/
require 'model/todoListModel.php';

// $item = ["id" => $id, "week" => $week, "state" => $state, "base_id" => $base_id];
$task = ["id" => 23, "week" => 2013, "state" => "closed", "base_id" => 2];
createTodoListItem($task);

/*if() {
    echo"OK";
}
else{
    echo"NO";
}*/

$id = $task['id'];
$id = 5;
destroyTodoListItem($id);

?>