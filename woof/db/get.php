<?php
include_once "./connect.php";
echo $connection;
function selectAllGoods()
{
    $conn = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
    $sql = 'SELECT * FROM `goods`';
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($rows);
    foreach ($rows as $row) {
        print("Name: " . $row['name'] . "<br/>");
    }
}

selectAllGoods();