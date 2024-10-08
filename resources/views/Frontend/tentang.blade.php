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
    {{-- CSS File --}}
    <link rel="stylesheet" href="../../../../public/assets/Frontend/css/responsive.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        /* light color: #1aa6b7 */
        /* primary color: #127681 */
        /* dark color: #3a3a3a */

        * {
            font-family: "Montserrat", sans-serif;
        }

        .text-primary {
            color: #1aa6b7 !important;
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

        /* HERO */
        .container-hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero-image img {
            height: 300px;
            width: 100%;
            object-fit: cover;
            filter: brightness(50%);
            /* Darken the image */
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            padding: 20px;
            /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); */
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
        }

        /* title */
        .title {
            font-size: 23px;
            font-weight: 700;
            text-transform: uppercase;
            color: #3a3a3a;
        }

        /* tablet */
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 36px;
            }

            .hero-text p {
                display: none;
            }
        }

        /* mobile */
        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 28px;
            }

            .hero-text p {
                display: none;
            }

            .hero-text {
                padding: 10px;
                /* Reduce padding on mobile */
            }
        }




        /* MISSION */
        .mission-section {

            color: #333;
        }

        .mission-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .mission-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .mission-text p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .mission-list {
            list-style: none;
            padding-left: 0;
        }

        .mission-list li {
            font-size: 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .mission-list i {
            color: #1aa6b7;
            margin-right: 10px;
            font-size: 22px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .mission-text h2 {
                font-size: 28px;
            }

            .mission-text p,
            .mission-list li {
                font-size: 16px;
            }
        }

        /* KISAH */

        .kisah {
            background-color: #f8f9fa;
            color: #333;
            border-radius: 8px;
            max-width: 800px;
            margin: 0 auto;
        }

        .kisah p {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }


        /* testi */
        .testimonial-card {
            border: none;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #1aa6b7;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #3a3a3a;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .carousel-inner {
            padding: 15px;
        }

        /* Custom carousel controls */
        .custom-control-prev,
        .custom-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            z-index: 10;
        }

        .custom-control-prev {
            left: -60px;
            /* Adjust this based on how far you want the button */
        }

        .custom-control-next {
            right: -60px;
            /* Adjust this based on how far you want the button */
        }

        .custom-control-prev-icon,
        .custom-control-next-icon {
            width: 100%;
            height: 100%;
            background-size: 100%, 100%;
        }

        /* WHAT WE OFFER */
        .offer-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
        }

        .offer-image {
            max-width: 150px;
            height: 150px;
            border-radius: 8px;
            object-fit: cover;
        }

        .offer-content {
            padding-left: 15px;
        }

        .offer-content h3 {
            font-size: 22px;
            font-weight: bold;
            color: #127681;
        }

        .offer-content p {
            font-size: 16px;
            color: #333;
            margin-top: 10px;
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

    {{-- hero --}}
    <div class="container-hero">
        <div class="hero-image">
            <img src="{{ asset('assets/Frontend/img/about-us.jpg') }}" alt="about-us">
        </div>
        <div class="hero-text">
            <h1>About Us</h1>
            <p>
                Di Cek Sehat, kami berdedikasi untuk memberikan informasi kesehatan yang akurat dan terpercaya
                kepada Anda. Misi kami adalah membantu Anda memahami gejala, mengenali berbagai kondisi kesehatan,
                serta mengambil langkah yang tepat untuk menjaga kesehatan Anda.
            </p>
        </div>
    </div>


    {{-- misi --}}
    <div class="container my-5">
        <h1 class="title text-center mb-5 mt-5">Misi Kami</h1>
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-stethoscope fa-3x mb-4 text-primary"></i>
                        <h5 class="card-title">Kesehatan Anda Prioritas Kami</h5>
                        <p class="card-text">
                            Kami berkomitmen untuk menyediakan informasi kesehatan yang akurat dan terpercaya agar Anda
                            dapat membuat keputusan yang tepat untuk kesehatan Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-heartbeat fa-3x mb-4 text-primary"></i>
                        <h5 class="card-title">Pendidikan Kesehatan</h5>
                        <p class="card-text">
                            Kami bertujuan untuk mendidik masyarakat tentang berbagai kondisi kesehatan dan cara menjaga
                            gaya hidup sehat yang berkelanjutan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-hand-holding-medical fa-3x mb-4 text-primary"></i>
                        <h5 class="card-title">Dukungan Terhadap Komunitas</h5>
                        <p class="card-text">
                            Kami percaya pada kekuatan komunitas dalam mendorong perubahan positif dalam kesehatan dan
                            kesejahteraan secara keseluruhan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- kisah --}}
    <section class="container kisah py-5" id="abt">
        <div class="text-center">
            <h2 class="title text-center mb-5">Kisah kami</h2>
            <p>
                Cek Sehat didirikan dengan tujuan untuk memberikan panduan kesehatan yang dapat diandalkan di tengah
                derasnya arus informasi. Terinspirasi oleh kebutuhan akan sumber informasi kesehatan yang
                terpercaya, kami hadir untuk membantu Anda menjalani hidup yang lebih sehat dan bermakna.
            </p>
        </div>
    </section>


    {{-- WHAT WE OFFER --}}
    <div class="container py-5">
        <h2 class="text-center mb-5 title">What We Offer</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="offer-card d-flex align-items-center mb-4">
                    <img src="{{ asset('assets/Frontend/img/servis1.png') }}" class="offer-image me-3" alt="Service 4">
                    <div class="offer-content">
                        <h3>Alat Periksa Kesehatan</h3>
                        <p>Gunakan alat kami untuk memeriksa gejala dan mengetahui kondisi kesehatan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="offer-card d-flex align-items-center mb-4">
                    <img src="{{ asset('assets/Frontend/img/servis2.png') }}" class="offer-image me-3"
                        alt="Service 2">
                    <div class="offer-content">
                        <h3>Informasi Penyakit</h3>
                        <p>Pelajari gejala, penyebab, dan penanganan berbagai penyakit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="offer-card d-flex align-items-center mb-4">
                    <img src="{{ asset('assets/Frontend/img/servis3.png') }}" class="offer-image me-3" alt="Service 3">
                    <div class="offer-content">
                        <h3>Panduan Gaya Hidup Sehat</h3>
                        <p>Temukan tips dan panduan untuk menjalani gaya hidup sehat dan seimbang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- testimonials --}}
    <div class="container">
        <h1 class="title text-center mb-5">testimoni</h1>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client1.jpg') }}" alt="Client 1"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Anna Putri</h5>
                                    <p class="card-text">"Cek Sehat telah menjadi sumber informasi terpercaya saya
                                        untuk
                                        menjaga kesehatan. Sangat membantu!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client2.jpg') }}" alt="Client 2"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Budi Santoso</h5>
                                    <p class="card-text">"Saya menemukan informasi yang sangat berguna di Cek Sehat.
                                        Tim
                                        mereka sangat peduli dengan kesehatan kita."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client3.jpg') }}" alt="Client 3"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Citra Wulandari</h5>
                                    <p class="card-text">"Situs ini benar-benar membantu saya memahami lebih banyak
                                        tentang
                                        kesehatan. Terima kasih Cek Sehat!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client4.jpg') }}" alt="Client 4"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Dina Alamsyah</h5>
                                    <p class="card-text">"Dengan Cek Sehat, saya mendapatkan informasi lengkap tentang
                                        kesehatan saya. Sangat direkomendasikan!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client5.jpg') }}" alt="Client 5"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Eko Wijaya</h5>
                                    <p class="card-text">"Cek Sehat adalah sumber informasi kesehatan terbaik yang
                                        pernah
                                        saya temui. Mereka benar-benar membantu."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card testimonial-card shadow-sm">
                                <div class="card-body text-center">
                                    <img src="{{ asset('assets/Frontend/img/client6.jpg') }}" alt="Client 6"
                                        class="testimonial-img mb-3">
                                    <h5 class="card-title">Farah Mahardika</h5>
                                    <p class="card-text">"Situs ini sangat mudah dipahami dan penuh dengan informasi
                                        bermanfaat tentang kesehatan."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev custom-control-prev" type="button"
                data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-control-next" type="button"
                data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
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
