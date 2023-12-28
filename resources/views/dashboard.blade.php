<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatnCat</title>

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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <section class="" id="title">
        <div class="container-lg">
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
                                <a class="nav-link fw-bold" href="{{ route('index') }}">Beranda</a>
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

    <!-- Konten Dashboard -->
    <div class="container mt-5" style="padding-top: 70px;">
        <div class="row">
            <div class="col-lg-3">
                <h4> Cat categories </h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Semua Jenis">Semua Jenis</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="British Shorthair" >British Shorthair</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Maine Coon">Maine Coon</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Munchkin">Munchkin</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Scottish Fold">Scottish Fold</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Ragdoll">Ragdoll</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Himalaya">Himalaya</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Persian">Persian</a>
                    <a href="#" class="list-group-item list-group-item-action" data-filter="Siamese">Siamese</a>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- konten Utama -->
                <div id="cat-cards" class="row">
                    <!-- kartu penjualan kucing akan disisipkan di sini -->
                </div>
            </div>
        </div>
    </div>


    <script>
        // Gunakan jQuery untuk mengambil data kucing dari database
        $.getJSON('/cats', function (data) {
            const catCardsContainer = $('#cat-cards');
    
            // Buat baris Bootstrap untuk memuat kartu kucing
            const cardRow = $('<div class="row"></div>');
    
            // Ulangi data kucing dan buat kartu untuk setiap kucing
            $.each(data, function (index, cat) {
                // Buat kolom Bootstrap untuk setiap kartu kucing
                const card = $(`
                    <div class="col-lg-3 col-md-4 col-sm-6 cat-card" data-type="${cat.breed}">
                        <div class="card mb-4">
                            <img src="${cat.image}" class="card-img-top" alt="${cat.name}" style="height:215px; width: 215px">
                            <div class="card-body">
                                <h5 class="card-title">${cat.name}</h5>
                                <p class="card-text">${cat.breed}</p>
                                <p class="card-text">${cat.age} Bulan</p>
                                <p class="card-text">Rp.${cat.price}</p>
                                <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                `);
    
                // menambahkan kartu ke cardRow
                cardRow.append(card);
            });
    
            // menambahkan cardRow ke catCardsContainer
            catCardsContainer.append(cardRow);
    
            // handler untuk filter jenis kucing
            $('.list-group-item').on('click', function () {
                const filterType = $(this).data('filter');
    
                // sembunyikan semua kartu
                $('.cat-card').hide();
    
                // menampilkan kartu yang sesuai dengan jenis yang dipilih
                if (filterType === 'Semua Jenis') {
                    $('.cat-card').show();
                } else {
                    $(`.cat-card[data-type="${filterType}"]`).show();
                }
            });
        })
                .fail(function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching cat data:', errorThrown);
            });
    </script>

</body>
</html>
