<?php
include 'config.php';
$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];
$error ="";
if ($foto == "") {
    $query = mysqli_query($con, "INSERT INTO games SET 
    nama = '$_POST[game]',
    harga = '$_POST[harga]',
    link = '$_POST[link]'");
} else {
        move_uploaded_file($lokasi, "images/" . $foto);
        $query = mysqli_query($con, "INSERT INTO games SET
        gambar = '$foto',
        nama = '$_POST[game]',
        harga = '$_POST[harga]',
        link = '$_POST[link]'");
    }
if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=Tambah.php'>";
} else if ($query) {
    echo 'Data berhasil di simpan';
    echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
} else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
}