<?php

session_start();

$semaine = $_GET['semaine'];

// Login token if exists
if (isset($_POST["initials"]) && isset($_POST["password"])) {
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
var_dump($_SESSION);
$action = $_GET['action'];
$adminchange = $_GET['idPerson'];
switch ($action) {
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
    case 'drughome':
        drugHomePage($week, $base); // //liste des semaines et des bases pour choisir la feuille de stups
        break;
    case "detaildrug":
        drugdetails(); //page détails d'une feuille de stups avec tableaux
        break;
    case 'tryLogin':
        tryLogin($initials, $password, $department);
        break;
    case 'createAccount':
        createAccount($initials, $firstname, $lastname, $password, $password2, $admin, $department);
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
        ChangeAdminState($users, $adminchange);
        break;
    case 'todolisthome':
        todoListDetailedWeek($semaine);
        break;

    default: // unknown action
        if (isset($_SESSION['user'])) {
            require_once 'view/home.php';
        } else {
            require_once 'view/login.php';
        }
        break;
}
?>
