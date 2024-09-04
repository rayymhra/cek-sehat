<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Sehat</title>
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

        .container {
            /* margin-right: 75px;
            margin-left: 75px; */
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

        /* search modal */
        @media {
            .search-modal {
                display: none;
                position: fixed;
                z-index: 100000;
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

            .close-search {
                position: absolute;
                top: 10px;
                right: 20px;
                font-size: 28px;
                font-weight: bold;
                color: #333;
                cursor: pointer;
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




        /* CAROUSEL */
        @media {
            .cItem {
                height: 400px;
            }

            .cImg {
                filter: brightness(0.6);
                height: 400px;
                object-fit: cover;
            }

            .carousel-text {
                font-weight: 600;
            }

            .cr-search {
                position: absolute;
                bottom: 100px;
                width: 50%;
                left: 50%;
                transform: translateX(-50%);
                z-index: 100000;
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
        }







        /* steps by step */
        @media {
            .steps-section {
                background-color: #f8f9fa;
                padding: 40px 0;
            }

            .section-title {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .timeline-container {
                display: flex;
                flex-direction: column;
                gap: 20px;
                /* justify-content: center;
                align-items: center; */
            }

            .timeline-step {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #ffffff;
                /* border-radius: 10px; */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
                position: relative;

            }

            .step-number {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
                font-weight: bold;
                color: #127681;
            }

            .step-number .step-text {
                font-size: 1rem;
                text-transform: uppercase;
            }

            .step-number .step-digit {
                font-size: 2rem;
            }

            .step-icon {
                width: 60px;
                height: 60px;
                background-color: #1aa6b7;
                color: #ffffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                margin-right: 20px;
            }

            .step-content {
                flex: 1;
            }

            .step-title {
                font-size: 1.3rem;
                margin-bottom: 5px;
            }

            .step-description {
                font-size: 1 rem;
                color: #555555;
                margin-bottom: 0;
            }

            @media (max-width: 768px) {
                .timeline-step {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .step-icon {
                    margin-right: 0;
                    margin-bottom: 10px;
                }

                .step-number {
                    margin-right: 0;
                    margin-bottom: 10px;
                }
            }
        }






        /* common */
        @media {
            .symptoms-conditions-section {
                background-color: #ffffff;
                padding: 50px 0;
            }

            .comparison-table {
                width: 100%;
                border-collapse: collapse;
                position: relative;
            }

            .comparison-table th,
            .comparison-table td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #dddddd;
                vertical-align: top;
                position: relative;
            }

            .comparison-table th {
                background-color: #1aa6b7;
                font-size: 1.3rem;
                color: #ffffff;
                text-align: center;
                font-weight: 600;
            }

            .comparison-table td {
                background-color: #ffffff;
                font-size: 1.5rem;
                color: #333;
            }

            .item-title {
                font-size: 1.3rem;
                font-weight: 600;
            }

            .item-description {
                font-size: 1rem;
            }

            .symptoms-image,
            .conditions-image {
                max-width: 100%;
                height: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .comparison-table .image-cell {
                text-align: center;
                width: 150px;
            }

            .comparison-table .image-cell img {
                max-width: 100%;
                height: 100px;
                padding: 0 !important;
                object-fit: cover;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            @media (max-width: 768px) {

                .comparison-table th,
                .comparison-table td {
                    display: block;
                    width: 100%;
                    padding: 15px;
                }

                .comparison-table th {
                    position: sticky;
                    top: 0;
                    background-color: #f4f4f4;
                    z-index: 1;
                }

                .comparison-table::before {
                    display: none;
                }
            }
        }





        /* advice */
        @media {
            .advice-section {
                background-color: #f6f6f6;
                padding: 50px 0;
            }

            .advice-wrapper {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .advice-item {
                background-color: #1aa6b7;
                border-radius: 8px;
                overflow: hidden;
                text-align: center;
                color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .advice-item img {
                /* width: 100%;
                height: 150px;
                object-fit: cover;
                Ensure image covers the space without stretching */

                width: 200px;
                height: 200px;
                object-fit: cover;
                border-radius: 8px 8px 0 0;
            }

            .advice-title {
                font-size: 1.5rem;
                font-weight: 500;
                margin: 15px 0 10px 0;
                color: #ffffff;
            }

            .advice-description {
                font-size: 1rem;
                color: #ffffff;
                padding: 0 10px 20px 10px;
            }

            @media (max-width: 1024px) {
                .advice-wrapper {
                    grid-template-columns: repeat(2, 1fr);
                    /* Adjust to two columns on smaller screens */
                }
            }

            @media (max-width: 768px) {
                .advice-wrapper {
                    grid-template-columns: 1fr;
                    /* Adjust to one column on mobile screens */
                }
            }
        }





        /* education */
        @media {
            .educational-resources-section {
                background-color: #ffffff;
                padding: 50px 0;
            }

            .resource-card {
                display: grid;
                grid-template-columns: 1fr 1fr;
                /* Two columns: resources list on the left, large image on the right */
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                gap: 30px;
            }

            .resource-list {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .resource-item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* padding: 10px 0; */
                border-bottom: 1px solid #e0e0e0;
            }

            .resource-item:last-child {
                border-bottom: none;
                /* Remove the bottom border from the last item */
            }

            .resource-title a {
                font-size: 1.4rem;
                color: #1aa6b7;
                text-decoration: none;
                transition: color 0.3s ease;
                flex-grow: 1;
            }

            .resource-title a:hover {
                color: #127681;
            }

            .resource-link-icon {
                font-size: 1.5rem;
                color: #1aa6b7;
                margin-left: 10px;
            }

            .resource-image {
                width: 100%;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Add a subtle shadow to the image */
            }

            @media (max-width: 1024px) {
                .resource-card {
                    grid-template-columns: 1fr;
                    /* Stack the resources and image on smaller screens */
                }

                .resource-image {
                    margin-top: 30px;
                    /* Add spacing between the resources and image when stacked */
                }
            }
        }



        /* faq */
        @media {
            .faqs-section {
                background-color: #f6f6f6;
                padding: 50px 0;
            }

            .faq-wrapper {
                max-width: 800px;
                margin: 0 auto;
            }

            .faq-item {
                margin-bottom: 10px;
                border-bottom: 1px solid #ddd;
                /* Add border between items */
            }

            .faq-question {
                font-size: 19px;
                color: #1aa6b7;
                background: none;
                border: none;
                cursor: pointer;
                text-align: left;
                padding: 15px;
                width: 100%;
                border-radius: 8px;
                transition: color 0.3s ease, background-color 0.3s ease;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .faq-question:hover {
                color: #127681;
                background-color: #e9ecef;
            }

            .faq-question .chevron {
                font-size: 1.2rem;
                transition: transform 0.3s ease;
            }

            .faq-item.active .faq-question .chevron {
                transform: rotate(180deg);
                /* Rotate chevron when active */
            }

            .faq-answer {
                font-size: 1rem;
                color: #3a3a3a;
                line-height: 1.6;
                padding: 0 15px;
                display: none;
                transition: max-height 0.3s ease, padding 0.3s ease;
                overflow: hidden;
            }

            .faq-item.active .faq-answer {
                display: block;
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
                        <a class="nav-link" href="{{ route('info-sehat') }}" id="infoKesehatanDropdown">
                            INFO SEHAT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="infoKesehatanDropdown">
                            <li><a class="dropdown-item" href="{{ route('fokus-sehat') }}">Fokus Sehat</a></li>
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


    {{-- search modal --}}
    <div id="searchModal" class="search-modal">
        <div class="search-modal-content">
            <span id="closeSearch" class="close-search">&times;</span>
            <input type="text" id="searchInput" class="search-bar" placeholder="Cari gejala...">
            <div id="searchResults" class="search-results"></div>
        </div>
    </div>



    {{-- carousel --}}
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- carousel item 1 -->
            <div class="carousel-item active cItem">
                <img src="{{ asset('assets/Frontend/img/c1.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">selamat datang</p>
                    <h1 class="carousel-text text-uppercase">Pahami gejala Anda dan jelajahi kemungkinan kondisi di Cek
                        Sehat</h1>
                </div>
            </div>

            <!-- carousel item 2 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c2.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">selamat datang</p>
                    <h1 class="carousel-text text-uppercase">Tetap Terinformasi dengan Berita Kesehatan Terbaru</h1>
                </div>
            </div>

            <!-- carousel item 3 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c3.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">selamat datang</p>
                    <h1 class="carousel-text text-uppercase">Kesehatan Anda dalam Genggaman Tangan</h1>
                </div>
            </div>
        </div>
        <!-- Search Bar -->
        <div class="carousel-caption d-none d-md-block cr-search">
            <form class="mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search articles..."
                        aria-label="Search articles" aria-describedby="button-search">
                    <button class="btn btn-primary" type="button" id="button-search">Search</button>
                </div>
            </form>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- category --}}
    <div class="category-section-top">
        <div class="container">
            <h2 class="text-center mb-5 title">fokus Sehat</h2>
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/diabetes.png') }}" alt="Diabetes">
                        <h3 class="category-title">Diabetes</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/hipertensi.png') }}" alt="Hipertensi">
                        <h3 class="category-title">Hipertensi</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/kanker.png') }}" alt="Kanker">
                        <h3 class="category-title">Kanker</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/kehamilan.png') }}" alt="Kehamilan">
                        <h3 class="category-title">Kehamilan</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/mata.png') }}" alt="Mata">
                        <h3 class="category-title">Mata</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/pencernaan.png') }}" alt="Pencernaan">
                        <h3 class="category-title">Pencernaan</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/nutrisi.png') }}" alt="Nutrisi">
                        <h3 class="category-title">Nutrisi</h3>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="category-card text-center">
                        <img src="{{ asset('assets/Frontend/img/lainnya.png') }}" alt="Lainnya">
                        <h3 class="category-title">Lainnya</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- step by step --}}
    <div class="steps-section">
        <div class="container">
            <h2 class="title text-center mb-5">Cara Mengecek Penyakit di Cek Sehat</h2>
            <div class="timeline-container">
                <!-- Step 1 -->
                <div class="timeline-step">
                    <div class="step-number">
                        <div class="step-text">Step</div>
                        <div class="step-digit">1</div>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">Masukkan Gejala Anda</h3>
                        <p class="step-description">Gunakan kotak pencarian untuk memasukkan gejala yang Anda alami.
                        </p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="timeline-step">
                    <div class="step-number">
                        <div class="step-text">Step</div>
                        <div class="step-digit">2</div>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">Lihat Daftar Kemungkinan Kondisi</h3>
                        <p class="step-description">Setelah Anda mengirimkan gejala, sistem akan menampilkan daftar
                            kemungkinan kondisi yang sesuai.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="timeline-step">
                    <div class="step-number">
                        <div class="step-text">Step</div>
                        <div class="step-digit">3</div>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="step-content">
                        <h3 class="step-title">Pelajari Lebih Lanjut</h3>
                        <p class="step-description">Klik pada setiap kondisi untuk membaca lebih lanjut tentang gejala,
                            penyebab, dan langkah-langkah penanganan awal yang dapat Anda ambil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- common --}}
    <div id="symptoms-conditions" class="symptoms-conditions-section">
        <div class="container">
            <h2 class="title text-center mb-5">Gejala Umum dan Kondisi Kemungkinan</h2>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Gejala Umum</th>
                        <th></th>
                        <th>Kondisi Kemungkinan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Batuk</h4>
                                <p class="item-description">Batuk adalah refleks tubuh untuk membersihkan saluran
                                    pernapasan dari iritan.</p>
                            </div>
                        </td>
                        <td class="image-cell">
                            <img src="{{ asset('assets/Frontend/img/batuk.jpg') }}" alt="Batuk"
                                class="symptoms-image">
                        </td>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Flu</h4>
                                <p class="item-description">Flu sering disertai dengan batuk, demam, dan nyeri otot.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Demam</h4>
                                <p class="item-description">Demam merupakan peningkatan suhu tubuh, sering kali sebagai
                                    respons terhadap infeksi.</p>
                            </div>
                        </td>
                        <td class="image-cell">
                            <img src="{{ asset('assets/Frontend/img/demam.jpg') }}" alt="Demam"
                                class="symptoms-image">
                        </td>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Bronkitis</h4>
                                <p class="item-description">Biasanya, Demam Berkepanjangan disebabkan oleh infeksi
                                    kronis, seperti tuberkulosis paru atau bronkitis.</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Pusing</h4>
                                <p class="item-description">Pusing dapat disebabkan oleh berbagai faktor, termasuk
                                    dehidrasi atau gangguan keseimbangan.</p>
                            </div>
                        </td>
                        <td class="image-cell">
                            <img src="{{ asset('assets/Frontend/img/pusing.jpg') }}" alt="Pusing"
                                class="symptoms-image">
                        </td>
                        <td>
                            <div class="item-content">
                                <h4 class="item-title">Migrain</h4>
                                <p class="item-description">Migrain adalah jenis sakit kepala yang parah dan sering
                                    kali disertai mual.</p>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more symptom-condition pairs as needed -->
                </tbody>
            </table>
        </div>
    </div>






    {{-- advice --}}
    <div id="advice" class="advice-section">
        <div class="container">
            <h2 class="title text-center mb-5">Saran Kesehatan</h2>
            <div class="advice-wrapper">
                <div class="advice-item">
                    <img src="{{ asset('assets/Frontend/img/konsultasi.png') }}" alt="Image 1">
                    <h3 class="advice-title">Konsultasi dengan Spesialis</h3>
                    <p class="advice-description">
                        Jika Anda mengalami gejala yang tidak biasa atau berkelanjutan, penting untuk berkonsultasi
                        dengan spesialis yang tepat untuk mendapatkan diagnosis dan perawatan yang akurat.
                    </p>
                </div>
                <div class="advice-item">
                    <img src="{{ asset('assets/Frontend/img/klinik.png') }}" alt="Image 2">
                    <h3 class="advice-title">Kunjungi Klinik Terdekat</h3>
                    <p class="advice-description">
                        Untuk gejala yang memerlukan perhatian segera, seperti demam tinggi atau kesulitan bernapas,
                        kunjungi klinik terdekat untuk pemeriksaan lebih lanjut dan penanganan awal.
                    </p>
                </div>
                <div class="advice-item">
                    <img src="{{ asset('assets/Frontend/img/obat.png') }}" alt="Image 3">
                    <h3 class="advice-title">Gunakan Obat yang Dianjurkan</h3>
                    <p class="advice-description">
                        Apabila gejala ringan dan Anda sudah mengetahui kondisi yang mendasarinya, gunakan obat-obatan
                        yang dianjurkan oleh dokter atau apoteker untuk mengatasi gejala tersebut.
                    </p>
                </div>
                <div class="advice-item">
                    <img src="{{ asset('assets/Frontend/img/istirahat.png') }}" alt="Image 4">
                    <h3 class="advice-title">Pentingnya Istirahat</h3>
                    <p class="advice-description">
                        Istirahat yang cukup sangat penting untuk pemulihan dari penyakit. Pastikan Anda mendapatkan
                        waktu tidur yang cukup setiap hari.
                    </p>
                </div>
            </div>
        </div>
    </div>




    {{-- education --}}
    <div id="educational-resources" class="educational-resources-section">
        <div class="container">
            <h2 class="title text-center mb-5">Sumber Daya Edukasi</h2>
            <div class="resource-card">
                <div class="resource-list">
                    <div class="resource-item">
                        <h3 class="resource-title"><a href="#">Panduan Gejala Umum</a></h3>
                        <a href=""><i class="fas fa-link resource-link-icon"></i></a>

                    </div>
                    <div class="resource-item">
                        <h3 class="resource-title"><a href="#">Informasi Penyakit Kronis</a></h3>
                        <a href=""><i class="fas fa-link resource-link-icon"></i></a>
                    </div>
                    <div class="resource-item">
                        <h3 class="resource-title"><a href="#">Tips Menjaga Kesehatan Mental</a></h3>
                        <a href=""><i class="fas fa-link resource-link-icon"></i></a>
                    </div>
                    <div class="resource-item">
                        <h3 class="resource-title"><a href="#">Kapan Harus Menemui Dokter?</a></h3>
                        <a href=""><i class="fas fa-link resource-link-icon"></i></a>
                    </div>
                    <div class="resource-item">
                        <h3 class="resource-title"><a href="#">Kapan Harus Menemui Dokter?</a></h3>
                        <a href=""><i class="fas fa-link resource-link-icon"></i></a>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/Frontend/img/education.jpg') }}" alt="Educational Resources Image"
                        class="resource-image">
                </div>
            </div>
        </div>
    </div>





    {{-- faq --}}
    <div id="faqs" class="faqs-section">
        <div class="container">
            <h2 class="title text-center mb-5">Pertanyaan yang Sering Diajukan (FAQs)</h2>
            <div class="faq-wrapper">
                <div class="faq-item" data-index="0">
                    <button class="faq-question">
                        Bagaimana cara menggunakan alat pemeriksa gejala?
                        <i class="chevron fas fa-chevron-down"></i>
                    </button>
                    <p class="faq-answer">Cukup masukkan gejala yang Anda alami ke dalam kolom pencarian, dan sistem
                        kami akan memberikan daftar kemungkinan kondisi yang terkait dengan gejala tersebut.</p>
                </div>
                <div class="faq-item" data-index="1">
                    <button class="faq-question">
                        Apakah hasil pemeriksaan gejala ini akurat?
                        <i class="chevron fas fa-chevron-down"></i>
                    </button>
                    <p class="faq-answer">Alat ini memberikan informasi berdasarkan data yang tersedia, namun tidak
                        dapat menggantikan diagnosis medis profesional. Kami menyarankan Anda untuk berkonsultasi dengan
                        dokter jika Anda memiliki kekhawatiran kesehatan.</p>
                </div>
                <div class="faq-item" data-index="2">
                    <button class="faq-question">
                        Apa yang harus saya lakukan jika hasilnya menunjukkan kondisi serius?
                        <i class="chevron fas fa-chevron-down"></i>
                    </button>
                    <p class="faq-answer">Jika alat ini menunjukkan kondisi yang serius, segera hubungi dokter atau
                        pusat kesehatan terdekat untuk mendapatkan bantuan medis lebih lanjut.</p>
                </div>
                <div class="faq-item" data-index="3">
                    <button class="faq-question">
                        Apakah data saya aman saat menggunakan alat ini?
                        <i class="chevron fas fa-chevron-down"></i>
                    </button>
                    <p class="faq-answer">Kami sangat menjaga privasi dan keamanan data Anda. Informasi yang Anda
                        masukkan tidak akan disimpan atau dibagikan tanpa izin Anda.</p>
                </div>
                <div class="faq-item" data-index="4">
                    <button class="faq-question">
                        Apakah alat ini dapat digunakan untuk mendiagnosis anak-anak?
                        <i class="chevron fas fa-chevron-down"></i>
                    </button>
                    <p class="faq-answer">Alat ini dapat digunakan untuk semua usia, namun kami sangat menyarankan
                        konsultasi langsung dengan dokter anak untuk diagnosa yang lebih tepat pada anak-anak.</p>
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




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>


    {{-- faq --}}
    <script>
        document.querySelectorAll('.faq-question').forEach((button) => {
            button.addEventListener('click', () => {
                const faqItem = button.closest('.faq-item');
                const answer = faqItem.querySelector('.faq-answer');

                // Toggle the active class and answer visibility
                if (faqItem.classList.contains('active')) {
                    faqItem.classList.remove('active');
                    answer.style.display = 'none';
                } else {
                    document.querySelectorAll('.faq-item').forEach(item => {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.display = 'none';
                    });
                    faqItem.classList.add('active');
                    answer.style.display = 'block';
                }
            });
        });
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
