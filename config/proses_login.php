<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($is_connect, "SELECT * FROM siswa WHERE username='$username' ");         

$data = mysqli_fetch_assoc($query);

if(NULL != $data) {
    $_SESSION['id'] =$data['id'];
    $_SESSION['username'] = $username;

    header('Location: ../index.php');
} else {
    echo 'login GAGAL!'; 
}
?>