<?php
session_start();
$connection = null;
include_once "connect.php";

function insertIntoTable($table,$conn){
    $sql = 'INSERT INTO ' . $table . ' (id,' . implode(',', array_keys($_POST)) . ') VALUES (default,' . "'" . implode('\',\'', array_values($_POST)) . "'" . ')';
    print_r($sql);
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    } else {
        header('Location: ./admin.php');
        print("done!");
    }
}

function setData($conn)
{
    $table = array_key_first($_POST);
    array_shift($_POST);
    if (!($table == "userlist")) {
        insertIntoTable($table,$conn);
        return true;
    }else{
        if($_SESSION["user"]["admin"]){
            insertIntoTable($table,$conn);
        }else{
            header('Location: ./admin.php');
            $_SESSION['setErr'] = "У Вас не достатньо прав!";
            return false;
        }
    }
}

setData($connection);


//function setCategories()
//{
//    $conn = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
//    $sql = 'INSERT INTO category (name) VALUES
//                         ("Ціна"),
//                         ("Бренд"),
//                         ("Країна виробник"),
//                         ("Служба доставки"),
//                         ("Тип"),
//                         ("Намордники"),
//                         ("Одяг"),
//                         ("Хачування"),
//                         ("Повідки"),
//                         ("Медикаменти"),
//                         ("Іграшки");';
//    $result = mysqli_query($conn, $sql);
//    if (!$result) {
//        print("Произошла ошибка при выполнении запроса");
//    } else {
//        print("done!");
//    }
//}