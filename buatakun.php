<?php
include 'config.php';
$error = "";
if ($error == "") 
{
    $query = mysqli_query($con, "INSERT INTO user SET
    username = '$_POST[username]',
    password = '$_POST[password]',
    id = NULL,
    type = 'user'");
}
if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=create.php'>";
} else if ($query) {
    echo 'Data berhasil di simpan';
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
} else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
}