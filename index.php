<?php

session_start();
var_dump($_SESSION);

// Login token if exists
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
}

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/loginControler.php";

$action = $_GET['action'];

switch ($action)
{
    case 'admin':
        adminHomePage();
        break;
    case 'crew':
        crew();
        break;
    case 'shiftend':
        shiftEndHomePage();
        break;
    case 'todolist':
        todoListHomePage();
        break;
    case 'drugs':
        drugHomePage();
        break;
    case 'tryLogin':
        tryLogin($username,$password);
        break;
    case 'disconnect':
        diconnect();
        break;
    case 'add':
        addNewToDo();
        break;
    case 'delete':
        deletenewtodo();
        break;
    case 'update':
        updatenewtodo();
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}
?>
