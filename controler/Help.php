<?php
require_once 'view/sheetselect.php';
require_once 'model/drugModel.php';
require_once 'model/basesModel.php';
require_once 'model/novasModel.php';
require_once 'model/stupSheetModel.php';
require_once 'model/batchesModel.php';

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