<?php
/*
 * Program : CSUNVBA2 todoList dans le model
 * Author: Gatien Jayme / Miguel Soares
 * Date: 04.02.2020
 * Version: 1.0
 * */

/** Retourne la liste des tâches */
function getTodoListTasks()
{
    return json_decode(file_get_contents("model/dataStorage/todothings.json"), true);
}

/** Permet de retourner une tâche précise identifié par son id */
function readTodoListTaskById($id)
{


    $tasks = getTodoListTasks();
    // TODO: coder la recherche de l'item demandé
    foreach($tasks as $task)
    {
        if($id == $task['id']){
            return $task;
        }
    }
    return null;
}

/** Permet de sauver l'ensemble des tâches dans le fichier json */
function updateTodoListTasks($tasks)
{
    file_put_contents("model/dataStorage/items.json", json_encode($tasks));
}

/** Permet de modifier une tâche précise */
function updateTodoListTask($newtask)
{
    $tasks = getTodoListTasks();
    // parcourt le tableau de tâches
    foreach ($tasks as $id => $onetask)
    {
        // Ecrase l'ancienne tâche par celle modifiée
        if($newtask['id'] == $onetask['id']){
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
    foreach ($tasks as $id => $onetask)
    {
        if($id == $onetask['id']){
            unset($tasks[$id]);
        }
    }
    saveTodoListTask($tasks);
}

/** Enregistre la liste des tâches dans le todosheets.json */
function saveTodoListTask($tasks)
{
    file_put_contents("model/dataStorage/todosheets.json", json_encode($tasks));
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


?>