<?php
/**
 * Title: loginControler.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

require_once 'model/loginModel.php';


function tryLogin($username,$password)
{
    $UserLog = getUser($username);
    if ($UserLog != '')
    {
        if ($UserLog['password'] == $password)
        {
            $_SESSION['username'] = $UserLog['username'];
            require_once "view/home.php";
        }else
        {
            login();
        }
    }
}
function login()
{
    require_once 'view/login.php';
}
function diconnect(){
    session_unset();
    require_once "view/home.php";
}
?>