<?php
session_start();
$connection = null;
include "connect.php";
const count = 24;

function getGoodsDB($conn, $page)
{
    $sql = 'SELECT * FROM products LIMIT ' . count . ' OFFSET ' . count * $page;
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getCategories($conn)
{
    $sql = 'SELECT `name` FROM category';
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getBrands($conn)
{
    $sql = 'SELECT `name` FROM brand';
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getGoods($connection)
{
    $categories = getCategories($connection);
    $brands = getBrands($connection);
    if ($categories) {
        $_COOKIE["categories"] = $categories;
    }
    if ($brands) {
        $_COOKIE["brands"] = $brands;
    }
    if (isset($_GET["page"])) {
        $_SESSION["page"] = $_GET["page"];
    }
    if (isset($_SESSION["page"])) {
        $goods = getGoodsDB($connection, $_SESSION["page"]);
        if ($goods) {
            $_COOKIE["goods"] = $goods;
        }
    }
}

getGoods($connection);