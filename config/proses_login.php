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
    echo "<a href='../login.php'>Kembali</a>'";
}
?>

<!--
    1. Cek Apakah Session ada 
    2. Jika Ada session, user bisa akses halaman index
    3. Jika Belum ada, user diarahkan ke halaman login
    4. User memasukkan username dan password login
    5. Mengecek apakah username dan password ada pada database
    6. jika ada maka akan diarahkan ke index
    7. jika gagal maka akan dikembalikan ke halaman login dan muncul pesan login gagal

    3 prosses
    from login, proses_login, cek session.
-->