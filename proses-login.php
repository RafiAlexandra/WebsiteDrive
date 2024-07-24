<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT*FROM admin WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id'] = $data['id'];
    header('Location:home/home.php');
    exit();
} else {
    echo "<script>
    alert('Maaf Login Anda Gagal, Silahkan Ulangi Lagi');
    window.location.assign('index.php');
    </script>";
}



