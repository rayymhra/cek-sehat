<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bxicons -->
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- bootstrap icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        /* light color: #1aa6b7 */
        /* primary color: #127681 */
        /* dark color: #3a3a3a */

        * {
            font-family: "Montserrat", sans-serif;
        }

        /* title */
        .title {
            font-size: 23px;
            font-weight: 700;
            text-transform: uppercase;
            color: #3a3a3a;
        }

        /* NAVBAR */
        @media {
            .navbar {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 10000000000000000000000000000000;
                border-bottom: 1px solid #ddd;
            }

            .navbar-nav .nav-link {
                margin-right: 15px;
                color: #333;
                transition: color 0.3s ease-in-out;
                font-size: 15px;
            }

            .navbar-nav .nav-link:hover {
                color: #127681;
            }

            /* Dropdown */
            .dropdown:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                float: left;
                min-width: 160px;
                padding: .5rem 0;
                margin: .125rem 0 0;
                font-size: .875rem;
                color: #333;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: .25rem;
                box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
            }

            .dropdown-item {
                display: block;
                width: 100%;
                padding: .25rem 1.5rem;
                clear: both;
                font-weight: 400;
                color: #333;
                text-align: inherit;
                white-space: nowrap;
                background-color: transparent;
                border: 0;
                transition: color .15s ease-in-out, background-color .15s ease-in-out;
            }

            .dropdown-item:hover {
                background-color: #f8f9fa;
                color: #127681;
            }

            .dropdown-menu .dropdown-item:active {
                background-color: #3a3a3a;
                color: #fff;
            }

            @media (max-width: 767px) {
                .navbar-nav {
                    margin-top: 1rem;
                }
            }
        }

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

        /* hero */
        @media {
            .hero-container {
                background-color: #1aa6b7;
            }

            .hero-section {
                padding: 50px 0;
                color: white;
            }

            .hero-text {
                padding-left: 50px;
            }

            .hero-text h1 {
                font-size: 48px;
                font-weight: bold;
                color: white;
            }

            .hero-text p {
                font-size: 18px;
                color: white;
                margin-top: 20px;
            }

            .hero-image img {
                width: 90%;
                border-radius: 20px;
                margin: 10px;
                max-height: 300px;
            }

            .hero-image {
                text-align: center;
            }
        }

        /* categories */
        @media {
            .category-section-top {
                padding: 40px 0;
                background-color: #ffffff;
                margin-top: 60px;
                padding-top: 0;
            }

            .category-card {
                background: #f6f6f6;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 10px;
                transition: box-shadow 0.3s ease;
            }

            .category-card:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .category-card img {
                width: 60px;
                height: 60px;
                margin-bottom: 5px;
            }

            .category-title {
                font-size: 16px;
                font-weight: 500;
                color: #333;
            }

            a {
                text-decoration: none;
            }
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
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Frontend/img/cek sehat.png') }}" alt="Cek Sehat" width="110">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="searchIcon"><i class='bx bx-search'></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel') }}">ARTIKEL</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('info-sehat') }}" id="infoKesehatanDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            INFO SEHAT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoKesehatanDropdown">
                            <li><a class="dropdown-item" href="#">Fokus Sehat</a></li>
                            <li><a class="dropdown-item" href="#">Ragam Penyakit</a></li>
                            <li><a class="dropdown-item" href="#">Ragam Obat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="btn btn-outline-primary" href="#">LOGIN</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- hero section --}}
    <div class="container-fluid hero-container">
        <div class="row hero-section align-items-center">
            <div class="col-md-6 hero-text">
                <h1>Fokus Sehat</h1>
                <p>
                    Explore our resources to help you maintain your health and wellness. Whether you're looking for
                    information on specific conditions or tips for a healthier lifestyle, we have the information you
                    need.
                </p>
            </div>
            <div class="col-md-6 hero-image">
                <img src="{{ asset('assets/Frontend/img/fokus sehat.png') }}">
            </div>
        </div>
    </div>

    {{-- category --}}
    <div class="category-section-top">
        <div class="container">
            <h2 class="title text-center mb-5">fokus Sehat</h2>
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Alergi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/alergi.png') }}" alt="alergi">
                            <h3 class="category-title">Alergi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Bayi & Balita">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/bayi & balita.png') }}" alt="bayi & balita">
                            <h3 class="category-title">Bayi & Balita</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Diabetes">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/diabetes.png') }}" alt="diabetes">
                            <h3 class="category-title">Diabetes</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Hipertensi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/hipertensi.png') }}" alt="hipertensi">
                            <h3 class="category-title">Hipertensi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kanker">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kanker.png') }}" alt="kanker">
                            <h3 class="category-title">Kanker</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kardiovaskular">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kardiovaskular.png') }}" alt="kardiovaskular">
                            <h3 class="category-title">Kardiovaskular</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kecantikan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kecantikan.png') }}" alt="kecantikan">
                            <h3 class="category-title">Kecantikan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kehamilan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kehamilan.png') }}" alt="kehamilan">
                            <h3 class="category-title">Kehamilan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Mental">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mental.png') }}"
                                alt="kesehatan mental">
                            <h3 class="category-title">Kesehatan Mental</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Mulut">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mulut.png') }}" alt="kesehatan mulut">
                            <h3 class="category-title">Kesehatan Mulut</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Pria">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan pria.png') }}" alt="kesehatan pria">
                            <h3 class="category-title">Kesehatan Pria</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Wanita">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan wanita.png') }}"
                                alt="kesehatan wanita">
                            <h3 class="category-title">Kesehatan Wanita</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kulit">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kulit.png') }}" alt="kulit">
                            <h3 class="category-title">Kulit</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Mata">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/mata.png') }}" alt="mata">
                            <h3 class="category-title">Mata</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Nutrisi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/nutrisi.png') }}" alt="nutrisi">
                            <h3 class="category-title">Nutrisi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Olahraga">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/olahraga.png') }}" alt="olahraga">
                            <h3 class="category-title">Olahraga</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Pencernaan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/pencernaan.png') }}" alt="pencernaan">
                            <h3 class="category-title">Pencernaan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Sex & Relationships">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/sex & relationships.png') }}"
                                alt="sex & relationships">
                            <h3 class="category-title">Sex & Relationships</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Turun Berat Badan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/turun berat badan.png') }}"
                                alt="turun berat badan">
                            <h3 class="category-title">Turun Berat Badan</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


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
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#symptoms">Gejala</a></li>
                        <li><a href="#advice">Saran</a></li>
                        <li><a href="#educational-resources">Sumber Daya</a></li>
                        <li><a href="#faqs">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <p>Email: <a href="mailto:contact@example.com">contact@example.com</a></p>
                    <p>Telepon: +62 123 456 789</p>
                    <p>Alamat: Jl. Contoh No.123, Jakarta, Indonesia</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Cek Sehat. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
