<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetPaws</title>

  <!-- Favicon -->
  <link rel="icon" href="favicon.ico">

  <!-- Bootstrap & CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/styles.css">

  <!-- Bootstrap JS -->
  <script src="bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Kit -->
  <script src="https://kit.fontawesome.com/ae628f5a6f.js" crossorigin="anonymous"></script>
</head>

<body>
      <section class="colored-section" id="title">

        <div class="container-fluid">
    
          <!-- Nav Bar -->
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-1">
            <div class="container px-1 px-lg-2">
              <a class="navbar-brand" href="">PetPaws</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Link navbar untuk bagian pada landing page -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">About Us</a></li>
                      <li><a class="dropdown-item" href="#footer">Contact</a></li>
                      <li><a class="dropdown-item" href="#">Coming Soon</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold" href="">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-light rounded-pill px-5 fw-bold" href="{{ route('login') }}">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

      <!-- Title -->
      <div class="row my-5">
        <div class="col-lg-6 my-5 ">
          <h1 class ="fw-bolder">PetPaws</h1>
          <h5>PetPaws adalah platform adopsi kucing online yang berkomitmen untuk membantu kucing-kucing yang mencari rumah baru dan menyediakan kesempatan bagi pecinta kucing untuk menemukan teman bulu yang sempurna. Kami adalah sebuah komunitas yang peduli dan berdedikasi untuk kesejahteraan kucing dan pemilik yang potensial. Dengan lebih dari 50 kucing yang mencari rumah di seluruh Kota Bandung, PetPaws adalah tempat yang sempurna untuk menemukan teman kucing impian Anda..</h5>
          <a href="{{ route('login') }}">
            <button type="button" width="200px" class="btn btn-dark btn-lg login-button">Join Us</button>
          </a>
        </div>
        <div class="col-lg-6 title-image-div">
        <img class="title-image rounded-1 shadow-lg" src="{{ asset('images/Cat-img1.jpg') }}" >
        </div>
      </div>

    </div>

  </section>

  <!-- Features -->
  <section class="white-section" id="features">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 feature-col">
          <i class="fa-solid fa-circle-check fa-color"></i>
          <h3 class="feature-title">Kucing yang Menunggu</h3>
          <p>Di PetPaws, Anda akan menemukan beragam kucing yang siap untuk menjadi teman setia Anda. Kami memiliki berbagai jenis kucing, dari kucing ras hingga kucing peliharaan yang mencari rumah. </p>
        </div>
        <div class="col-lg-4 feature-col">
          <i class="fa-solid fa-bullseye fa-color"></i>
          <h3 class="feature-title">Proses Adopsi yang Mudah</h3>
          <p>Kami memahami bahwa adopsi adalah komitmen besar. Oleh karena itu, kami menyediakan proses adopsi yang mudah dan transparan.</p>
        </div>
        <div class="col-lg-4 feature-col">
          <i class="fa-solid fa-heart fa-color"></i>
          <h3 class="feature-title">Keamanan dan Perawatan</h3>
          <p>Kami selalu memastikan bahwa semua kucing yang terdaftar di PetPaws mendapatkan perawatan medis yang diperlukan sebelum adopsi. Kesejahteraan kucing adalah prioritas utama kami.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- Testimonials -->
  <section class="colored-section" id="testimonials">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h3 class="testimonial-text"> <q>Kucing yang saya beli di sini sungguh luar biasa. Mereka sehat, cerdas, dan sangat penyayang. Ini adalah keputusan yang tak pernah saya sesali.</q></h3>
          <img class="testimonial-image" src="images/Cat-img2.jpg" alt="dog-profile">
          <em>Arya, Lembang</em>
        </div>
        <div class="carousel-item container-fluid">
          <h3 class="testimonial-text"><q>Kami sangat terkesan dengan kualitas pelayanan dan perawatan yang diberikan kepada kucing-kucing ini. Mereka benar-benar dirawat dengan baik sebelum kami mengadopsinya.</q></h3>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Avis, Buat Batu</em>
        </div>
        <div class="carousel-item container-fluid">
          <h3 class="testimonial-text"><q>Saya sangat senang dengan proses adopsi di sini. Semua pertanyaan saya dijawab dengan baik, dan saya merasa yakin bahwa saya memilih tempat yang tepat.</q></h3>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Keivan, Bojongsoang</em>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </section>

  <section class="background-section">
    <div class="container p-5">
      <div class="row">
        <div class="col-sm-6">
          <h2 class ="fw-bolder text-start">Pelukan Untuk Kucing Kesayangan Anda!</h2>
          <h1 class =" text-start">-------------<h1>
          <h5 class="text-start ">Saat Anda mengunjungi PetPaws, Anda tidak hanya mencari teman bulu baru, Anda juga ikut berkontribusi dalam memberikan rumah yang hangat kepada kucing yang membutuhkan.</h5>
          <a href="">
            <button type="button" class="btn btn-dark btn-lg rounded-pill px-4 login-button">Learn More</button>
          </a>
        </div>
      </div>
    </div>
  </section>  
  
  <!-- Call to Action -->
  <section class="colored-section" id="cta">
    <div class="container-fluid">
      <h3 class="section-heading">Find the True Love of Your Cat's Life Today.</h3>
      <div class="row">
        <div class="col-md-4">
          <img src="images/user1.jpg" alt="Kucing 1" style="width: 300px; height: 300px;">
        </div>
        <div class="col-md-4">
          <img src="images/user2.jpg" alt="Kucing 2" style="width: 300px; height: 300px;">
        </div>
        <div class="col-md-4">
          <img src="images/user3.jpg" alt="Kucing 3" style="width: 300px; height: 300px;">
        </div>
      </div>
      <a href="login.html">
        <button type="button" class="btn btn-dark btn-lg login-button">See Heaven</button>
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="white-section" id="footer">
    <div class="container p-3">

      <i class="fa-brands fa-twitter fa-footer"></i>
      <i class="fa-brands fa-facebook-f fa-footer"></i>
      <i class="fa-brands fa-instagram fa-footer"></i>
      <i class="fa-solid fa-envelope fa-footer"></i>
      <p>© Copyright 2022 PetPaws</p>

    </div>
  </footer>

</body>

</html>
