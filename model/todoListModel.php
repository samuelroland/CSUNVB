<?php
/*
 * Program : CSUNVBA2 todoList dans le model
 * Author: Gatien Jayme / Miguel Soares
 * Date: 04.02.2020
 * Version: 1.0
 * */

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readTodoListItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"), true);
}

function getTodoListTasks()
{
    return json_decode(file_get_contents("model/dataStorage/todosheets.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoListItem($id, $tasks)
{
    $tasks = getTodoListTasks();
    // TODO: coder la recherche de l'item demandé
    return $tasks;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateTodoListItems($tasks)
{
    file_put_contents("model/dataStorage/items.json", json_encode($tasks));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoListItem($tasks)
{
    $items = getTodoListTasks();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveTodoListItem($tasks);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoListItem($tasks)
{
    $tasks = getTodoListTasks();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    unset($task);
    saveTodoListItem($tasks);
}

function saveTodoListItem($task)
{
    file_put_contents("model/dataStorage/todosheets.json", json_encode($task));
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoListItem($task)
{
    $id = null;
    $tasks = getTodoListTasks();
    // trouver l'id de la dernière tâche
    foreach ($tasks as $onetask) {
        $id = $onetask["id"];
    }
    $id++; // prendre l'id suivante
// enregistrer un nouvel id pour le nouvelle item
    $task['id'] = $id;
    $tasks[] = $task;
    saveTodoListItem($tasks);
    return ($id); // Pour que l'appelant connaisse l'id qui a été donné
}


?>