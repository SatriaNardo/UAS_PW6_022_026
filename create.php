<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" >
    <link rel="stylesheet" href="style/login.css">
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
              <a class="nav-link active"  style="color:rgb(30, 233, 108); font-weight: bold;" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:rgb(30, 233, 108);" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:rgb(30, 233, 108);" href="login.php">Log in</a>
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
<div id="card">
        <div id="card-content" >
            <div id="card-title">
                <h2>BUAT AKUN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="buatakun.php">
                <label for="user-username" style="padding-top: 13px;">
                    &nbsp;Username
                </label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px;">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="submit" value="SUBMIT">
                <a href="login.php" id="signup">Already Have an Account?</a>
            </form>
        </div>
    </div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>