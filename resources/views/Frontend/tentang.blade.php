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
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .offer-card:hover {
            transform: translateY(-10px);
        }

        .offer-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #127681;
        }

        .offer-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .offer-card p {
            color: #555;
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
                    <li class="nav-item"><a class="btn btn-outline-primary rounded-5" id="searchIcon" href="#"><i
                                class="bx bx-search"></i> SEARCH</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">LOGIN</a></li>
                    {{-- <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li> --}}
                </ul>
            </div>
        </div>
    </nav>

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


    {{-- testimonials --}}
    <div class="container">
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



    {{-- WHAT WE OFFER --}}
    <div class="container my-5">
        <h1 class="title text-center mb-5">What We Offer</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="offer-card text-center p-4">
                    <img src="your-image-1.jpg" alt="Service 1" class="img-fluid mb-3">
                    <h4 class="offer-title">Service 1</h4>
                    <p>We provide high-quality medical services to ensure your health is in top condition.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card text-center p-4">
                    <img src="your-image-2.jpg" alt="Service 2" class="img-fluid mb-3">
                    <h4 class="offer-title">Service 2</h4>
                    <p>Our team offers a wide range of health and wellness services for everyone.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card text-center p-4">
                    <img src="your-image-3.jpg" alt="Service 3" class="img-fluid mb-3">
                    <h4 class="offer-title">Service 3</h4>
                    <p>We help you stay informed with the latest health news and tips.</p>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
