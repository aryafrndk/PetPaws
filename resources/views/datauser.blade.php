<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - PetPaws Admin</title>

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

    <!-- JQuery Scripts  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/ae628f5a6f.js" crossorigin="anonymous"></script>

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
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

    <!-- Container untuk tabel data user-->
    <div class="container mt-5" style="padding-top: 70px;">
        <div class="row">
        <div class="col-lg-3">
                <h4> Admin Menu </h4>
                <div class="list-group">
                    <a href="#" class="list-group-item">Data User</a>
                </div>
            </div>
            <div class="col-lg-9">
                <h2>Data User</h2>
                <!-- Tabel Data User -->
                <table id="userTable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Id</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- Isi tabel akan ditampilkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Skrip JavaScript untuk menampilkan dan mengelola data kucing -->
    <script>
            // Ambil dan tampilkan data kucing menggunakan DataTables
        function showUserData() {
            // Ambil data User dari file JSON
            $.getJSON('/users', function (data) {
                const userTableBody = $('#userTableBody');
                userTableBody.empty();

                let counter = 1;
                // Ulangi data user dan tambahkan baris ke dalam tabel
                $.each(data, function (index, user) {
                    const userRow = $(`
                        <tr>
                            <td>${counter}</td>
                            <td>${user.username}</td>
                            <td>${user.email}</td>
                            <td>${user.password}</td>
                            <td>${user.id}</td>
                            <td>
                                <a href="{{ url('/users') }}/${user.id}/edit" class="btn btn-warning">Edit</a>
                                <form method="POST" action="{{ url('/users') }}/${user.id}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    `);

                    // Tambahkan baris ke dalam tbody
                    userTableBody.append(userRow);
                    counter++;
                });

                // Inisialisasi DataTables setelah memuat data
                const dataTable = $('#userTable').DataTable({
                    "lengthMenu": [5, 10, 25, 50],
                    "pageLength": 10,
                    "pagingType": "simple_numbers",
                    "ordering": true,
                    "info": true,
                    "searching": true,
                    "responsive": true,
                    "columnDefs": [
                        {
                            "targets": [4],
                            "orderable": false,
                        },
                        {
                            "targets": [5],
                            "orderable": false,
                            "searchable": false,
                        },
                    ],
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching user data:', errorThrown);
            });
    }

    // Panggil fungsi untuk menampilkan data user saat halaman dimuat
    $(document).ready(function () {
        showUserData();
    });

    </script>

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
