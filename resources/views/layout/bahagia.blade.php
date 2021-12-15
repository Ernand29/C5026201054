<!DOCTYPE html>
<html>
<head>
    <title>PWEB - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- CSS and JS dependencies for Tempus Dominus by /Eonasdan --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row m-5">
            <aside class="col-2">
                <header class="row navbar-brand container rounded bg-dark p-2">
                    <div class="col-3 py-2">
                        <a href="https://github.com/Ernand29/C5026201054" class="navbar-brand">
                            <img src="{{ asset('image/foto1.png') }}" class="img-fluid rounded float-start"/>
                        </a>
                    </div>
                    <div class="col-9 fw-bold text-decoration-none text-white py-2">
                        <div class="row">
                            <span>5026201054</span>
                        </div>
                        <div class="row">
                            <span>Ernando T.N.H</span>
                        </div>
                    </div>
                </header>
                <div class="row container rounded bg-dark mt-4 p-2">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky-top">
                        <div class="col fw-bold text-white">
                            <div class="align-items-center text-center mb-1">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a href="/pegawai" class="nav-link text-white">Data Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/absen" class="nav-link text-white">Data Absen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tugas" class="nav-link text-white">Data Tugas</a>
                                </li>
                                <li class="nav-white">
                                    <a href="/buku" class="nav-link text-white">Praktikum</a>
                                </li>
                                <li class="nav-white">
                                    <a href="/karyawan1" class="nav-link text-white">UAS</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                </div>
            </aside>
            <div class="col-10">
                <div class="row container rounded bg-dark p-5">
                    <h1 class="text-white">@yield('judulhalaman')</h1>
                    <div class="text-white">
                        @section('konten')
                    @show
                    </div>
                </div>
            </div>
        </div>
        <footer class="m-5">
            <div style="bottom:0; position: fixed; left: 0; text-align: center; width: 100%; margin-bottom:10px;">
                <span>Hak Cipta oleh 5026201054 - Ernando Taufiq Nur Hidayat</span>
            </div>
        </footer>
    </div>
</body>
</html>
