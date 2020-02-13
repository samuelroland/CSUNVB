<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/adminModel.php';
require_once 'model/loginModel.php';

function adminHomePage()
{
    require_once 'view/adminHome.php';
}
function createAccount($username,$fullname,$password,$password2,$admin)
{
    if ($username != "")
    {
        // if the password is entered correctly
        if ($password == $password2)
        {
            $hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // Verify if the username already exists
            if ( getUser($username) != '')
            {
                $_SESSION['erreur'] = true;
                require_once 'view/createaccount.php';
            }else
                {
                    if ($admin == "on" )
                    {
                        $admin = true;
                    }else
                        {
                            $admin = false;
                        }
                    addUser($username,$fullname,$hash,$admin);
                    tryLogin($username,$password);
                }
        }
    }else
        {
            require_once 'view/createaccount.php';
        }

}
function addUser($username,$fullname,$hash,$admin)
{
    $listUsers = getListUsers();
    $newUser = [
        'username' => $username,
        'fullname' => $fullname,
        'password' => $hash,
        'admin' => $admin,
        'date-inscription' => date("Y-m-d", time()),
    ];
    $listUsers[] = $newUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($listUsers));
}
?>
