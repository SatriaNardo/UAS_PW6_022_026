<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);
if($jml > 0 && $data['type'] == 'admin')
{  
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location:admin.php');
}
else if ($jml > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location:main.php');
} else {
    echo '<p align="center">Login Gagal</p>';
    echo '<meta http-equiv="refresh" content="2;url=login.php">';
}