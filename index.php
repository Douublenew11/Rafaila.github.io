<?php 
require "config/koneksi.php";

$produk = query($koneksi,"SELECT * FROM rafailaproduk");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">

    <!-- My css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style/style.css">

    <title>Pangsit</title>
    <style>
      .container .navbar-brand {
        color : white;
      }
      .collapse .navbar-nav .nav-item .nav-link {
        color : white;
      }
      .bg-main {
        background-color: #ab0010;
      }
      .center-div {
        font-size : 20px;
      }
      .bg-second {
        background-color: #ab0010;
      }
      .profile p {
        color : white;
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-main">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">Profile Perusahaan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#produk">Produk</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#laris">Produk Terbaru</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a class="nav-link text-white" href="admin/">Login</a>
          </span>
        </div>
      </div>
    </nav>

    <section class="jumbotron" data-parallax="scroll" data-image-src="img/banner.jpg">
    </section>
    
      <section class="bg-second" id="about">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,202.7C240,160,300,96,360,101.3C420,107,480,181,540,218.7C600,256,660,256,720,256C780,256,840,256,900,218.7C960,181,1020,107,1080,85.3C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row">
              <div class="col mb-12">
                <h2 class="text-center fs-2" style="color : white"> Profile Perusahaan Pangsit</h2>
              </div>
            </div>
            <div class="profile row justify-content-center text-center">
              <div class="col-md-12">
                <p class="fs-5" style="font-size: 20px;">
                  Nama Perusahaan : Pangsit <br>
                </p> <br>
              </div>
              <div class="col-md-12">
                <p class="fs-5" style="font-size: 15px;">
                Makanan ringan pangsit merupakan suatu produk yang ditawarkan 
                untuk membantu masyarakat dalam menemukan makanan ringan sehat non MSG 
                dan bisa di konsumsi siapa saja karena produk ini diproses dengan menggunakan 
                bahan-bahan alami dan tanpa menggunakan bahan pengawet.<br>
                </p> <br><br>
              </div>
            </div>
            <div class="row justify-content-center">
          
          <div class="row">
            <div class="col-md-6 mb-2">
              <iframe width="100%"src="img/video.mp4" title="Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mb-2">
             <audio src="img/audio.mp3" controls></audio>
             <br>
             <br>
             <button style="background-color: #f1f1f1; border-radius: 7px; margin-left: 100px"><a style="text-decoration: none; color: black" href="img/audio.mp3" download>Download</a></button>
          </div>
          </div>
        </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,202.7C240,160,300,96,360,101.3C420,107,480,181,540,218.7C600,256,660,256,720,256C780,256,840,256,900,218.7C960,181,1020,107,1080,85.3C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
      </section>
      
      <section id="produk">
        <div class="container mt-3">
            <div class="row">
                <div class="col mb-5">
                    <h2 class="text-center fs-2">Pangsit Produk</h2>
                    <p class="text-center fs-5">Berbagai Macam Makanan Yang Enak Dan Inovasi Terbaru</p>
                </div>
            </div>
            <div class="row">
              <?php foreach($produk as $a): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="admin/img/<?= $a["foto"]?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $a["nama_produk"]?></h5>
                          <p class="card-text"><?= $a["deskripsi"]?></p>
                          <p class="card-text"><?= rupiah($a["harga"])?></p>
                          <a target="_blank" href="https://api.whatsapp.com/send?phone=6289515648738&text=Halo%20saya%20pelanggan%20dari%20web%20Pangsit%20mau%20pesan%20<?= $a["nama_produk"]?>" class="btn" style="background-color: #be0000; color : white">Order Now</a>
                        </div>
                      </div>
                </div>
                <?php endforeach; ?>
               
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#be0000" fill-opacity="1" d="M0,0L48,53.3C96,107,192,213,288,229.3C384,245,480,171,576,149.3C672,128,768,160,864,160C960,160,1056,128,1152,106.7C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>

      <section class="bg-second" id="terbaru">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,202.7C240,160,300,96,360,101.3C420,107,480,181,540,218.7C600,256,660,256,720,256C780,256,840,256,900,218.7C960,181,1020,107,1080,85.3C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row">
              <div class="col mb-12">
                <h2 class="text-center fs-2" style="color : white">Produk Terbaru</h2>
              </div>
            </div>
                <div class="col-12">
                  <div class="row justify-content-center">
                  <div class="col-md-4 mb-3 mt-3">
                    <div class="card">
                        <img src="admin/img/Pangsit Goreng Isi Ayam.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-4 mb-3 mt-3">
                    <div class="card">
                        <img src="admin/img/Pangsit Pedas Isi Ayam.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
                
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L30,277.3C60,267,120,245,180,202.7C240,160,300,96,360,101.3C420,107,480,181,540,218.7C600,256,660,256,720,256C780,256,840,256,900,218.7C960,181,1020,107,1080,85.3C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
      </section>

      <footer class="bg-main text-white text-center pt-2 pb-2 fw-bold ">
        <p style="color : white" class="mt-3">Created by Rafaila </p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>
  </body>
</html>