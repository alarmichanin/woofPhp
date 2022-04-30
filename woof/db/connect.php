<?php
const SERVERNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "woof";
const PORT = 3308;

function connect($servername, $username, $password, $dbname, $port)
{
    $conn = mysqli_connect($servername, $username, $password,$dbname,$port);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   return $conn;
}

$connection = connect(SERVERNAME,USERNAME,PASSWORD,DBNAME,PORT);