<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "izin_db";
//$port = "3306";

$is_connect = mysqli_connect($host, $username, $password, $database);

if($is_connect){
    mysqli_select_db($is_connect, $database);
} else {
    echo "air!";
}
