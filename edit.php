<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" >
    <link rel="stylesheet" href="style/login.css">
    <title>Ganesha International School-Login</title>
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
              <a class="nav-link" style="color:rgb(30, 233, 108);" href="#about">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color:rgb(30, 233, 108);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Genre
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#action">Action</a></li>
                <li><a class="dropdown-item" href="#adventure">Adventure</a></li>
                <li><a class="dropdown-item" href="#sim">Simulation</a></li>
                <li><a class="dropdown-item" href="#sport">Sport</a></li>
                <li><a class="dropdown-item" href="#racing">Racing</a></li>
              </ul>
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
    <div class ="overlay" id="about">
      <div class ="padd">
        <h1 class="white">My Name Is Satria Nardo Dionysius</h1>
        <h3 class="white">A College Student From North Sumatra University, i made this website as my Exam, Thank you for Visiting</h3>
      </div>
    </div>
<div id="cardd">
        <div id="card-content" >
            <div id="card-title">
                <h2>Edit Game</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" enctype="multipart/form-data" class="form" action="editGame.php">
            <?php
            include 'config.php';
            $query = mysqli_query($con, "SELECT id,gambar,nama,harga,link FROM games ORDER BY id DESC");
            $data = mysqli_fetch_array($query);
            ?>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <label for="foto">Foto</label>
                <div class="input">
                    <input type="file" id="foto" name="foto">
                    <img src="images/<?php echo $data['gambar']; ?>" width="150">
                </div>
                <label for="game" style="padding-top: 13px;">
                    &nbsp;Nama Game
                </label>
                <input id="game" class="form-content" type="game" name="game" autocomplete="on" value="<?php echo $data['nama']; ?>">
                <div class="form-border"></div>
                <label for="harga" style="padding-top: 13px;">m
                    &nbsp;Harga
                </label>
                <input id="harga" class="form-content" type="harga" name="harga" autocomplete="on" value="<?php echo $data['harga']; ?>">
                <div class="form-border"></div>
                <label for="link" style="padding-top: 13px;">
                    &nbsp;Link
                </label>
                <input id="link" class="form-content" type="link" name="link" autocomplete="on" value="<?php echo $data['link']; ?>">
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>