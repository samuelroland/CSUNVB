<?php

session_start();

// Login token if exists
if(isset($_POST["initials"]) && isset($_POST["password"]))
{
    $initials = $_POST["initials"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $admin = $_POST ["admin"];
    $department = $_POST["department"];

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
        tryLogin($initials,$password);
        break;
    case 'createAccount':
        createAccount($initials,$firstname,$lastname,$password,$password2,$admin,$department);
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
    case 'ChangeAdminState':
        ChangeAdminState($admin);
        break;
    case 'displayWeek':
        todoListDetailedWeek();
        break;

    default: // unknown action
        require_once 'view/home.php';
        break;
}
?>
