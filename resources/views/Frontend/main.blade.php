<!DOCTYPE html>
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
        /* secondary color: #e63946 */

        * {
            font-family: "Montserrat", sans-serif;
        }

        .btn-primary {
            background-color: #1aa6b7;
            outline: none;
            border: none;
        }

        .btn-primary:hover {
            background-color: #127681;
        }

        .btn-primary:active {
            background-color: #e63946;
        }

        .btn {
            margin-right: 10px;
            font-size: 15px
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






        /* NAVBAR */
        .navbar-nav .nav-link {
            margin-right: 15px;
            color: #333;
            transition: color 0.3s ease-in-out;
            font-size: 15px
        }

        .navbar-nav .nav-link:hover {
            color: #127681;
        }

        .navbar-nav .nav-item:hover {
            display: block;
        }




        /* CAROUSEL */

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






        /* categories */
        .category-section-top {
            padding: 40px 0;
            background-color: #ffffff;
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






        /* steps by step */
        .step-section {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .steps-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .step {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        .step-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .step-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .step-description {
            font-size: 1rem;
            color: #555555;
        }

        @media (max-width: 768px) {
            .steps-container {
                flex-direction: column;
                align-items: center;
            }

            .step {
                width: 100%;
                max-width: 400px;
            }
        }







        /* common */
        .symptoms-conditions-section {
            background-color: #f4f6f8;
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .symptoms,
        .conditions {
            flex: 1;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .sub-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
        }

        .item-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .item {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .item-icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-right: 20px;
        }

        .item-content {
            flex: 1;
        }

        .item-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .item-description {
            font-size: 1rem;
            color: #666;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
                gap: 20px;
            }
        }




        /* advice */
        .advice-section {
            background-color: #f4f6f8;
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .advice-wrapper {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .advice-item {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .advice-icon {
            font-size: 3rem;
            color: #007bff;
            margin-right: 20px;
        }

        .advice-content {
            flex: 1;
        }

        .advice-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .advice-description {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .advice-wrapper {
                gap: 20px;
            }

            .advice-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .advice-icon {
                margin-bottom: 15px;
            }
        }




        /* education */
        .educational-resources-section {
            background-color: #f4f6f8;
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #666;
        }

        .resources-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .resource-item {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .resource-item:hover {
            transform: translateY(-5px);
        }

        .resource-title a {
            font-size: 1.6rem;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .resource-title a:hover {
            color: #0056b3;
        }

        .resource-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .resources-wrapper {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }



        /* faq */
        .faqs-section {
            background-color: #f4f6f8;
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .faq-wrapper {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            margin-bottom: 30px;
        }

        .faq-question {
            font-size: 1.5rem;
            color: #007bff;
            cursor: pointer;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .faq-question:hover {
            color: #0056b3;
        }

        .faq-answer {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-left: 20px;
            display: none;
            /* Initially hidden */
        }

        .faq-item.active .faq-answer {
            display: block;
            /* Show answer when active */
        }

        @media (max-width: 768px) {
            .faq-question {
                font-size: 1.2rem;
            }

            .faq-answer {
                font-size: 0.95rem;
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
                    <li class="nav-item"><a class="nav-link" href="#">ARTIKEL</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">INFO KESEHATAN</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary" href="#">LOGIN</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li>
                </ul>
            </div>
        </div>
    </nav>




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
                    <p class="mt-4 text-uppercase cr-artikel">Artikel</p>
                    <h1 class="carousel-text text-uppercase">How to lower or eliminate your risk of knee
                        arthritis</h1>
                </div>
            </div>

            <!-- carousel item 2 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c2.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">Artikel</p>
                    <h1 class="carousel-text text-uppercase">How to lower or eliminate your risk of knee
                        arthritis</h1>
                </div>
            </div>

            <!-- carousel item 3 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c3.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-none d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">Artikel</p>
                    <h1 class="carousel-text text-uppercase">How to lower or eliminate your risk of knee
                        arthritis</h1>
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
            <h2 class="text-center mb-4">Info Kesehatan</h2>
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



    {{-- how it works --}}
    <div class="steps-section">
        <div class="container">
            <h2 class="section-title">Bagaimana Cara Kerjanya: Panduan Langkah Demi Langkah</h2>
            <div class="steps-container">
                <!-- Step 1 -->
                <div class="step">
                    <i class="fas fa-search step-icon"></i>
                    <h3 class="step-title">Langkah 1: Masukkan Gejala Anda</h3>
                    <p class="step-description">Gunakan kotak pencarian untuk memasukkan gejala yang Anda alami.</p>
                </div>
                <!-- Step 2 -->
                <div class="step">
                    <i class="fas fa-list step-icon"></i>
                    <h3 class="step-title">Langkah 2: Lihat Daftar Kemungkinan Kondisi</h3>
                    <p class="step-description">Setelah Anda mengirimkan gejala, sistem akan menampilkan daftar
                        kemungkinan kondisi yang sesuai.</p>
                </div>
                <!-- Step 3 -->
                <div class="step">
                    <i class="fas fa-book-open step-icon"></i>
                    <h3 class="step-title">Langkah 3: Pelajari Lebih Lanjut</h3>
                    <p class="step-description">Klik pada setiap kondisi untuk membaca lebih lanjut tentang gejala,
                        penyebab, dan langkah-langkah penanganan awal yang dapat Anda ambil.</p>
                </div>
            </div>
        </div>
    </div>



    {{-- common --}}
    <div id="symptoms-conditions" class="symptoms-conditions-section">
        <div class="container">
            <h2 class="section-title">Gejala Umum dan Kondisi Kemungkinan</h2>
            <div class="content-wrapper">
                <div class="symptoms">
                    <h3 class="sub-title">Gejala Umum</h3>
                    <div class="item-list">
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-cough"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Batuk</h4>
                                <p class="item-description">Batuk adalah refleks tubuh untuk membersihkan saluran
                                    pernapasan dari iritan.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Demam</h4>
                                <p class="item-description">Demam merupakan peningkatan suhu tubuh, sering kali sebagai
                                    respons terhadap infeksi.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-dizzy"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Pusing</h4>
                                <p class="item-description">Pusing dapat disebabkan oleh berbagai faktor, termasuk
                                    dehidrasi atau gangguan keseimbangan.</p>
                            </div>
                        </div>
                        <!-- Add more symptoms as needed -->
                    </div>
                </div>
                <div class="conditions">
                    <h3 class="sub-title">Kondisi Kemungkinan</h3>
                    <div class="item-list">
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-virus"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Flu</h4>
                                <p class="item-description">Flu sering disertai dengan batuk, demam, dan nyeri otot.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-lungs"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Bronkitis</h4>
                                <p class="item-description">Bronkitis menyebabkan batuk yang berlangsung lama dan
                                    sering disertai sesak napas.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-icon">
                                <i class="fas fa-headache"></i>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Migrain</h4>
                                <p class="item-description">Migrain adalah jenis sakit kepala yang parah dan sering
                                    kali disertai mual.</p>
                            </div>
                        </div>
                        <!-- Add more conditions as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- advice --}}
    <div id="advice" class="advice-section">
        <div class="container">
            <h2 class="section-title">Saran Kesehatan</h2>
            <div class="advice-wrapper">
                <div class="advice-item">
                    <div class="advice-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="advice-content">
                        <h3 class="advice-title">Konsultasi dengan Spesialis</h3>
                        <p class="advice-description">
                            Jika Anda mengalami gejala yang tidak biasa atau berkelanjutan, penting untuk berkonsultasi
                            dengan spesialis yang tepat untuk mendapatkan diagnosis dan perawatan yang akurat.
                        </p>
                    </div>
                </div>
                <div class="advice-item">
                    <div class="advice-icon">
                        <i class="fas fa-clinic-medical"></i>
                    </div>
                    <div class="advice-content">
                        <h3 class="advice-title">Kunjungi Klinik Terdekat</h3>
                        <p class="advice-description">
                            Untuk gejala yang memerlukan perhatian segera, seperti demam tinggi atau kesulitan bernapas,
                            kunjungi klinik terdekat untuk pemeriksaan lebih lanjut dan penanganan awal.
                        </p>
                    </div>
                </div>
                <div class="advice-item">
                    <div class="advice-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <div class="advice-content">
                        <h3 class="advice-title">Gunakan Obat yang Dianjurkan</h3>
                        <p class="advice-description">
                            Apabila gejala ringan dan Anda sudah mengetahui kondisi yang mendasarinya, gunakan
                            obat-obatan yang dianjurkan oleh dokter atau apoteker untuk mengatasi gejala tersebut.
                        </p>
                    </div>
                </div>
                <!-- Add more advice items as needed -->
            </div>
        </div>
    </div>



    {{-- education --}}
    <div id="educational-resources" class="educational-resources-section">
        <div class="container">
            <h2 class="section-title">Sumber Daya Edukasi</h2>
            <p class="section-subtitle">Artikel dan Panduan: Konten terkait gejala dan penyakit</p>
            <div class="resources-wrapper">
                <div class="resource-item">
                    <h3 class="resource-title"><a href="#">Panduan Gejala Umum</a></h3>
                    <p class="resource-description">Pelajari lebih lanjut tentang gejala umum yang sering dialami dan
                        langkah-langkah yang dapat diambil.</p>
                </div>
                <div class="resource-item">
                    <h3 class="resource-title"><a href="#">Informasi Penyakit Kronis</a></h3>
                    <p class="resource-description">Informasi lengkap tentang penyakit kronis, penyebabnya, dan cara
                        penanganannya.</p>
                </div>
                <div class="resource-item">
                    <h3 class="resource-title"><a href="#">Tips Menjaga Kesehatan Mental</a></h3>
                    <p class="resource-description">Panduan untuk menjaga kesehatan mental Anda dalam situasi yang
                        menantang.</p>
                </div>
                <div class="resource-item">
                    <h3 class="resource-title"><a href="#">Kapan Harus Menemui Dokter?</a></h3>
                    <p class="resource-description">Tanda-tanda dan gejala yang menunjukkan bahwa Anda perlu segera
                        menemui dokter.</p>
                </div>
                <!-- Add more resource items as needed -->
            </div>
        </div>
    </div>



    {{-- faq --}}
    <div id="faqs" class="faqs-section">
        <div class="container">
            <h2 class="section-title">Pertanyaan yang Sering Diajukan (FAQs)</h2>
            <div class="faq-wrapper">
                <div class="faq-item">
                    <h3 class="faq-question">Bagaimana cara menggunakan alat pemeriksa gejala?</h3>
                    <p class="faq-answer">Cukup masukkan gejala yang Anda alami ke dalam kolom pencarian, dan sistem
                        kami akan memberikan daftar kemungkinan kondisi yang terkait dengan gejala tersebut.</p>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Apakah hasil pemeriksaan gejala ini akurat?</h3>
                    <p class="faq-answer">Alat ini memberikan informasi berdasarkan data yang tersedia, namun tidak
                        dapat menggantikan diagnosis medis profesional. Kami menyarankan Anda untuk berkonsultasi dengan
                        dokter jika Anda memiliki kekhawatiran kesehatan.</p>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Apa yang harus saya lakukan jika hasilnya menunjukkan kondisi serius?</h3>
                    <p class="faq-answer">Jika alat ini menunjukkan kondisi yang serius, segera hubungi dokter atau
                        pusat kesehatan terdekat untuk mendapatkan bantuan medis lebih lanjut.</p>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Apakah data saya aman saat menggunakan alat ini?</h3>
                    <p class="faq-answer">Kami sangat menjaga privasi dan keamanan data Anda. Informasi yang Anda
                        masukkan tidak akan disimpan atau dibagikan tanpa izin Anda.</p>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Apakah alat ini dapat digunakan untuk mendiagnosis anak-anak?</h3>
                    <p class="faq-answer">Alat ini dapat digunakan untuk semua usia, namun kami sangat menyarankan
                        konsultasi langsung dengan dokter anak untuk diagnosa yang lebih tepat pada anak-anak.</p>
                </div>
                <!-- Add more FAQ items as needed -->
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
