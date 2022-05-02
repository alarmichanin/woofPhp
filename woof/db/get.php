<?php
$connection = null;
include_once "connect.php";

function getAllTablesInDB($conn)
{
    $sql = 'SHOW TABLES FROM woof';
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getAllRowsInTables($conn,$tables)
{
    $arrOfCols = [];
    foreach ($tables as $table) {
        $sql = 'SHOW COLUMNS FROM ' . $table["Tables_in_woof"];
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $arrOfCols[$table["Tables_in_woof"]] = $rows;
    }
    return $arrOfCols;
}

function selectAllData($conn,$tables)
{
    $arrOfRows = [];
    foreach ($tables as $table){
        $sql = 'SELECT * FROM '. $table["Tables_in_woof"];
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $arrOfRows[$table["Tables_in_woof"]] = $data;
    }
    return $arrOfRows;
}

$arrOfTables = getAllTablesInDB($connection);
$arrOfCols = getAllRowsInTables($connection,$arrOfTables);
$data = selectAllData($connection,$arrOfTables);