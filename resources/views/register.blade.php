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

    <section class="vh-100 overflow-auto" style="background-color: #eee;">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style=" margin : 80px ;padding: 1px; ;border-radius: 10px; background: #fff;">
                            <div class="card-body p-5 ">
                                <h2 class="text-uppercase text-center mb-5" style="color: #ef8172;">Create an account</h2>
                                
                                <!-- tag formulir pendaftaran-->
                                <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="mt-3 mb-0">Username</label>
                                <input type="text" class="form-control" id="username" name ="username" placeholder="Enter Username" required>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="mt-3 mb-0">Email</label>
                                <input type="email" class="form-control " id="email" name ="email" placeholder="Enter Email" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="mt-3 mb-0">Password</label>
                                <input type="password" class="form-control" id="password" name ="password" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="mt-3 mb-0">Repeat Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name ="password_confirmation" placeholder="Re-enter Password" required>
                            </div>
                            @if ($errors->has('username') || $errors->has('email'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </div>
                        @endif
                            <button type="submit" class="btn btn-primary mt-3 mb-0"> Register </button>
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
