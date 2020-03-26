<?php

session_start();
$numweek = $_GET['week'];
$week = $_GET['week'];
$base = $_GET['base'];
$daythings = $_GET['daything'];
$sheetid = $_GET['sheetid'];
$action = $_GET['action'];
$adminchange = $_GET['idPerson'];
$option = $_GET['option'];

// Login token if exists
if (isset($_POST["initials"]) || isset($_POST["password"]) || isset($_POST["firstname"])) {
    $initials = $_POST["initials"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $admin = $_POST ["admin"];
    $department = $_POST["department"];
    $confirmpsd = $_POST["confirmpsd"];
}
// Include all models
require "model/basesModel.php";

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/loginControler.php";
require "controler/Help.php";

if (isset($_SESSION['user']) == false && $action != "tryLogin") {
    $action = "error";
}
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
    case 'shiftEndList';
        shiftEndListPage($sheetid);
        break;
    case 'todolist':
        todoListHomePage();
        break;
    case 'drughome':
        drugHomePage(); // choix des feuilles de stups avec un base et dans une liste de semaines.
        break;
    case "detaildrug":
        drugdetails($week, $base); //page détails d'une feuille de stups avec tableaux
        break;
    case 'tryLogin':
        tryLogin($initials, $password, $department);
        break;
    case 'createAccount':
        createAccount($initials, $firstname, $lastname, $password, $password2, $admin);
        break;
    case 'disconnect':
        disconnect();
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
        todoListDetailedWeek($numweek,$base);
        break;
    case 'verifymdp':
        verifymdp($password, $password2, $confirmpsd);
        break;
    case 'changePassword':
        changePassword($password, $password2);
        break;
    case 'changePasswordUser':
        changePasswordUsers($initials, $password, $password2);
        break;
    case 'myaccount':
        moncompte($option, $firstname, $lastname);
        break;
    case 'bases':
        bases();
        break;
    case 'help':
        require "controler/Help.php";
        break;
    case 'viewNovas':
        displayNovas();
        break;
    case 'viewMeds':
        displayMeds();
        break;
    case 'logs' :
        logs();
        break;

    default: // unknown action
        if (isset($_SESSION['user']) && $_SESSION['user'][4] != true) {
            require_once 'view/home.php';
        } elseif ($_SESSION['user'][4] == true) {
            require_once 'view/firstLogin.php';
        } else {
            require_once 'view/login.php';
        }
        break;
}
?>
