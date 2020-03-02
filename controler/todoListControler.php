<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require 'model/todoListModel.php';

function todoListHomePage()
{


        require_once 'view/todoHomePage.php';

}

function todoListDetailedWeek(){
    require_once 'view/todoListHome.php.php';
}

function addNewToDo($tasks)
{
    // if (isset($_POST["user"]) && isset($_POST["password"]) != "" && $_POST["user"] != "" && $_POST["password"] != "") {

    // }
    require_once 'view/todoListHome.php';
}

function deleteNewToDo() {

}

function updateNewToDo() {

}
?>