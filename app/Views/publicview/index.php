<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Naespa-Novel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Snowburst+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Naespa-Library-Novel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#tentang">ABOUT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contact">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/login') ?>">LOGIN</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- End Navbar -->

    <!-- slide -->
    <div id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets'); ?>/image/library-1.png" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Welcome To Naespa - Novel</h5>
              <p>In Kwangya</p>
              <p><a href="#home" class="btn btn-success rounded-pill">Home</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets'); ?>/image/library-2.png" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Welcome To Naespa - Novel</h5>
              <p>In Kwangya</p>
              <p><a href="#tentang" class="btn btn-success rounded-pill">About Us</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets'); ?>/image/library-3.png" class="d-block carousel-image" alt="image">
            <div class="carousel-caption">
              <h5>Welcome To Naespa - Novel</h5>
              <p>In Kwangya</p>
              <p><a href="#contact" class="btn btn-success rounded-pill">Contact</a></p>
            </div>
          </div>
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
    </div>
    <!-- akhir slide -->

    <!-- tentang kami -->
    <div class="container" id="tentang">
        <div class="box-tentang">
            <h1 class="text-center mb-5">ABOUT US</h1>
        <p class="text-center">Naespa-Novel adalah sebuah platform inovatif yang didedikasikan untuk membawa pengalaman membaca novel menjadi lebih menarik dan mudah dijangkau bagi para pecinta literatur. Visi kami adalah memperluas aksesibilitas terhadap novel-novel berkualitas, sehingga setiap pembaca dapat menemukan kisah yang sesuai dengan minat dan preferensi mereka. Dengan tekad yang kuat untuk memperkaya budaya literasi di kalangan masyarakat, kami berkomitmen untuk menyajikan koleksi novel yang beragam dan menginspirasi.</p>
        <p class="text-center">Sebagai bagian dari komitmen kami untuk mendukung industri kreatif lokal, Naespa-Novel juga memberikan platform bagi penulis Indonesia untuk mempublikasikan karya-karya mereka. Dengan memberikan ruang bagi penulis lokal untuk berkarya dan mendapatkan pengakuan, kami berharap dapat menginspirasi generasi baru penulis dan membantu memperkuat ekosistem literatur Indonesia. Bersama-sama, kami ingin menjadi mitra setia para pembaca dan penulis dalam perjalanan mengeksplorasi dunia yang tak terbatas dari kata-kata dan imajinasi.</p>
        <p class="text-center">Di Naespa-Novel, kami meyakini bahwa kekuatan kata-kata dapat mengubah dunia. Oleh karena itu, kami terus berusaha untuk memperluas pengaruh positif literatur dalam masyarakat. Melalui kemitraan dengan lembaga-lembaga pendidikan dan organisasi nirlaba, kami mengadakan program literasi yang bertujuan untuk meningkatkan minat membaca dan keterampilan literasi di kalangan anak-anak dan remaja. Dengan cara ini, kami berharap dapat membawa dampak yang berkelanjutan dalam memajukan budaya literasi di Indonesia.</p>      
      </div>
    </div>
    <!-- akhir tentang kami -->

    <!-- contact -->
    <div class="container" id="contact">
        <div class="box-contact">
            <h1 class="text-center mb-5">CONTACT US</h1>
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Address</h6>
                            <p class="card-text">Jl. Kwangya, Apgujeong-ro, Gangnam-gu, Seoul, South Korea</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-phone-alt fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Phone Number</h6>
                            <p class="card-text">+62 823-1274-8721</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="fas fa-envelope fa-3x text-success mb-2"></i>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Email</h6>
                            <p class="card-text">naespa04@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir contact -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>