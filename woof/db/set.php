<?php
include_once "connect.php";
function setBrand($name){
    $conn = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
    $sql = 'INSERT INTO brands SET name = "'.$name.'"';
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    }
    else{
        print("done!");
    }
}

function setCategories(){
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
    }
    else{
        print("done!");
    }
}




//setCategories();