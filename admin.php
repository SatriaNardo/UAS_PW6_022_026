<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" >
    <link rel="stylesheet" href="style/style.css">
    <title>Noki Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-image:url(images/green.jpg);">
  <nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(rgb(8, 24, 19),rgb(12, 76, 61));">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="Bootstrap" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active"  style="color:rgb(30, 233, 108); font-weight: bold;" aria-current="page" href="main.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:rgb(30, 233, 108);" href="#">Username : <?php
        include 'config.php';
        include 'user.php';
        echo $_SESSION['username']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:rgb(30, 233, 108);" href="logout.php">Log Out</a>
            </li>
          </ul>
          
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <a href="Tambah.php" style="position:absolute; margin-left:0.75cm; top:2.25cm; color: white; padding: 10px 15px; font-size: 12px; background-image: radial-gradient(rgb(38, 70, 166),rgb(8, 156, 255)); border-radius: 10%;">Tambah</a>
    <table class="col-8 white rightt" style="width: 97%;">
    <tbody>
    <div class="col-8 white rightt">
    <?php
        include 'config.php';
        $query = mysqli_query($con, "SELECT id,gambar,nama,harga,link FROM games ORDER BY id DESC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <tr>
          <td>
          <div class="jarak">
          <a id="item-1" href="<?php echo $data['link']; ?>" target="_blank">
          <img src="images/<?php echo $data['gambar']; ?>"alt="Bootstrap" width="150" height="80" class="newstyle">
          <h6 class="white"><?php echo $data['nama']; ?></h6>
          <h6 class="white"><?php echo $data['harga']; ?></h6>
        </td>
        <td style="text-align: right;">
          <a style="color: white; padding: 10px 15px; font-size: 12px; background-image: radial-gradient(rgb(38, 70, 166),rgb(8, 156, 255)); border-radius: 10%;" href="edit.php">Edit</a>
          <a style="color: white; padding: 10px 15px; font-size: 12px; background-image: radial-gradient(rgb(148, 44, 44),rgb(213, 49, 20)); border-radius: 10%;" href="hapus.php">Hapus</a>
        </td>
        </a>
        </div>
        </tr>
        <?php
        }
        ?>
    </div>
    </tbody>
    </table>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>