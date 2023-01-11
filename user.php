<?php
session_start();
include 'config.php';
$username = NULL;
$password = NULL;

$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);
if($jml > 0 && $data['type'] == 'admin')
{  
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
}
else if ($jml > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
}