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
function readAdminItems()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readAdminItem($id)
{
    $items = getAdminItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateAdminItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateAdminItem($item)
{
    $items = getAdminItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveAdminItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyAdminItem($id)
{
    $items = getAdminItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveAdminItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createAdminItem($item)
{
    $items = getAdminItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveAdminItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}
function writeUser($listUsers)
{
    file_put_contents("model/dataStorage/users.json", json_encode($listUsers));
}
function getBases()
{
    return json_decode(file_get_contents("model/dataStorage/bases.json"),true);
}
function getNovas(){
    return json_decode(file_get_contents("model/dataStorage/novas.json"),true);
}
function getOneNova($novaid){
    $listNovas = getNovas();

    foreach ($listNovas as $n) {
        if ($n['id'] == $novaid) {
            return $n;
        }
    }
    return "";
}
function getGardUseByNova($novaid)
{
    $AllGN = json_decode(file_get_contents("model/dataStorage/guard_use_nova.json"),true);
    foreach ($AllGN as $GN)
    {
        if ($GN['nova_id'] == $novaid)
        {
            $listGn[] = $GN;

        }
    }
    return $listGn;
}
function getGuardsheetsByNova($guardUnova)
{
    $listGuardsheets = json_decode(file_get_contents("model/dataStorage/guardsheets.json"),true);
    foreach ($listGuardsheets as $guardsheet)
    {
        foreach ($guardUnova as $gn){
            if ($guardsheet["id"] == $gn['guardsheet_id'])
            {
                $listSheets[] = $guardsheet;
            }
        }
    }
    return $listSheets;
}
function getMedics()
{
    return json_decode(file_get_contents("model/dataStorage/drugs.json"),true);
}
function getMedic($id)
{
    $listMedics = getMedics();

    foreach ($listMedics as $m) {
        if ($m['id'] == $id) {
            return $m;
        }
    }
    return "";
}
function  getBatches()
{
    return json_decode(file_get_contents("model/dataStorage/batches.json"),true);
}
function getMedBatches($medsid)
{
    $listBatches = getBatches();

    foreach ($listBatches as $b) {
        if ($b['drug_id'] == $medsid) {
            $listMedBatches[] = $b;
        }
    }
    return $listMedBatches;
}
function getAllStupsheets()
{
    return json_decode(file_get_contents("model/dataStorage/stupsheets.json"),true);
}
function getStupsBatches()
{
    return json_decode(file_get_contents("model/dataStorage/stupsheet_use_batch.json"),true);
}
function getStupsBatchesWithId($batchesid)
{
    $AllStupsBatches = getStupsBatches();

    foreach ($AllStupsBatches as $sb)
    {
        foreach ($batchesid as $batch)
        {
            if ($batch['id'] == $sb['batch_id'])
            {
                $compList[] = $sb;
            }
        }
    }
    return $compList;
}
function getRightStupsForBatches($batchesid)
{
    $compList = getStupsBatchesWithId($batchesid);
    $stupsList = getAllStupsheets();

    foreach ($stupsList as $s)
    {
        foreach ($compList as $c)
        {
            if($c['stupsheet_id'] == $s['id'])
            {
                $rightStups[]= $s['week'];
            }
        }
    }
    $result = array_unique($rightStups);
    return $result;
}
?>
