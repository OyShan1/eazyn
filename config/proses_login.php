<?php
include '../config/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM siswa WHERE username='$username'";
$result = mysqli_query($is_connect,$query);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header('location: ../index.php');
} else {
    echo 'login GAGAL!'; 
}
?>