<?php
/**
 * Title: loginControler.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

require_once 'model/loginModel.php';



function tryLogin($initials,$password,$departement)
{
    if ($initials != "")
    {
        $UserLog = getUser($initials);
        $Baselog = getBase($departement);
        if ($UserLog != '') {
            if (password_verify($password,$UserLog['password'])) {
                $_SESSION['user'] = [$UserLog['initials'],$UserLog['firstname'],$UserLog['admin'],$Baselog];
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
    require_once "view/login.php";
}
function adminTrue($UserVef)
{
    if ($UserVef[2] == true)
    {
        echo "<a class='text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center' href='?action=admin'>Administration</a></div>";

    }else {
        echo "</div>";
    }

}

?>