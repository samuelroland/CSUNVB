<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/adminModel.php';
require_once 'model/loginModel.php';
$users = readAdminItems();

function adminHomePage()
{
    require_once 'view/adminHome.php';
}

function createAccount($initials, $firstname, $lastname, $password, $password2, $admin, $department)
{
    if ($initials != "") {

        // if the password is entered correctly
        if ($password == $password2) {
            $hash = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // Verify if the username already exists
            if (getUser($initials) != '') {
                $_SESSION['erreur'] = 2;
                require_once 'view/createaccount.php';
            } else {
                if ($admin == "on") {
                    $admin = true;
                } else {
                    $admin = false;
                }
                addUser($initials, $firstname, $lastname, $hash, $admin, $department);
                tryLogin($initials, $password);
            }
        } else {
            $_SESSION['erreur'] = 1;
            require_once 'view/createaccount.php';
        }
    } else {
        require_once 'view/createaccount.php';
    }

}

function addUser($initials, $firstname, $lastname, $hash, $admin, $department)
{
    $listUsers = getListUsers();
    $id = count($listUsers);
    var_dump($id);
    $idDisponible = verifyID($id);
    While ($idDisponible == '') {
        $id += 1;
        $idDisponible = verifyID($id);
    }


    $newUser = [
        'id' => $id,
        'initials' => $initials,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'password' => $hash,
        'admin' => $admin,
        'department' => $department,
    ];
    $listUsers[] = $newUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($listUsers));
}

function crew()
{
    require_once 'view/crew.php';
}

function ChangeAdminState($users, $id)
{
    foreach ($users as $user) {
        if ($users['id'] == $id) {
            if ($user['admin'] == false) {
                $user['admin'] = true;
            } else {
                $user['admin'] = false;
            }
        }
    }
    $listUsers = $users;
    require_once 'view/crew.php';
}

?>
