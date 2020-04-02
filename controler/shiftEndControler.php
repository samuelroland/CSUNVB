<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: Luís Pedro et Dmitri Meili
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function  shiftEndHomePage($base)
{
    $guardsheets = readShiftEndItemsForBase($base);
    $guardusenovas = readGuardUseNovas();
    $novas = getAllNovas();
    $crews = getAllCrews();
    $users = readAdminItems();

    require_once 'view/shiftEndHome.php';
}
function shiftEndListPage($sheetid){
    $guardsections = readShiftEndGuardSection();
    $guardlines = readShiftEndGuardLines();
    $guardsheets = readShiftEndItems();
    $guardsheet = getShiftEndById($sheetid);
    $baseinfo = getABase($guardsheet['base_id']);
    $guardsheetinfo =readShiftEndItemsForBase($guardsheet['base_id']);



    require_once 'view/shiftEndList.php';
}
?>
