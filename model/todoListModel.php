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

function getTodoListItems()
{
    return json_decode(file_get_contents("model/dataStorage/todos.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoListItem($id, $items)
{
    $items = getTodoListItems();
    // TODO: coder la recherche de l'item demandé
    return $items;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateTodoListItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoListItem($items)
{
    $items = getTodoListItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveTodoListItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoListItem($id, $items)
{
    $items = getTodoListItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveTodoListItem($items);
}

function saveTodoListItem($item)
{
    file_put_contents("model/dataStorage/todos.json", json_encode($item));
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoListItem($item)
{
    $id = null;
    $items = getTodoListItems();
    // trouver l'id de la dernière tâche
    foreach ($items as $oneitem) {
        $id = $oneitem["id"];
    }
    $id++; // prendre l'id suivante
// enregistrer un nouvel id pour le nouvelle item
    $item['id'] = $id;
    $items[] = $item;
    saveTodoListItem($items);
    return ($id); // Pour que l'appelant connaisse l'id qui a été donné
}


?>