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
                            <span style="font-size: 20px; margin-right: 5px;"><i class="bx bx-search"></i></span> SEARCH
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="article-page mt-5">
            <div class="back-section">
                <a href="/medis" class="back-button">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>

            <div class="article-content">
                <h1 class="title">Cara Memperlambat Perkembangan Kanker</h1>
                <img src="{{ asset('assets/Frontend/img/medis1.jpeg') }}" alt="" class="w-100 mb-3 mt-1"
                    style="max-height: 300px; object-fit: cover;">
                <p class="text-news">Kanker adalah pertumbuhan sel abnormal yang dapat menyerang berbagai organ tubuh dan membuat
                    fungsi organ tersebut tidak bekerja dengan optimal.</p>
            
                <h5 class="title-sub">Diet dan Olahraga</h5>
                <p class="text-news text-justify">Beberapa penelitian menunjukkan bahwa pola makan sehat dan olahraga teratur bisa membantu memperlambat perkembangan berbagai jenis kanker. Kurangi konsumsi gula, pilih daging yang lebih ramping, dan makan banyak buah serta sayuran berwarna. Hindari produk susu berlemak tinggi. Lakukan latihan kardio dan angkat beban secara rutin untuk menjaga kesehatan tubuh secara menyeluruh.</p>
            
                <h5 class="title-sub">Yoga</h5>
                <p class="text-news text-justify">Stres bisa mempengaruhi saraf dan sistem kekebalan tubuh yang berperan dalam penyebaran kanker. Aktivitas yang dapat mengurangi stres, seperti yoga, mungkin dapat membantu memperlambat perkembangan kanker.</p>
            
                <h5 class="title-sub">Biji Rami</h5>
                <p class="text-news text-justify">Biji rami telah lama dikenal memiliki manfaat kesehatan. Meskipun belum ada kepastian tentang efeknya terhadap berbagai jenis kanker, beberapa peneliti percaya bahwa biji rami bisa membantu memperlambat pertumbuhan tumor. Namun, hindari mengonsumsi minyak biji rami secara berlebihan.</p>
            
                <h5 class="title-sub">Teh Hijau</h5>
                <p class="text-news text-justify">Senyawa dalam teh hijau, seperti EGCG, dipercaya dapat membantu mengurangi dan membunuh sel kanker. Penelitian masih berlangsung, tetapi hasil awalnya cukup menjanjikan untuk berbagai jenis kanker.</p>
            
                <h5 class="title-sub">Vitamin D</h5>
                <p class="text-news text-justify">Orang yang memiliki kanker sering kali memiliki kadar vitamin D yang rendah. Meningkatkan kadar vitamin D, baik melalui suplemen maupun paparan sinar matahari, mungkin membantu memperlambat pertumbuhan sel kanker. Penelitian lebih lanjut masih dibutuhkan.</p>
            
                <h5 class="title-sub">Jus Delima</h5>
                <p class="text-news text-justify">Penelitian awal menunjukkan bahwa mengonsumsi jus delima setiap hari bisa membantu memperlambat perkembangan beberapa jenis kanker. Namun, penelitian lebih lanjut masih diperlukan, terutama untuk mengetahui efektivitasnya pada stadium kanker yang berbeda.</p>
            
                <h5 class="title-sub">Likopen</h5>
                <p class="text-news text-justify">Likopen, pigmen alami dalam tomat dan beberapa makanan lainnya, telah banyak diteliti untuk efeknya pada kanker. Meskipun hasil penelitian masih beragam, makanan yang mengandung likopen seperti tomat tetap merupakan bagian dari diet sehat dan dapat membantu memperlambat perkembangan kanker.</p>
            
                <h5 class="title-sub">Kunyit</h5>
                <p class="text-news text-justify">Kunyit, yang merupakan bahan dapur tradisional, memiliki potensi dalam mencegah kanker dan meredakan peradangan. Meskipun penelitian lebih lanjut masih diperlukan, kunyit dapat dikonsumsi bersama terapi lain. Pastikan untuk memberitahu dokter jika Anda menambahkannya dalam diet Anda.</p>

                <p class="text-news text-justify mt-4">Meskipun tidak ada cara pasti untuk mencegah atau menyembuhkan kanker, mengadopsi gaya hidup sehat dengan pola makan yang baik, olahraga teratur, dan pengelolaan stres dapat membantu memperlambat perkembangan penyakit. Setiap langkah kecil yang Anda ambil menuju kesehatan yang lebih baik dapat memberikan dampak besar pada tubuh Anda. Selalu konsultasikan dengan dokter sebelum memulai perubahan besar dalam diet atau perawatan untuk memastikan bahwa metode yang Anda pilih sesuai dengan kondisi Anda. Penelitian lebih lanjut masih diperlukan untuk memastikan efektivitas dari berbagai pendekatan ini, namun menjaga kesehatan secara menyeluruh selalu menjadi langkah yang bijak.</p>
            
                <div class="news-separator"></div>
                <p class="text-muted text-justify">Dengan pemahaman yang lebih baik tentang faktor-faktor yang mempengaruhi perkembangan kanker, diharapkan penderita kanker dapat meningkatkan kualitas hidupnya dan memiliki kendali lebih dalam perjalanan pengobatan mereka.
                </p>
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