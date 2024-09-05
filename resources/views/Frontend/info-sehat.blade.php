<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bxicons -->
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- bootstrap icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        /* btn in navbar */
        @media {
            .btn-primary {
                background-color: #1aa6b7;
                /* border: none; */
                border-color: #1aa6b7;
            }

            .btn-primary:hover {
                background-color: #127681;
                border-color: #127681;
            }

            .btn-primary:active {
                background-color: #e63946;
            }

            .btn {
                margin-right: 10px;
                font-size: 15px;
                border-radius: 50px;
            }

            .btn:active {
                background-color: #e63946;
            }

            .btn-outline-primary {
                border-color: #1aa6b7;
                color: #1aa6b7
            }

            .btn-outline-primary:hover {
                background-color: #1aa6b7;
            }
        }

        /* Hero Section */
        .hero-section {
            background-color: #1aa6b7;
            padding: 100px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 36px;
            font-weight: 700;
            color: #fff;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #fff;
        }


        /* footer */
        @media {
            .footer-section {
                background-color: #1aa6b7;
                color: #ffffff;
                padding: 50px 0;
            }

            .footer-content {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .footer-logo img {
                max-width: 150px;
            }

            .footer-links,
            .footer-contact {
                flex: 1;
                margin: 0 20px;
            }

            .footer-links h4,
            .footer-contact h4 {
                font-size: 1.5rem;
                margin-bottom: 20px;
                color: #ffffff;
            }

            .footer-links ul {
                list-style: none;
                padding: 0;
            }

            .footer-links ul li {
                margin-bottom: 10px;
            }

            .footer-links ul li a {
                color: #ffffff;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .footer-links ul li a:hover {
                color: #d1e0e0;
            }

            .footer-contact p {
                margin: 10px 0;
            }

            .footer-contact a {
                color: #ffffff;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .footer-contact a:hover {
                color: #d1e0e0;
            }

            .footer-bottom {
                text-align: center;
                margin-top: 30px;
            }

            .footer-bottom p {
                margin: 0;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/main">
                <img src="{{ asset('assets/Frontend/img/cek sehat.png') }}" alt="Cek Sehat" width="110">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/about-us">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel') }}">ARTIKEL</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('info-sehat') }}" id="infoKesehatanDropdown">
                            INFO SEHAT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoKesehatanDropdown">
                            <li><a class="dropdown-item" href="{{ route('fokus-sehat') }}">Fokus Sehat</a></li>
                            <li><a class="dropdown-item" href="/ragam-penyakit">Ragam Penyakit</a></li>
                            <li><a class="dropdown-item" href="/ragam-obat">Ragam Obat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="btn btn-outline-primary rounded-5" id="searchIcon" href="#"><i
                                class="bx bx-search"></i> SEARCH</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- hero section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hero-title">Info Sehat</h1>
                    <p class="hero-subtitle">Temukan informasi kesehatan yang akurat dan terpercaya</p>
                </div>
            </div>
        </div>
    </section>


    {{-- kategoriii --}}
    <section id="info-sehat">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="{{ asset('assets/Frontend/img/fokus-sehat.png') }}" class="card-img-top"
                            alt="Fokus Sehat">
                        <div class="card-body">
                            <h5 class="card-title">Fokus Sehat</h5>
                            <p class="card-text">Informasi tentang cara menjaga kesehatan dan mencegah penyakit.</p>
                            <a href="/fokus-sehat" class="btn btn-primary px-5">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="{{ asset('assets/Frontend/img/ragam penyakit.png') }}" class="card-img-top"
                            alt="Ragam Penyakit">
                        <div class="card-body">
                            <h5 class="card-title">Ragam Penyakit</h5>
                            <p class="card-text">Informasi tentang berbagai jenis penyakit dan cara mengobatinya.
                            </p>
                            <a href="/ragam-penyakit" class="btn btn-primary px-5">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <img src="{{ asset('assets/Frontend/img/ragam gejala.png') }}" class="card-img-top"
                            alt="Info Obat">
                        <div class="card-body">
                            <h5 class="card-title">Ragam Gejala</h5>
                            <p class="card-text">Pelajari berbagai gejala dan potensi penyebabnya.</p>
                            <a href="/ragam-gejala" class="btn btn-primary px-5">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- footer --}}
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('assets/Frontend/img/cek sehat white.png') }}" alt="Logo" />
                </div>
                <div class="footer-links">
                    <h4 class="footer-heading">Navigasi</h4>
                    <ul>
                        <li><a href="#hero-carousel">Beranda</a></li>
                        <li><a href="#common">Gejala</a></li>
                        <li><a href="#advice">Saran</a></li>
                        <li><a href="#educational-resources">Sumber Daya</a></li>
                        <li><a href="#faqs">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <p>Email: <a href="mailto:contact@example.com">bm3@gmail.com</a></p>
                    <p>Telepon: +62 123 456 789</p>
                    <p>Alamat: Jl. Cileungsi No.1, Kab.Bogor, Indonesia</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Rayya & Aldizar. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
