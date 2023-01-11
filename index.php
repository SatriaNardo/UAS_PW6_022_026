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
        <h1 class="white">We are Satria Nardo Dionysius and Yusuf Sihombing</h1>
        <h3 class="white">A College Student From North Sumatra University, We made this website as my Exam, Thank you for Visiting</h3>
      </div>
    </div>
    <div class ="overlay3" id="cyber">
      <div class ="padd3">
        <div class="pic">
        <h1 class="white">Cyberpunk 2077</h1>
        <img src="images/cyberpunk.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Mostly Positive (484.953)<br>Release Date : 10 December 2020<br>Publisher : CD PROJEKT RED<br>Developer : CD PROJEKT RED</h5>
        <div id="carouselExampleControls3" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/cy.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/cy1.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy3.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/cy.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/cy1.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy3.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/cy.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/cy1.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/cy3.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.</h4>
        <a class="btn btn-success loc" href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/" role="button">Purchase</a>
        </div>
      </div>
    </div>
    <div class ="overlay4" id="rdr">
      <div class ="padd4">
        <div class="pic">
        <h1 class="white">Red Dead Redemption 2</h1>
        <img src="images/rd.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Very Positive (279.091)<br>Release Date : 6 December 2019<br>Publisher : Rockstar Games<br>Developer : Rockstar Games</h5>
        <div id="carouselExampleControls4" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/rd1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/rd22.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/rd1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/rd22.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/rd1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/rd22.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/rd4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">Winner of over 175 Game of the Year Awards and recipient of over 250 perfect scores, RDR2 is the epic tale of outlaw Arthur Morgan and the infamous Van der Linde gang, on the run across America at the dawn of the modern age. Also includes access to the shared living world of Red Dead Online.</h4>
        <a class=" btn btn-success loc1" href="https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/" role="button">Purchase</a>
        </div>
      </div>
    </div>
    <div class ="overlay5" id="village">
      <div class ="padd5">
        <div class="pic">
        <h1 class="white">Resident Evil Village</h1>
        <img src="images/ree.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Over Positive (66.567)<br>Release Date : 7 May 2021<br>Publisher : CAPCOM Co., Ltd.<br>Developer : CAPCOM Co., Ltd.</h5>
        <div id="carouselExampleControls5" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/re1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/re2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/re1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/re2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/re1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/re2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/re4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">Experience survival horror like never before in the 8th major installment in the Resident Evil franchise - Resident Evil Village. With detailed graphics, intense first-person action and masterful storytelling, the terror has never felt more realistic.</h4>
        <a class=" btn btn-success loc1" href="https://store.steampowered.com/app/1196590/Resident_Evil_Village/" role="button">Purchase</a>
        </div>
      </div>
    </div>
    <div class ="overlay6" id="witch">
      <div class ="padd6">
        <div class="pic">
        <h1 class="white">The Witcher III : Wild Hunt</h1>
        <img src="images/witc.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Over Positive (550.145)<br>Release Date : 18 May 2015<br>Publisher : CD PROJEKT RED<br>Developer : CD PROJEKT RED</h5>
        <div id="carouselExampleControls5" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/wh1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/wh2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/wh1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/wh2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/wh1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/wh2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/wh4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">As war rages on throughout the Northern Realms, you take on the greatest contract of your life — tracking down the Child of Prophecy, a living weapon that can alter the shape of the world.</h4>
        <a class=" btn btn-success loc1" href="https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/" role="button">Purchase</a>
        </div>
      </div>
    </div>
    <div class ="overlay7" id="spider">
      <div class ="padd7">
        <div class="pic">
        <h1 class="white">Spiderman Remastered</h1>
        <img src="images/sapi.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Over Positive (30.163)<br>Release Date : 12 August 2022<br>Publisher : Insomniac Games<br>Developer : Playstation PC LLC</h5>
        <div id="carouselExampleControls5" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/sapi1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/sapi2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/sapi1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/sapi2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/sapi1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/sapi2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/sapi4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">In Marvels Spider-Man Remastered, the worlds of Peter Parker and Spider-Man collide in an original action-packed story. Play as an experienced Peter Parker, fighting big crime and iconic villains in Marvel’s New York. Web-swing through vibrant neighborhoods and defeat villains with epic takedowns.</h4>
        <a class=" btn btn-success loc1" href="https://store.steampowered.com/app/1817070/Marvels_SpiderMan_Remastered/" role="button">Purchase</a>
        </div>
      </div>
    </div>
    <div class ="overlay8" id="ow">
      <div class ="padd8">
        <div class="pic">
        <h1 class="white">Overwatch 2</h1>
        <img src="images/over.jpg" width="300px" height="300px">
        <h5 class="posi white" style="float: right ;">Reviews : Over Positive (320.669)<br>Release Date : 5 October 2022<br>Publisher : Blizzard Entertainment<br>Developer : Blizzard Entertainment</h5>
        <div id="carouselExampleControls5" class="carousel slide margin pa" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/ow1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/ow2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/ow1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/ow2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/ow1.jpg"  class="d-block w-25" style="float: left;"  alt="...">
              <img src="images/ow2.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow3.jpg"  class="d-block w-25" style="float: left;" alt="...">
              <img src="images/ow4.jpg"  class="d-block w-25"  style="float: left;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <h4 class="white marg"style="float: right;">Overwatch 2 is a free-to-play, team-based action game set in the optimistic future, where every match is the ultimate 5v5 battlefield brawl. Play as a time-jumping freedom fighter, a beat-dropping battlefield DJ, or one of over 30 other unique heroes as you battle it out around the globe.</h4>
        <a class=" btn btn-success loc1" href="https://overwatch.blizzard.com/en-us/" role="button">Purchase</a>
        </div>
      </div>
    </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
      <div class="carousel-inner">  
        <a href="#cyber" class="carousel-item active">
          <img src="images/cp.jpg" class="d-block w-100" style="height:465px;" alt="...">
        </a>
        <a href="#rdr" class="carousel-item">
          <img src="images/rd2.jpg" class="d-block w-100" style="height:465px;" alt="...">
        </a>
        <a href="#village" class="carousel-item">
          <img src="images/rev.jpg" class="d-block w-100" style="height:465px;" alt="...">
        </a>
        <a href="#witch" class="carousel-item">
          <img src="images/w3.png" class="d-block w-100" style="height:465px;" alt="...">
        </a>
        <a href="#spider" class="carousel-item">
          <img src="images/spd.png" class="d-block w-100" style="height:465px;" alt="...">
        </a>
        <a href="#ow"  class="carousel-item">
          <img src="images/c4.jpg" class="d-block w-100" style="height:465px;" alt="...">
        </a>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <h1 class="botak">Top On Novembers</h1>
    <h5 class="botak2">Recomendded</h1>
    <div class="row"></div>
    <div class="col-8 white right back">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
      <?php
        include 'config.php';
        $query = mysqli_query($con, "SELECT gambar,nama,harga,link FROM games ORDER BY id DESC");
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <a id="item-1" href="<?php echo $data['link']; ?>" target="_blank">
        <img src="images/<?php echo $data['gambar']; ?>"alt="Bootstrap" width="120" height="50" class="newstyle">
          <h6 class="white"><?php echo $data['nama']; ?></h6>
          <p class="white"><?php echo $data['harga']; ?></p>
        </a>
        <?php
        }
        ?>
        </a>
      </div>
    </div>
  </div>
  <ul class="list-group pos" style="width:30%; ">
    <li class="list-group-item pos1"><a href="https://store.steampowered.com/app/1238840/Battlefield_1/" target="_blank" class="white"><img src="images/bf1.png" alt="Bootstrap" width="130" height="60" class="newstyle">Battlefield I<h6>Rp 479.000</h6></a></li>
    <li class="list-group-item pos2"><a href="https://store.steampowered.com/app/242760/The_Forest/" target="_blank" class="white"><img src="images/for.jpg" alt="Bootstrap" width="130" height="60" class="newstyle">The Forest<h6>Rp 108.999</h6></a></li>
    <li class="list-group-item pos1"><a href="https://store.steampowered.com/app/1245620/ELDEN_RING/" target="_blank" class="white"><img src="images/eld.jpg" alt="Bootstrap" width="130" height="60" class="newstyle">Elden Ring<h6>Rp 599.000</h6></a></li>
    <li class="list-group-item pos2"><a href="https://store.steampowered.com/app/268910/Cuphead/" target="_blank" class="white"><img src="images/cup.png" alt="Bootstrap" width="130" height="60" class="newstyle">Cuphead<h6>Rp 135.999</h6></a></li>
    <li class="list-group-item pos1"><a href="https://store.steampowered.com/app/367520/Hollow_Knight/" target="_blank" class="white"><img src="images/hol.jpg" alt="Bootstrap" width="130" height="60" class="newstyle">Hollow Knight<h6>Rp 115.999</h6></a></li>
  </ul>
  <h1 class="botak1" id="action">New on Action</h1>
  <div class="d-flex justify-content-center pad">
    <a href="https://store.steampowered.com/app/1938090/Call_of_Duty_Modern_Warfare_II/" target="_blank"  class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/cd.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">CALL OF DUTY: MODERN WARFARE II</h5>
        <p class="card-text">Call of Duty: Modern Warfare II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141.</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/2064650/Tower_of_Fantasy/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/tof.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tower of Fantasy</h5>
        <p class="card-text">Embark together on your fantasy adventure! Set hundreds of years in the future on the distant planet of Aida, the shared open-world RPG, anime-infused sci-fi adventure Tower of Fantasy now is officially available on Steam.</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1577250/The_Chant/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/chant.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">The Chant</h5>
        <p class="card-text">A single-player, third person horror action-adventure game set on a remote spiritual island retreat. To survive you must craft, fight, and escape the psychedelic horrors set loose when a spiritual ritual goes wrong and awakens a dimension of cosmic terror.</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1182900/A_Plague_Tale_Requiem/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/plague.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">A Plague Tale: Requiem</h5>
        <p class="card-text">Embark on a heartrending journey into a brutal, breathtaking world, and discover the cost of saving those you love in a desperate struggle for survival. Strike from the shadows or unleash hell with a variety of weapons, tools and unearthly powers.</p>
      </div>
    </a>
  </div>
  <h1 class="botak1" id="adventure">Top Seller From Adventure</h1>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://store.steampowered.com/app/1063730/New_World/" target="_blank"><img src="images/nw2.jpg" class="d-block w-50" style="height:465px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1687950/Persona_5_Royal/" target="_blank"><img src="images/p5.jpg" class="d-block w-50" style="height:465px;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/" target="_blank"><img src="images/gta.jpg" class="d-block w-50" style="height:465px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1593500/God_of_War/" target="_blank"><img src="images/gow.jpg" class="d-block w-50" style="height:465px;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/252490/Rust/" target="_blank"><img src="images/rust.jpg" class="d-block w-50" style="height:465px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1172620/Sea_of_Thieves/" target="_blank"><img src="images/sot.jpg" class="d-block w-50" style="height:465px;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/648800/Raft/" target="_blank"><img src="images/rafy.jpg" class="d-block w-50" style="height:465px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/" target="_blank"><img src="images/s5.jpeg" class="d-block w-50" style="height:465px;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/1332010/Stray/" target="_blank"><img src="images/stray.jpg" class="d-block w-50" style="height:465px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1426210/It_Takes_Two/" target="_blank"><img src="images/t2.jpg" class="d-block w-50" style="height:465px;" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="botak1" id="sim">Recomendded for Simulation</h1>
  <div class="d-flex justify-content-center pad">
    <a href="https://store.steampowered.com/app/1248130/Farming_Simulator_22/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/fs.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Farming Simulator 22</h5>
        <p class="card-text">Rp 562.000</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1290000/PowerWash_Simulator/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/pw.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PowerWash Simulator</h5>
        <p class="card-text">Rp 349.000</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/265930/Goat_Simulator/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/goat.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Goat Simulator</h5>
        <p class="card-text">Rp 69.999</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1222670/The_Sims_4/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/sims.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">The Sims 4</h5>
        <p class="card-text">Free</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1480560/Lawn_Mowing_Simulator/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/lwm.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lawn Mowing Simulator</h5>
        <p class="card-text">Rp 220.999</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/976590/Bus_Simulator_21/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/bus.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bus Simulator 21</h5>
        <p class="card-text">Rp 419.999</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1435790/Escape_Simulator/" target="_blank" class="card text-bg-success text-center my-3 mx-0" style="width: 18rem;">
      <img src="images/esc.jpg" style="height:170px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Escape Simulator</h5>
        <p class="card-text">Rp 95.999</p>
      </div>
    </a>
  </div>
  <h1 class="botak1" id="sport">Hot on Sports</h1>
  <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://store.steampowered.com/app/1904540/Football_Manager_2023/" target="_blank"><img src="images/foot.jpeg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1811260/EA_SPORTS_FIFA_23/" target="_blank"><img src="images/fif.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1919590/NBA_2K23/" target="_blank"><img src="images/nba.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1588010/PGA_TOUR_2K23/" target="_blank"><img src="images/golf.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/620980/Beat_Saber/" target="_blank"><img src="images/bs.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1506830/FIFA_22/" target="_blank"><img src="images/fifa.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/571740/Golf_It/" target="_blank"><img src="images/gol.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/861650/Session_Skate_Sim/" target="_blank"><img src="images/skate.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/1255630/WWE_2K22/" target="_blank"><img src="images/wwe.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/488310/Eleven_Table_Tennis/" target="_blank"><img src="images/table.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1701380/Cricket_22/" target="_blank"><img src="images/crick.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
        <a href="https://store.steampowered.com/app/1760250/Madden_NFL_23/" target="_blank"><img src="images/nfl.jpg" class="d-block w-25" style="height:300px; float: left;" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="botak1" id="racing">Fresh On Racing</h1>
  <div class="d-flex justify-content-center pad">
    <a href="https://store.steampowered.com/app/1785910/SBK22/"target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/sbk.jpg" style="height:210px ;" class="card-img-top " alt="...">
      <div class="card-body">
        <h5 class="card-title">SBK 22</h5>
        <p class="card-text">Saddle up your Superbike and show what you're made of while racing in the official 2022 WorldSBK™. After ten years, SBK™ returns with a title more immersive and engaging than ever!</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1953520/WRC_Generations__The_FIA_WRC_Official_Game/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/wrc.jpg" style="height:210px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">WRC Generation</h5>
        <p class="card-text">Rise to all the challenges of the most comprehensive, realistic and demanding rally simulation ever developed. Dive into the heart of the action and drive the cars from the 2022 WRC championship, including the new hybrid models.</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1918530/Pocket_Stables/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/stables.jpg" style="height:210px ;"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pocket Stables</h5>
        <p class="card-text">Manage a ranch while training your racehorses to race for a Triple Crown.</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1761870/FLASHOUT_3/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/fo.jpg" style="height:210px ;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Flashout III</h5>
        <p class="card-text">FLASHOUT IS BACK! Where high speed meets high stakes. Where unforgiving combat, loud electronic music and addictive boosts of adrenaline mix up to separate winners from losers. Where gravitation is nothing more than an empty word. Take part in an exciting, head-to-head fight to the finish!</p>
      </div>
    </a>
    <a href="https://store.steampowered.com/app/1839940/Dakar_Desert_Rally/" target="_blank" class="card text-bg-success text-center my-3 mx-2" style="width: 18rem;">
      <img src="images/dakar.jpg"style="height:210px ;"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dakar Desert Rally</h5>
        <p class="card-text">Dakar Desert Rally is the biggest off-road rally racing adventure ever developed. Experience the speed and excitement of the largest rally race on the planet, featuring a wide variety of licensed vehicles from motorcycles, cars, trucks, quads and SSVs.</p>
      </div>
    </a>
  </div>
  <div class="footer">
    <hr style="color: white; width: 80%; margin-left: auto; margin-right: auto;">
    <p class="footer-text">Noki Gaming Corporation. All rights reserved. All trademarks are property of their respective owners in the ID and other countries.
      VAT included in all prices where applicable. </p>
    <hr style="color: white; width: 80%; margin-left: auto; margin-right: auto;">
    <div class="link">
    <a href="#about" >About Us</a><p>&nbsp|&nbsp</p>
    <a href="#contact" >Contact Us</a><p>&nbsp|&nbsp</p>
    <a href="#" >Scroll To The Top </a><p>&nbsp&nbsp</p>
    </div>
  </div>
  <div class ="overlay2" id="contact">
    <div class ="padd2">
      <h1 class="white">My Social Media</h1>
      <h4 class="white"><img src="images/wa.png" style="height:70px ; width: 80px;" class="card-img-top" alt="...">082277145735</h4>
      <h4 class="white"><img src="images/ins.png" style="height:40px ; width: 40px;" class="card-img-top" alt="..."><a href="https://www.instagram.com/dion096/">&nbsp&nbsp@dion096</a></h4>
    </div>
  </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>