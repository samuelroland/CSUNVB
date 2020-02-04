<?php
/**
 * Title: loginModel.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

function getListUsers()
{
    return json_decode(file_get_contents("model/dataStorage/UsersTest.json"),true);
}
function getUser($name)
{
    $listUsers = getListUsers();
    foreach ($listUsers as $User)
    {
        if ($User['username'] == $name)
        {
            return $User;
        }
    }
    return '';
}
?>