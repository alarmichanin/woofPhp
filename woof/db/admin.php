<?php
session_start();
$arrOfTables = null;
$arrOfCols = null;
$data = null;
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
    <div class='box'>
	<form action='./admin/login.php' method='post' id='login-form' class='login-form'>
		<span class='text-center'><nobr>Зайти в панель адміністратора</nobr></span>
	<div class='input-container'>
		<input type='text' class='input'
               name='login' required><br>
		<label>Логін</label>		
	</div>
	<div class='input-container'>		
		<input type='password' class='input'
               name='password' required><br>
		<label>Пароль</label>
	</div>
		<button type='submit' form='login-form' id='login-form-btn noselect' value='Submit'>Увійти</button> 
</form>	
</div>
        ";
        if (isset($_SESSION['message'])) {
            echo '<p class="err-msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    } else {
        echo "<a href='./admin/logout.php'>ВИЙТИ</a>";
        echo "<p>Hello, " . $_SESSION['user']['full_name'] . "</p>";
        foreach ($arrOfTables as $table) {
            echo "<p><b>" . strtoupper($table['Tables_in_woof']) . " table</b></p>";
            echo "<table class='table'><thead><tr>";
            foreach ($arrOfCols[$table['Tables_in_woof']] as $column) {
                echo "<th>" . $column["Field"] . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            foreach ($data[$table['Tables_in_woof']] as $rows) {
                echo "<tr>";
                foreach ($rows as $elem) {
                    echo "<td>" . $elem . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>
 <form action='./set.php' class=" . $table["Tables_in_woof"] . "Table method='post'>
    <div class='b-popup popup" . $table['Tables_in_woof'] . "'>
        <div class='b-popup-content'>
        <input type='hidden' name=" . $table['Tables_in_woof'] . " value=''/>
        ";
            foreach ($arrOfCols[$table['Tables_in_woof']] as $column) {
                if ($column["Field"] != "id") {
                    echo "
                         <input type='text' placeholder=" . $column["Field"] . " name=" . $column["Field"] . " required>";
                }
            }
            echo "<input type='submit' value='Записати' class='button'></div></div></form>
<button class=" . $table["Tables_in_woof"] . " id='btn noselect'>Додати</button>";
            if ($table["Tables_in_woof"] == "userlist") {
                if (isset($_SESSION['setErr'])) {
                    echo '<p class="err-msg"><b>' . $_SESSION['setErr'] . '</b></p>';
                }
                unset($_SESSION['setErr']);
            }
        }
    }
    ?>
</div>
<script src="admin/admin.js"></script>
</body>
</html>