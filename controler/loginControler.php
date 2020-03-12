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
                $_SESSION['user'] = [$UserLog['id'],$UserLog['firstname'],$UserLog['admin'],$Baselog,$UserLog['firstLogin']];
                if ($_SESSION['user'][4] == 'true')
                {
                    require_once 'view/firstLogin.php';
                }else
                    {
                        require_once 'view/home.php';
                    }

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
function changePassword($password,$password2)
{
    $listUsers = getListUsers();

    //foreach ($users as $user) {
    for ($i=0; $i<count($listUsers); $i++){
        if ($listUsers[$i]['id'] == $_SESSION['user'][0]) {
            if($password == $password2)
            {
                $listUsers[$i]['firstLogin'] = false;
                $hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password
                $listUsers[$i]['password'] = $hash;
            }


        }
    }
    $newListUsers = $listUsers;

    file_put_contents("model/dataStorage/Users.json", json_encode($newListUsers));

    require_once 'view/crew.php';
}
?>