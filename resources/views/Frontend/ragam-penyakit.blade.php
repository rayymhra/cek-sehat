<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ragam Penyakit</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        /* light color: #1aa6b7 */
        /* primary color: #127681 */
        /* dark color: #3a3a3a */

        * {
            font-family: "Montserrat", sans-serif;
        }

        /* hero */
        @media {
            .hero-container {
                background-color: #1aa6b7;
            }

            .hero-section {
                padding-left: 50px;
                padding-top: 20px;
                padding-bottom: 20px;
                color: white;
            }

            .hero-text {
                padding-left: 50px;
            }

            .hero-text h1 {
                font-size: 30px;
                font-weight: bold;
                color: white;
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

            .btn {
                margin-right: 10px;
                font-size: 15px;
                border-radius: 50px;
            }

            .btn-outline-primary {
                border-color: #1aa6b7;
                color: #1aa6b7
            }

            .btn-outline-primary:hover {
                background-color: #1aa6b7;
            }
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
                z-index: 10000000000000000000000000;
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

        /* alphabet */
        @media {
            .alphabet-filter {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 20px;
            }

            .alphabet-filter a {
                margin: 5px;
                padding: 10px 15px;
                border: 1px solid #1aa6b7;
                color: #1aa6b7;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
            }

            .alphabet-filter a:hover {
                background-color: #1aa6b7;
                color: #fff;
            }

            .alphabet-filter a.active {
                background-color: #1aa6b7;
                color: #fff;
                pointer-events: none;
            }
        }

        @media (max-width: 768px) {
            .hero-text {
                padding-left: 15px !important;
            }

            .carousel-text {
                font-weight: 100 !important;
            }
        }

        .illness-name {
            text-decoration: none;
            color: #3a3a3a;
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

        .form-control {
            border-radius: 50px;
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
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
                        <a class="nav-link" href="{{ route('info-sehat') }}" id="infoKesehatanDropdown">
                            INFO SEHAT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoKesehatanDropdown">
                            <li><a class="dropdown-item" href="{{ route('fokus-sehat') }}">Fokus Sehat</a></li>
                            <li><a class="dropdown-item" href="{{ route('ragam-penyakit') }}">Ragam Penyakit</a></li>
                            <li><a class="dropdown-item" href="{{ route('ragam-gejala') }}">Ragam Gejala</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">LOGIN</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    {{-- hero section --}}
    <div class="container-fluid hero-container">
        <div class="row hero-section align-items-center">
            <div class="col-md-6 hero-text">
                <h1 class="hero-title">Ragam Penyakit</h1>
                <a href=""></a>
            </div>
        </div>
    </div>






    <div class="container mt-5">
        <h1 class="title text-center mb-5">Nama Penyakit A-Z</h1>

        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Search articles..." aria-label="Search articles"
                aria-describedby="button-search">
            <button class="btn btn-primary" type="button" id="button-search">Search</button>
        </div>

        {{-- <div class="alphabet-filter">
            <a href="?prefix=a" class="active">A</a>
            <a href="?prefix=b">B</a>
            <a href="?prefix=c">C</a>
            <a href="?prefix=d">D</a>
            <!-- Add links for other letters -->
            <a href="?prefix=z">Z</a>
        </div> --}}

        {{-- <div class="illness-list">
            <!-- Example illness items (repeat as needed) -->
            <div class="illness-list-item">
                <h4>Asthma</h4>
                <p>A chronic disease that affects the airways in the lungs.</p>
            </div>
            <div class="illness-list-item">
                <h4>Arthritis</h4>
                <p>Inflammation of one or more joints, causing pain and stiffness.</p>
            </div>
            <!-- Add more illness items as needed -->
        </div> --}}

        <div class="row">
            <div class="col-4 mb-5" class="illness-item">
                <a href="" class="illness-name">asma</a>
            </div>
            <div class="col-4 mb-5" class="illness-item">
                <a href="" class="illness-name">asma</a>
            </div>
            <div class="col-4 mb-5" class="illness-item">
                <a href="" class="illness-name">asma</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
</body>

</html>
