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
            unset($_SESSION['erreur']);
            $_SESSION['username'] = $UserLog[''];
            require_once "view/home.php";
        }
    }else
        {
            $_SESSION['erreur'];
            require_once "view/login.php";
        }

}
?>