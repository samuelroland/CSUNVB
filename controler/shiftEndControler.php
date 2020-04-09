<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: Luís Pedro et Dmitri Meili
 * Date: Février 2020
 **/

require_once 'model/shiftEndModel.php';

function shiftEndHomePage($base)
{
    $guardsheets = readShiftEndItemsForBase($base);
    $guardusenovas = readGuardUseNovas();
    $guardsheet = getShiftEndById($base);
    $baseinfo = getABase($guardsheet['base_id']);
    $dayBoss = getShiftEndBossOrTeam($guardsheet['id'],1,1);
    $nightBoss = getShiftEndBossOrTeam($guardsheet['id'],0,1);
    $dayTeam = getShiftEndBossOrTeam($guardsheet['id'],1,0);
    $nightTeam = getShiftEndBossOrTeam($guardsheet['id'],0,0);
    $novaday = getShiftEndNova($base[],1);
    $novanight = getShiftEndNova($guardsheet['id'],0);
    $bases = getAllBases();
    $novas = getAllNovas();
    $crews = getAllCrews();
    $users = readAdminItems();

    require_once 'view/shiftEndHome.php';
}

function shiftEndListPage($sheetid)
{
    $guardsections = readShiftEndGuardSection();
    $guardlines = readShiftEndGuardLines();
    $guardsheets = readShiftEndItems();
    $guardsheet = getShiftEndById($sheetid);
    $baseinfo = getABase($guardsheet['base_id']);
    $guardsheetinfo = getShiftEndById($sheetid);
    $dayBoss = getShiftEndBossOrTeam($sheetid,1,1);
    $nightBoss = getShiftEndBossOrTeam($sheetid,0,1);
    $dayTeam = getShiftEndBossOrTeam($sheetid,1,0);
    $nightTeam = getShiftEndBossOrTeam($sheetid,0,0);
    $novaday = getShiftEndNova($sheetid,1);
    $novanight = getShiftEndNova($sheetid,0);
    require_once 'view/shiftEndList.php';
}

?>
