<?php
session_start();
$arrOfTables = null;
$arrOfCols = null;
$data=null;
include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin/admin.css">
    <script src="https://kit.fontawesome.com/62aeaedac6.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.0.slim.js"></script>
    <title>WoofADMIN</title>
</head>
<body>
<div class='login-from'>
    <?php
    if (!isset($_SESSION['user'])) {
        echo "
    <div class='title'>Зайти в панель адміністратора</div>
    <form action='./admin/login.php' method='post' id='login-form' class='login-form'>
        <input type='text' placeholder='Логін' class='input'
               name='login' required><br>
        <input type='password' placeholder='Пароль' class='input'
               name='password' required><br>
        <input type='submit' value='Войти' class='button'>
    </form>";
        if (isset($_SESSION['message'])) {
            echo '<p class="err-msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    }else{
       echo "<p>Hello ". $_SESSION['user']['full_name'] . "</p>";
       foreach ($arrOfTables as $table){
           echo "<p>".$table['Tables_in_woof']."</p>";
           echo "<table class='table'><thead><tr>";
           foreach ($arrOfCols[$table['Tables_in_woof']] as $column){
                   echo "<th>".$column["Field"]."</th>";
           }
           echo "</tr></thead>";
           echo "<tbody>";
           foreach ($data[$table['Tables_in_woof']] as $rows){
                   echo "<tr>";
                   foreach ($rows as $elem){
                       echo "<td>".$elem."</td>";
                   }
                   echo "</tr>";
           }
           echo "</tbody></table>";
       }
    }
    ?>
</div>
</body>
</html>