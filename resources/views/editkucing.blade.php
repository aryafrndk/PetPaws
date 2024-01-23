
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kucing - PetPaws Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap & CSS -->
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/styles.css">

    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Scripts  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/ae628f5a6f.js" crossorigin="anonymous"></script>
</head>


<body>
<section class="" id="title">
        <div class="container-lg">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-1">
                <div class="container px-1 px-lg-2">
                    <a class="navbar-brand" href="#">PetPaws Admin</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Link navbar untuk bagian pada landing page -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item active">
                                <a class="nav-link fw-bold" href="{{ route('datauser') }}">Data User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('datakucing') }}">Data Kucing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="{{ route('index') }}">Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- Container untuk tabel data kucing -->
    <div class="container mt-5" style="padding-top: 70px;">
        <div class="row">
            <div class="col-lg-3">
                <h4> Cat categories </h4>
                <div class="list-group">
                    <a href="{{ route('datakucing') }}" class="list-group-item">Data Kucing</a>
                    <a href="{{ route('tambahkucing') }}" class="list-group-item">Tambah Kucing</a>
                </div>
            </div>
            <div class="col-lg-9">
                <h2>Data Kucing</h2>

                <form method="POST" action="{{ route('updatekucing', $cat->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $cat->name }}" required>
                    </div>

                    <div class="mb-3">
                <label for="breed" class="form-label">Jenis</label>
                <select class="form-select" id="breed" name="breed" value="{{ $cat->breed }}"required>
                    <option value="" > -- Pilih Jenis -- </option>
                    <option value="British Shorthair">British Shorthair</option>
                    <option value="Maine Coon">Maine Coon</option>
                    <option value="Munchkin">Munchkin</option>
                    <option value="Scottish Fold">Scottish Fold</option>
                    <option value="Ragdoll">Ragdoll</option>
                    <option value="Himalaya">Himalaya</option>
                    <option value="Persian">Persian</option>
                    <option value="Siamese">Siamese</option>
                </select>
            </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Usia (bulan)</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ $cat->age }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $cat->price }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar URL</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $cat->image }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

<!-- Footer -->
    <footer class="white-section text-center" id="footer">
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
