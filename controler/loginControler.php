<?php
/**
 * Title: loginControler.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

require_once 'model/loginModel.php';



function tryLogin($username,$password)
{
    if ($username != "")
    {
        $UserLog = getUser($username);
        if ($UserLog != '') {
            if ($UserLog['password'] == $password) {
                $_SESSION['user'] = $UserLog;
                require_once 'view/home.php';
            }
            else {
                $_SESSION['erreur'] = true;
                login();
            }
        } else {
            $_SESSION['erreur'] = true;
            login();
        }
    }else
        {
            login();
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
function adminTrue($UserVef)
{
    if ($UserVef['admin'] == true)
    {
        echo "<a class='text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center' href='?action=admin'>Administration</a></div>";

    }else {
        echo "</div>";
    }

}
?>