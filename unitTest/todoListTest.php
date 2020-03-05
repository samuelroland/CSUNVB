<?php
/*
  Author : Gatien Jayme
  Project : Test
  Date : 04.02.2020
*/
require 'model/todoListModel.php';


echo"Test read: ";
$tasktest = readTodoListTaskById(7);
if($tasktest['id'] == 7 && $tasktest['week'] == 2010 && $tasktest['state'] == "closed" && $tasktest['base_id'] == 2) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}


echo"Test create: ";
// $task = ["id" => $id, "week" => $week, "state" => $state, "base_id" => $base_id];
$task = ["id" => null, "week" => 2013, "state" => "closed", "base_id" => 2];
$idgiven = createTodoListTask($task);
$tasks = getTodoListTasks();
$counttasks = count($tasks);
$id = $idgiven;
if(readTodoListTaskById($id) != null) {
    echo " OK\n";
    $counttasks = count($tasks);
}
else {
    echo"BUG\n";
}


/*echo"Test delete: ";
$id = [$onetask['id']];
$id = 5;
destroyTodoListTask($id);
// if(readTodoListTaskById($id) = ) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}


echo"Test upgrade: ";
$task = ["id" => 6, "week" => 2020, "state" => "closed", "base_id" => 5];
updateTodoListTask($task);
if() {
    echo" OK\n";
}
else{
    echo"BUG\n";
}*/
?>