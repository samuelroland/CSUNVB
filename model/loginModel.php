<?php
/**
 * Title: loginModel.php
 * Author: Luís Pedro et Dmitri Meili
 * Date: 04.02.2020
 */

function getListUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function getUser($initials)
{

    $listUsers = getListUsers();
    foreach ($listUsers as $User)
    {
        if ($User['initials'] == $initials)
        {
            return $User;
        }
    }
    $_SESSION['erreur'] = true;
    return '';
}
function verifyID($id)
{
    $listUsers = getListUsers();
    foreach ($listUsers as $User)
    {
        if ($User['id'] == $id)
        {
            return "";
        }
    }
    return "clear";
}
function getListBases()
{
    return json_decode(file_get_contents("model/dataStorage/bases.json"),true);
}
function getBase($departement)
{
    $listBases = getListBases();
    foreach ($listBases as $base)
    {
        if ($base['id'] == $departement)
        {
            return $base;
        }
    }
    return "";
}
?>