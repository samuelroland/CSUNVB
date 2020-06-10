<?php
/*
  Program : CSUNVBA2 ensemble des tests pour les todos
  Author : Gatien Jayme
  Date : 04.2020
  Version : 1.0
*/
require 'model/todoListModel.php';

/** ------------------TASK---------------------- */

echo"Test read task: ";
$tasktestread = readTodoListTaskById(7);
if($tasktestread['id'] == 7 && $tasktestread['type'] == 0 && $tasktestread['daything'] == 1 && $tasktestread['description'] == "Fax 144 Transmission" && $tasktestread['display_order'] == null) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}


echo"Test create task: ";
// $task = ["id" => $id, "type" => $type, "daything" => $daything, "description" => $description, "display_order": null];
$task = ["id" => null, "type" => 1, "daything" => 1, "description" => "C'est un test", "display_order" => null];
$idgiventask = createTodoListTask($task);
$tasks = getTodoListTasks();
$counttasks = count($tasks);
$id = $idgiventask;
if(readTodoListTaskById($id) != null) {
    echo " OK\n";
    $counttasks = count($tasks);
}
else {
    echo"BUG\n";
}

// compte delete recompte
echo "Test delete task: ";
$tasks = getTodoListTasks();
$counttasksbefore = count($tasks);
$id = 5;
destroyTodoListTask($id);
$tasktestdelete = readTodoListTaskById($id);
$counttasksbafter = count($tasks);

if ($tasktestdelete == null) {
    echo " OK\n";
} else {
    echo "BUG\n";
}


echo"Test update task: ";
$tasktestupdate = readTodoListTaskById(6);
$task = ["id" => 6, "type" => 1, "daything" => 1, "description" => "Test upgrade", "display_order" => null];
updateTodoListTask($task);
if($tasktestupdate['id'] == 6 && $tasktestupdate['type'] == 1 && $tasktestupdate['daything'] == 1 && $tasktestupdate['description'] == "Test upgrade" && $tasktestupdate['display_order'] == null) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}

/** ------------------WEEK---------------------- */

echo"Test read week: ";
$weektestread = readTodoListWeekById(2);
if($weektestread['id'] == 2 && $weektestread['week'] == 2009 && $weektestread['state'] == 'closed' && $weektestread['base_id'] == 1) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}

echo"Test create week: ";
// $task = ["id" => $id, "week" => $week, "state" => $state, "base_id" => $base_id];
$week = ["id" => null, "week" => 2013, "state" => "closed", "base_id" => 4];
$idgivenweek = createTodoListWeek($week);
$weeks = getTodoListWeeks();
$countweeks = count($weeks);
$id = $idgivenweek;
if(readTodoListWeekById($id) != null) {
    echo " OK\n";
    $countweeks = count($weeks);
}
else {
    echo"BUG\n";
}

// compte delete recompte
echo "Test delete week: ";
$tasks = getTodoListWeeks();
$countweeksbefore = count($weeks);
$id = 7;
destroyTodoListWeek($id);
$weektestdelete = readTodoListWeekById($id);
$countweeksbafter = count($weeks);

if ($weektestdelete == null) {
    echo " OK\n";
} else {
    echo "BUG\n";
}

echo"Test update week: ";
$weektestupdate = readTodoListWeekById(20);
$week = ["id" => 20, "week" => 2018, "state" => "open", "base_id" => 1];
updateTodoListWeek($week);
if($weektestupdate['id'] == 20 && $weektestupdate['week'] == 2018 && $weektestupdate['state'] == 'open' && $weektestupdate['base_id'] == 1) {
    echo" OK\n";
}
else{
    echo"BUG\n";
}

?>