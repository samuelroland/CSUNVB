<?php

function SelectSheet ($mode) {
    switch ($mode) {
        case "Stups":
            require"model\stupSheetModel.php";
            $sheet = getAllSheets();
        case "Todo":
            require"model\todoListModel.php";
            $sheet = getTodoListWeeks();
    }
}

require 'view/sheetselect.php';