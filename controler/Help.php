<?php

function SelectSheets ($mode) {
    switch ($mode) {
        case "Stups":
            require"model\stupSheetModel.php";
            $sheets = getAllSheets();
            $action = "detaildrug";
        case "Todo":
            require"model/todoListModel.php";
            $sheets = getTodoListWeeks();
            $action = "todolisthome";
    }
}

require 'view/sheetselect.php';