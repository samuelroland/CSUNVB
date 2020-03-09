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

function createAccount($initials, $firstname, $lastname, $password, $password2, $admin)
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
                addUser($initials, $firstname, $lastname, $hash, $admin);
                crew();
            }
        } else {
            $_SESSION['erreur'] = 1;
            require_once 'view/createaccount.php';
        }
    } else {
        require_once 'view/createaccount.php';
    }

}

function addUser($initials, $firstname, $lastname, $hash, $admin)
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
    //foreach ($users as $user) {
      for ($i=0; $i<count($users); $i++){
        if ($users[$i]['id'] == $id) {
            if ($users[$i]['admin'] == false) {
                $users[$i]['admin'] = true;
            } else {
                $users[$i]['admin'] = false;
            }
        }
    }
    $listUsers = $users;

      file_put_contents("model/dataStorage/Users.json", json_encode($listUsers));

    require_once 'view/crew.php';
}

?>
