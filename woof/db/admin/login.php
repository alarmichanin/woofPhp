<?php
session_start();
include_once '../connect.php';
function login($db, $login, $password)
{
    $loginResult = mysqli_query($db, "SELECT * FROM userlist WHERE login='$login'
                  AND password='$password' AND admin='1'");

    if (mysqli_num_rows($loginResult)) {
        $user = mysqli_fetch_assoc($loginResult);
        $_SESSION['user'] =[
            "id"=>$user['id'],
            "full_name"=>$user['name'],
        ];
        return true;
    } else {
        unset($_SESSION['login'], $_SESSION['password']);
        $_SESSION['message'] = "Паролі не співпадають!";
        header('Location: ../admin.php');
        return false;
    }
}

if (isset($_POST['login']) && isset($_POST['password'])) {

    $_SESSION['login'] = $_POST['login'];

    $_SESSION['password'] = $_POST['password'];

}

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    $db = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME, PORT);
    if (login($db, $_SESSION['login'], $_SESSION['password'])) {//Попытка авторизации
        header('Location: ../admin.php');
    }

}