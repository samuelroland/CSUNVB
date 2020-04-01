<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readShiftEndItems()
{
    return json_decode(file_get_contents("model/dataStorage/guardsheets.json"), true);

}

function readShiftEndGuardSection()
{
    return json_decode(file_get_contents("model/dataStorage/guardsections.json"), true);
}

function readShiftEndGuardLines()
{
    return json_decode(file_get_contents("model/dataStorage/guardlines.json"), true);
}

function getAllCrews()
{
    return json_decode(file_get_contents("model/dataStorage/crews.json"), true);
}


/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function getShiftEndById($id)
{

    $items = getShiftEndItems();
    foreach ($items as $item){
        if ($item["id"] == $id) {
            return $item;
        }
    }
    // TODO: coder la recherche de l'item demandé
    return $item;
}
function getShiftEndNova($shiftEndId,$dayNight){
    $guardusenovas = readGuardUseNovas();
    $novas = getAllNovas();
    foreach ($guardusenovas as $guardusenova){
        if($guardusenova['day']== $dayNight && $guardusenova['guardsheet_id']==$shiftEndId){
            $day=$novas[$guardusenova['nova_id']];
            return $day['number'];
        }
    }
}
function getShiftEndBossOrTeam($shiftEndId, $dayNight, $bossOrNot){
    $crews = getAllCrews();
    $users = getListUsers();
    foreach ($crews as $crew){
        if($crew['day']== $dayNight && $crew['guardsheet_id']==$shiftEndId && $crew['boss']== $bossOrNot){
            $day=$users[$crew['user_id']-1];
            return $day['initials'];
        }
    }
}
/**
 * Retourne les items pour une base précise, identifiée par son id
 * ...
 */

function readShiftEndItemsForBase($id)
{
    $shiftEnds = readShiftEndItems();
    $bases = getAllBases();


    $res = [];
    foreach ($shiftEnds as $shiftEnd) {
        if ($shiftEnd['base_id'] == $id) // c'est une feuille à retourner
        {
            $shiftEnd['base'] = $bases[$id];
            $shiftEnd['novaday']= getShiftEndNova($shiftEnd['id'],1);
            $shiftEnd['novanight']= getShiftEndNova($shiftEnd['id'],0);
            $shiftEnd['bossday']=getShiftEndBossOrTeam($shiftEnd['id'],1,1);
            $shiftEnd['bossnight']=getShiftEndBossOrTeam($shiftEnd['id'],0,1);
            $shiftEnd['teamday']=getShiftEndBossOrTeam($shiftEnd['id'],1,0);
            $shiftEnd['teamnight']=getShiftEndBossOrTeam($shiftEnd['id'],0,0);
            $res[] = $shiftEnd;
        }

    }

    return $res;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateShiftEndItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveShiftEndItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyShiftEndItem($id)
{
    $items = getShiftEndItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveShiftEndItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createShiftEndItem($item)
{
    $items = getShiftEndItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveShiftEndItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


?>
