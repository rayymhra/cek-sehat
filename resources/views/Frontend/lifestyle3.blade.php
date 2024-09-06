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

        .article-page {
            display: flex;
            gap: 30px;
        }

        .back-button {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #1aa6b7;
            text-decoration: none;
        }

        .back-button i {
            margin-right: 10px;
        }

        .article-content {
            flex: 3;
        }

        .related-news {
            flex: 1;
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
        }

        .related-news h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .related-news .news-item {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .related-news .news-item:last-child {
            border-bottom: none;
        }

        .news-item img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .news-item h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .news-item a {
            text-decoration: none;
            color: #1aa6b7;
        }

        .news-item a:hover {
            color: #127681;
        }

        .news-separator {
            margin: 20px 0;
            height: 1px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .text-justify {
            text-align: justify;
        }

        .back-button {
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 50px;
            border: #127681 solid 1px;
        }

        .bx {
            font-size: 30px;
            font-weight: 500;
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

        .article-content {
            flex: 3;
        }

        .related-news {
            flex: 1;
            position: sticky;
            top: 60px;
            height: 100vh;
            overflow-y: auto;
        }

        .back-section {
            position: sticky;
            top: 70px;
            z-index: 10;
            height: 50px;
        }

        .text-news {
            color: #3a3a3a;
            font-weight: 400;
        }

        .title-sub {
            color: #3a3a3a;
        }

        .title {
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
                            <li><a class="dropdown-item" href="/ragam-obat">Ragam Gejala</a></li>
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

    <div class="container">
        <div class="article-page mt-5">
            <div class="back-section">
                <a href="/lifestyle" class="back-button">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>

            <div class="article-content">
                <h1 class="title">Kapan Waktu Terbaik untuk Minum Air?</h1>
                <img src="{{ asset('assets/Frontend/img/lifestyle3.jpg') }}" alt="" class="w-100 mb-3 mt-1"
                    style="max-height: 300px; object-fit: cover;">
                <p class="text-news">Air adalah elemen esensial yang sering kali kita abaikan dalam keseharian. Banyak
                    orang tidak menyadari bahwa tubuh membutuhkan air dalam jumlah yang cukup untuk berfungsi optimal.
                    Dehidrasi dapat mempengaruhi berbagai aspek kesehatan, mulai dari energi, konsentrasi, hingga
                    pengendalian nafsu makan. Artikel ini akan membahas berbagai situasi di mana tubuh sangat
                    membutuhkan air, serta manfaat besar yang bisa diperoleh dari menjaga hidrasi yang tepat. Mulai dari
                    saat bangun tidur, hingga berolahraga dan bahkan ketika merasa lapar, hidrasi memainkan peran
                    penting dalam kesejahteraan kita.
                </p>

                <h5 class="title-sub">Saat Kamu Merasa Lapar</h5>
                <p class="text-news">Mungkin sebenarnya kamu sedang haus. Banyak orang tidak
                    sadar bahwa rasa lapar sering kali disebabkan oleh haus. Otak kita mengenali kedua sinyal ini dengan
                    cara yang sama. Jadi, sebelum kamu mencari camilan, coba minum air terlebih dahulu dan tunggu
                    beberapa menit untuk melihat apakah rasa lapar itu hilang.
                </p>

                <h5 class="title-sub">Saat Bangun Tidur</h5>
                <p class="text-news text-justify">Pagi hari adalah salah satu waktu terbaik untuk
                    minum air. Tubuhmu baru saja melalui puasa panjang saat tidur. Untuk memberikan dorongan energi,
                    coba tambahkan setengah lemon ke dalam segelas air di pagi hari. Ini akan memberikan suntikan
                    antioksidan, vitamin C, dan potasium.</p>
                    
                <h5 class="title-sub">Ketika Kamu Berkeringat </h5>
                <p class="text-news text-justify">Apapun yang membuatmu berkeringat, seperti
                    sauna, bak mandi air panas, atau beraktivitas di luar pada hari yang panas, dapat menyebabkan tubuh
                    kehilangan cairan. Olahraga juga membuat tubuh kehilangan cairan karena tubuh berkeringat untuk
                    mendinginkan diri. Kamu perlu menggantinya dengan minum banyak air.</p>
                    
                <h5 class="title-sub">Sebelum, Saat, dan Setelah Berolahraga</h5>
                <p class="text-news text-justify">Kamu perlu banyak air untuk
                    menggantikan cairan yang hilang saat berkeringat. Berapa banyak? Sebelum berolahraga atau
                    beraktivitas di luar, minumlah 16-20 ons air. Saat aktif, minum 6-12 ons air setiap 10-15 menit.
                    Setelah berolahraga, minumlah lagi sebanyak 16-24 ons.
                </p>
                
                <h5 class="title-sub">Ketika Kamu Sakit </h5>
                <p class="text-news text-justify">Minum air sangat penting saat kamu sakit. Gejala
                    seperti diare, muntah, dan demam dapat menyebabkan kehilangan cairan secara ekstrem. Saat kamu
                    merasa sakit, minumlah banyak air, terutama jika kamu tidak merasa lapar. Hindari alkohol dan
                    minuman berkafein karena dapat membuat tubuh semakin dehidrasi.</p>
                    
                    <h5 class="title-sub">Saat Berada di Pesawat </h5>
                    <p class="text-news text-justify">Pernah bertanya-tanya mengapa kamu merasa
                        sangat haus saat terbang? Ini karena ketinggian. Semakin tinggi pesawat, semakin kering udara di
                        kabin. Sekitar setengah udara di kabin berasal dari luar, yang sangat rendah kelembabannya. Untuk
                        melawan udara yang kering, bawa botol air kosong dan isi ulang selama penerbangan.</p>
                        
                        <h5 class="title-sub">Setelah Pijat</h5>
                        <p class="text-news text-justify">
                            Minum air sebelum pijat dapat membantu membuat otot lebih rileks dan mudah untuk
                            dimanipulasi oleh terapis. Setelah pijat, tubuhmu melepaskan zat yang harus dikeluarkan dengan minum
                            banyak air, terutama setelah pijat jaringan dalam atau pijat berat lainnya.</p>
                            
                <h5 class="title-sub">Sebelum Haid</h5>
                <p class="text-news text-justify">Minum banyak air sebelum dan selama haid dapat membantu
                    mengurangi rasa tidak nyaman dan kembung. Salah satu penyebab utama kram atau sakit kepala adalah
                    dehidrasi. Sebuah studi menemukan bahwa wanita muda yang minum lebih banyak air memiliki siklus yang
                    lebih pendek, nyeri panggul yang lebih ringan, dan membutuhkan lebih sedikit obat pereda nyeri.</p>
                    
                <h5 class="title-sub">Saat Kamu Merasa Lemas di Tengah Hari </h5>
                <p class="text-news text-justify">Ketika merasa lelah di sore
                    hari, daripada minum kopi, cobalah minum segelas air. Kamu bisa menambahkan lemon atau perasa lain
                    untuk menyegarkan suasana hati. Tingkat hidrasi tubuh berpengaruh langsung pada suasana hati,
                    memori, dan persepsi visual, menurut laporan British Journal of Nutrition.</p>
                    
                <h5 class="title-sub">Ketika Kamu Sakit Kepala</h5>
                <p class="text-news text-justify mt-4">Dehidrasi adalah salah satu pemicu utama
                    migrain. Beberapa orang melaporkan bahwa sedikit saja penurunan cairan dapat menyebabkan sakit
                    kepala yang parah. Jika kamu rentan terhadap migrain, selalu sediakan botol air dan perhatikan
                    asupan air harianmu. Jika kamu merasakan sakit kepala datang, segelas air bisa jadi penyelamat.</p>
                    
                    
                <h5 class="title-sub">Sebelum Makan</h5>
                <p class="text-news text-justify mt-4">Minum air sebelum makan, atau yang disebut
                    "preloading," dapat membantu menurunkan berat badan. Sebuah studi kecil menemukan bahwa orang yang
                    minum 500 mililiter air (sekitar 16 ons) 30 menit sebelum makan kehilangan lebih banyak berat badan
                    dalam 12 minggu dibandingkan mereka yang tidak mengikuti metode ini.</p>
                    
                <h5 class="title-sub">Saat Ingin Menurunkan Berat Badan</h5>
                <p class="text-news text-justify mt-4">Air bukan hanya bebas kalori,
                    tetapi juga dapat mempercepat metabolisme. Dalam sebuah studi, 50 gadis dengan berat badan berlebih
                    minum sekitar 2 gelas air setengah jam sebelum sarapan, makan siang, dan makan malam. Setelah 8
                    minggu, mereka kehilangan berat badan dan mengurangi indeks massa tubuh.</p>
                    
                <h5 class="title-sub">Saat Kamu Perlu Konsentrasi</h5>
                <p class="text-news text-justify mt-4">Hampir tiga perempat otak kita
                    terdiri dari cairan. Jika tubuhmu kekurangan cairan, pembuluh darah di otak menyusut. Ini dapat
                    mempengaruhi koordinasi, memori jangka pendek, rentang perhatian, dan stamina. Jadi, jika merasa
                    lelah dan tidak fokus, coba minum air daripada minuman berkafein.</p>
                    
                <h5 class="title-sub">Berapa Banyak Air yang Dibutuhkan?</h5>
                <p class="text-news text-justify mt-4">Akademi Ilmu Pengetahuan,
                    Teknik, dan Kedokteran Nasional AS merekomendasikan pria dewasa sehat untuk minum sekitar 15,5 gelas
                    air per hari, sementara wanita cukup 11,5 gelas per hari dari makanan dan minuman. Namun,
                    kebutuhanmu dapat bervariasi tergantung kesehatan, aktivitas, dan lingkunganmu.</p>



                <div class="news-separator"></div>
                <p class="text-news text-justify mt-4">Menjaga hidrasi tubuh yang baik adalah salah satu langkah sederhana namun sangat penting dalam menjaga kesehatan dan kesejahteraan kita sehari-hari. Air tidak hanya membantu mencegah dehidrasi, tetapi juga berperan dalam mengoptimalkan fungsi organ tubuh, meningkatkan energi, dan mendukung sistem kekebalan tubuh. Dengan memperhatikan waktu-waktu penting untuk minum air, seperti saat merasa lapar, setelah berolahraga, atau saat sakit, kamu dapat memastikan tubuhmu selalu mendapatkan cairan yang cukup. Ingatlah bahwa hidrasi yang baik adalah kunci untuk menjalani hidup yang lebih sehat dan bugar.</p>
            </div>


            <div class="related-news">
                <h3>Berita Lainnya</h3>
                <div class="news-item">
                    <h4><a href="#">Judul Berita 1</a></h4>
                    <p class="text-muted">Deskripsi singkat berita terkait yang menarik minat pembaca...</p>
                </div>
                <div class="news-item">
                    <h4><a href="#">Judul Berita 2</a></h4>
                    <p class="text-muted">Deskripsi singkat berita terkait yang menarik minat pembaca...</p>
                </div>
                <div class="news-item">
                    <h4><a href="#">Judul Berita 3</a></h4>
                    <p class="text-muted">Deskripsi singkat berita terkait yang menarik minat pembaca...</p>
                </div>
            </div>
        </div>
    </div>


    {{-- footer --}}
    <footer class="footer-section mt-5">
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
</body>

</html>
