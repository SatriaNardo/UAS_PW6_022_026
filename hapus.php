<?php
include 'config.php';
$query = mysqli_query($con, "SELECT * FROM games ORDER BY id DESC");
$data = mysqli_fetch_array($query);

if (file_exists("images/$data[gambar]"))
        unlink("images/$data[gambar]");

$query = mysqli_query($con, "DELETE FROM games WHERE id = '$data[id]'");
$query1 = mysqli_query($con, "ALTER TABLE games AUTO_INCREMENT = 1");

if ($query && $query1) {
    echo 'Data berhasil dihapus!';
    echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
} else {
    echo 'Tidak dapat menghapus data!<br/>';
    echo mysqli_error($con);
}