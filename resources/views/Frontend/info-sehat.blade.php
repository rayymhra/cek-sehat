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
        * {
            font-family: "Montserrat", sans-serif;
        }

        /* search */
        .form-control {
            border-radius: 50px;
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

            .nav-item {
                text-align: center;
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

            #searchIcon {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 15px;
            }

            #searchIcon i {
                font-size: 20px;
                margin-right: 5px;
            }

            @media (max-width: 767px) {
                .navbar-nav {
                    margin-top: 1rem;
                }
            }
        }

        /* search modal */
        @media {
            .search-modal {
                display: none;
                position: fixed;
                z-index: 100000000000000000000000000000000000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                overflow: auto;
                justify-content: center;
                align-items: center;
            }

            .search-modal-content {
                position: relative;
                margin: 15% auto;
                padding: 20px;
                width: 80%;
                max-width: 600px;
                background-color: white;
                border-radius: 8px;
            }

            .search-bar {
                width: 100%;
                padding: 15px;
                font-size: 1.2rem;
                border: 2px solid #ddd;
                border-radius: 8px;
                outline: none;
            }

            .search-bar:focus {
                border-color: #127681;
            }

            .search-results {
                margin-top: 20px;
                font-size: 1rem;
                color: #333;
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
                            <li><a class="dropdown-item" href="/ragam-gejala">Ragam Gejala</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-primary rounded-5 py-1" id="searchIcon" href="#">
                            <span style="font-size: 20px; margin-right: 5px;"><i class="bx bx-search py-1"></i></span>
                            SEARCH
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- search modal --}}
    <div id="searchModal" class="search-modal">
        <div class="search-modal-content">
            <span id="closeSearch" class="close-search"></span>
            <input type="text" id="searchInput" class="search-bar" placeholder="Cari gejala...">
            <div id="searchResults" class="search-results"></div>
        </div>
    </div>


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
    {{-- search modal --}}
    <script>
        document.getElementById('searchIcon').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('searchModal').style.display = 'flex';
        });

        document.getElementById('closeSearch').addEventListener('click', function() {
            document.getElementById('searchModal').style.display = 'none';
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            const query = this.value;

            if (query.length > 2) {
                // Update URL without reloading the page
                const newUrl = window.location.origin + window.location.pathname + '?search=' + encodeURIComponent(
                    query);
                window.history.pushState({
                    path: newUrl
                }, '', newUrl);

                // Simulate search result fetching
                document.getElementById('searchResults').innerHTML = '<p>Mencari gejala: ' + query +
                    '</p><p>Hasil pencarian akan muncul di sini...</p>';

                // In real implementation, perform an AJAX request to fetch results
            } else {
                document.getElementById('searchResults').innerHTML = '';
            }
        });

        // Close modal on outside click
        window.onclick = function(event) {
            const modal = document.getElementById('searchModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };
    </script>

    {{-- navbar hover --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const infoSehatLink = document.getElementById("infoKesehatanDropdown");

            infoSehatLink.addEventListener("click", function(event) {
                if (window.innerWidth >= 768) { // Only prevent default on desktop screens
                    event.preventDefault(); // Prevent default click behavior
                    window.location.href = infoSehatLink.href; // Redirect after hover is shown
                }
            });

            infoSehatLink.addEventListener("mouseover", function() {
                const dropdownMenu = this.nextElementSibling;
                dropdownMenu.style.display = "block";
            });

            infoSehatLink.addEventListener("mouseout", function() {
                const dropdownMenu = this.nextElementSibling;
                dropdownMenu.style.display = "none";
            });

            const dropdownMenu = infoSehatLink.nextElementSibling;
            dropdownMenu.addEventListener("mouseover", function() {
                this.style.display = "block";
            });

            dropdownMenu.addEventListener("mouseout", function() {
                this.style.display = "none";
            });
        });
    </script>
</body>

</html>
