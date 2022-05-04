<?php
$connection = null;
include "connect.php";

function getGoods($conn){
    $sql = 'SELECT * FROM products';
    $result = mysqli_query($conn, $sql);
    $goods = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($goods);
}
getGoods($connection);