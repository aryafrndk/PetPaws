<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetPaws Admin</title>

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
          <a class="navbar-brand" href="{{ route('index') }}">PetPaws Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </nav>
      </div>
    </section>
      
    <section class="vh-100">
        <div class="px-4 py-5 px-md-5 vh-100 overflow-auto" style="background-color: #eee">
          <div class="container py-5  ">
            <div class="row gx-lg-5 justify-content-center">
              <div class="col-lg-6 mb-5 mb-lg-2">
                <div class="card rounded-5">
                  <div class="card-body py-xxl-5 px-md-5">
                  @if(session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif
                    <form action="{{ route('loginadmins') }}" method="post" class="was-validated">
                      @csrf
                      <div class="mb-3 mt-3">
                        <label for="usernameadmin" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="usernameadmin" placeholder="Masukkan username" name="usernameadmin" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Silakan isi kolom ini.</div>
                      </div>
                      <div class="mb-3">
                        <label for="passwordadmin" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="passwordadmin" placeholder="Masukkan password" name="passwordadmin" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Silakan isi kolom ini.</div>
                      </div>
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">Saya menyetujui syarat dan ketentuan</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback ">Centang kotak ini untuk melanjutkan.</div>
                      </div>
                      <button type="submit" class="btn btn-primary mb-4">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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