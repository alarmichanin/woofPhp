<?php
$connection = null;
include_once "connect.php";


function setData($conn)
{
    $table = array_key_first($_POST);
    array_shift($_POST);
    var_dump($_POST);
    $sql = 'INSERT INTO ' . $table . ' (id,' . implode(',', array_keys($_POST)) . ') VALUES (default,' . "'". implode('\',', array_values($_POST)) . "'".')';
    $result = mysqli_query($conn, $sql);
    var_dump($sql);
    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    } else {
        header('Location: ./admin.php');
        print("done!");
    }
}

setData($connection);

function setBrand($name)
{
    $conn = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
    $sql = 'INSERT INTO brands SET name = "' . $name . '"';
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    } else {
        print("done!");
    }
}

function setCategories()
{
    $conn = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
    $sql = 'INSERT INTO category (name) VALUES 
                         ("Ціна"),
                         ("Бренд"),
                         ("Країна виробник"),
                         ("Служба доставки"),
                         ("Тип"),
                         ("Намордники"),
                         ("Одяг"),
                         ("Хачування"),
                         ("Повідки"),
                         ("Медикаменти"),
                         ("Іграшки");';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    } else {
        print("done!");
    }
}




//setCategories();