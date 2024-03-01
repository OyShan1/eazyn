<?php
require_once '/config/connect.php';
$name = $_POST["name"];
$email = $_POST["email_add"];
$pw = $_POST["password"];

$query_sql = "INSERT INTO register (name, email_add, password)
                value ($name, $email, $pw)";

if(mysqli_query($is_connect,$query_sql)){
    header("location: login.php");
} else {
    echo "pendaftaran gagal :", mysqli_error($is_connect);
}
?>