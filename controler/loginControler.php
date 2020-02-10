<?php
/**
 * Title: loginControler.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

require_once 'model/loginModel.php';


function tryLogin($username, $password)
{
    $UserLog = getUser($username);
    if ($UserLog != '') {
        if ($UserLog['password'] == $password) {
            if ($_SESSION["username"] == "admin") {

                 $_SESSION['username'] = $UserLog['username'];
                require_once "view/home.php";
                echo "<a class='text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center' href='?action=admin'>Administration</a>";
            }
                else{
                    $_SESSION['username'] = $UserLog['username'];
                    require_once "view/home.php";
                }
            }
            $_SESSION['username'] = $UserLog['username'];
            require_once "view/home.php";
        } else {
            login();
        }

}

function login()
{
    require_once 'view/login.php';
}

function diconnect()
{
    session_unset();
    require_once "view/home.php";
}

?>