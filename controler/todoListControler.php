<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/todoListModel.php';

function todoListHomePage()
{
    require_once 'view/todoListHome.php';
}

function addNewToDo()
{

}

function createTodoListItem($item)
{
    if (isset($_POST["user"]) && isset($_POST["password"])  != "" && $_POST["user"] != "" && $_POST["password"] != "") {


        $items = getTodoListItems();
        foreach ($getTodoListItems as $getTodoListItem) {
            $id = $getTodoListItem["id"];

            if ($id > $id) {
                $Lastid = $id;
            }
        }
        $id++;
        $createtodoList[] = ["id" => $id, "date" => $date, "base" => $base, "nightjob" => $nightjob, "description" => $description, "" => $ , "type" => $type, "value" => $value];
        getTodoListItem($item);
    }
    require_once '';
}
?>
"id": 101,
"date": "2020-02-03",
"base": "Payerne",
"nightjob": 0,
"description": "Fax 144  Transmission",
"acknowledged_by": null,
"type": 0,
"value": null







function trySignin()
{
if (isset($_POST["user"]) && isset($_POST["password"])  != "" && $_POST["user"] != "" && $_POST["password"] != "") {


$liste = getLogs();
$Lastid = 0;
foreach ($liste as $user) {
$id = $user["id"];

if ($id > $Lastid) {
$Lastid = $id;
}
}
$Lastid++;
$liste[] = ["id" => $Lastid, "user" => $_POST["user"], "password" => $_POST["password"]];
createLogs($liste);
}
require_once 'view/Signin.php';
$_POST["user"] = null;
unset($_POST["password"]);
}