<?php 
include 'config.php';
  $foto = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  $tipefile = $_FILES['foto']['type'];
  $ukuranfile = $_FILES['foto']['size'];

  $error = "";
  if($foto == "") {
    $query = mysqli_query($con, "UPDATE games SET 
    nama = '$_POST[game]',
    harga = '$_POST[harga]',
    link = '$_POST[link]' WHERE id = '$_POST[id]'");
  }
  else {
      $query = mysqli_query($con, "SELECT * FROM games WHERE id = '$_POST[id]'");
      $data = mysqli_fetch_array($query);
      if (file_exists("images/$data[gambar]"))
        unlink("images/$data[gambar]");
      move_uploaded_file($lokasi, "images/".$foto);
      $query = mysqli_query($con, "UPDATE games SET 
        gambar = '$foto',
        nama = '$_POST[game]',
        harga = '$_POST[harga]',
        link = '$_POST[link]' WHERE id = '$_POST[id]'");
    }
  if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=edit.php&id=$_POST[id]'>";
  }
  else if ($query) {
    echo "Data Berhasil Disimpan!";
    echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
  }
  else {
    echo 'Tidak Dapat Menyimpan Data!<br/>';
    echo mysqli_error($con);
  }