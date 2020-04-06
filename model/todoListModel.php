<?php
/*
 * Program : CSUNVBA2 todoList dans le model
 * Author: Gatien Jayme / Miguel Soares
 * Date: 04.02.2020
 * Version: 1.0
 * */

/** ------------------TASK---------------------- */

/** Retourne la liste des tâches */
function getTodoListTasks()
{
    $tasks = json_decode(file_get_contents("model/dataStorage/todothings.json"), true);
    foreach ($tasks as $onetask) {
        $tasksbyid[$onetask['id']] = $onetask;
    }
    return $tasksbyid;
}

// Récupère la liste des tâches de nuit / jour selon le paramètre $daynight (1 ou 0)
function getTodoListTaskByDayOrNight($daynight)
{
    // TODO Coder la récupération des tâches de nuit ou de jour en fonction du paramètre
    $tasks = getTodoListTasks();
    foreach ($tasks as $onetask) {
        if ($onetask['daything'] == $daynight) {
            $tasksofdaynight[$onetask['id']] = $onetask;
        }
    }
    return $tasksofdaynight;
}

/** Permet de retourner une tâche précise identifié par son id */
function readTodoListTaskById($id)
{
    $tasks = getTodoListTasks();
    if (isset($tasks[$id])) {
        return $tasks[$id];
    } else {
        return null;
    }
}


/** Permet de modifier une tâche précise */
function updateTodoListTask($newtask)
{
    $tasks = getTodoListTasks();
    // parcourt le tableau de tâches
    foreach ($tasks as $id => $onetask) {
        // Ecrase l'ancienne tâche par celle modifiée
        if ($newtask['id'] == $onetask['id']) {
            $tasks[$id] = $newtask;
        }
    }
    saveTodoListTask($tasks);
}

/** Permet de supprimer une tâche identifié par son id, parmi la liste */
function destroyTodoListTask($id)
{
    $tasks = getTodoListTasks();
    // recherche d'une tâche demandé et la suppression dans le tableau
    foreach ($tasks as $i => $onetask) {
        if ($id == $onetask['id']) {
            unset($tasks[$i]);
        }
    }
    saveTodoListTask($tasks);
}

/** Enregistre la liste des tâches dans le todothings.json */
function saveTodoListTask($tasks)
{
    file_put_contents("model/dataStorage/todothings.json", json_encode($tasks));
}

/** Permet d'ajouter une nouvelle tâche avec un id unique */
function createTodoListTask($task)
{
    $id = null;
    $tasks = getTodoListTasks();
    // trouver l'id de la dernière tâche
    foreach ($tasks as $onetask) {
        $id = $onetask["id"];
    }
    $id++; // prendre l'id suivante
    // enregistrer un nouvel id pour la nouvelle tâche
    $task['id'] = $id;
    $tasks[] = $task; // insérer la nouvelle tâche à la fin de la liste
    saveTodoListTask($tasks);
    return ($id); // Pour que l'appelant connaisse l'id qui a été donné
}

/** ------------------WEEK---------------------- */

/** Retourne la liste des semaines */
function getTodoListWeeks()
{
    $weeks = json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);
    foreach ($weeks as $oneweek) {
        $weeksbyid[$oneweek['id']] = $oneweek;
    }
    return $weeksbyid;
}

/** Permet de retourner une semaine précise identifié par son id */
function readTodoListWeekById($id)
{
    $weeks = getTodoListWeeks();
    if (isset($weeks[$id])) {
        return $weeks[$id];
    } else {
        return null;
    }
}

/** Permet de modifier une semaine précise */
function updateTodoListWeek($newweek)
{
    $weeks = getTodoListWeeks();
    // parcourt le tableau de semaine
    foreach ($weeks as $id => $oneweek) {
        // Ecrase l'ancienne semaine par celle modifiée
        if ($newweek['id'] == $oneweek['id']) {
            $weeks[$id] = $newweek;
        }
    }
    saveTodoListWeek($weeks);
}

/** Permet de supprimer une semaine identifié par son id, parmi la liste */
function destroyTodoListWeek($id)
{
    $weeks = getTodoListWeeks();
    // recherche d'une semaine demandé et la suppression dans le tableau
    foreach ($weeks as $i => $oneweek) {
        if ($id == $oneweek['id']) {
            unset($weeks[$i]);
        }
    }
    saveTodoListWeek($weeks);
}

/** Enregistre la liste des semaines dans le todosheets.json */
function saveTodoListWeek($weeks)
{
    file_put_contents("model/dataStorage/todosheets.json", json_encode($weeks));
}

/** Permet d'ajouter une nouvelle semaine avec un id unique */
function createTodoListWeek($week)
{
    $id = null;
    $weeks = getTodoListWeeks();
    // trouver l'id de la dernière semaine
    foreach ($weeks as $oneweek) {
        $id = $oneweek["id"];
    }
    $id++; // prendre l'id suivante
    // enregistrer un nouvel id pour la nouvelle semaine
    $weeks['id'] = $id;
    $weeks[] = $week; // insérer la nouvelle semaine à la fin de la liste
    saveTodoListWeek($weeks);
    return ($id); // Pour que l'appelant connaisse l'id qui a été donné
}

?>
