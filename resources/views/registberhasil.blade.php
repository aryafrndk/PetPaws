<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <!-- Nav Bar -->
    <section class="" id="title">
      <div class="container-lg">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-1">
          <div class="container px-1 px-lg-2">
            <a class="navbar-brand" href="{{ route('index') }}">PetPaws</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
          </nav>
        </div>
      </section>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Registrasi Berhasil
          </div>
          <div class="card-body">
            <p>Selamat! Anda telah berhasil melakukan registrasi.</p>
            <p>Silakan login menggunakan formulir di bawah ini.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Halaman Login</a>
          </div>
        </div> 
      </div>
    </div>
  </div>

</body>
</html> 