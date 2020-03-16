<?php

//Gére la génération de la vue d'une zone de sélection d'une feuille (stups par ex.) dépendant de la base et du site
function SelectSheets($mode)
{
    $bases = getAllBases(); //les bases sont les mêmes pour tous les cas
    switch ($mode) {
        case "Stups":
            $sheets = getAllSheets();   //prendre les feuilles des stups
            $action = "detaildrug"; //action une fois la feuille trouvée
            break;
        case "Todo":
            $sheets = getTodoListWeeks(); //prendre les feuilles todolists
            $action = "todolisthome";//action une fois la feuille trouvée
            break;
        default:    //en cas d'erreur: choisir "Todo"
            $sheets = getTodoListWeeks(); //prendre les feuilles todolists
            $action = "todolisthome";//action une fois la feuille trouvée
    }
    require 'view/sheetselect.php';
}

?>