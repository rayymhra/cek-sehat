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

        /* Media Query for Small Screens */
        @media (max-width: 768px) {
            @media (max-width: 767px) {
                .article-page {
                    flex-direction: column;
                }

                .article-content {
                    position: static;
                    /* Make the article content not sticky */
                    width: 100%;
                    /* Ensure the article content takes full width */
                }

                .related-news {
                    position: static;
                    /* Make the related news section not sticky */
                    width: 100%;
                    /* Ensure the related news section takes full width */
                    margin-top: 20px;
                    /* Add margin to separate from the content */
                }

                .back-section {
                    position: static;
                    /* Remove sticky positioning */
                    width: auto;
                    /* Ensure the back button width adjusts to content */
                    margin: 10px 0;
                    /* Add margin to separate from other elements */
                }

                .back-button {
                    display: inline-block;
                    /* Ensure the button does not stretch full width */
                    padding: 10px 20px;
                    /* Adjust padding to fit content */
                    border-radius: 50px;
                    border: #127681 solid 1px;
                    text-align: center;
                    width: auto;
                    /* Adjust width to fit content */
                }
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
                            <span style="font-size: 20px; margin-right: 5px;"><i class="bx bx-search py-1"></i></span> SEARCH
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

    <div class="container">
        <div class="article-page mt-5">
            <div class="back-section">
                <a href="/lifestyle" class="back-button">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>

            <div class="article-content">
                <h1 class="title">Penelitian Membuktikan: Makan Sayur Memang Bikin Panjang Umur</h1>
                <img src="{{ asset('assets/Frontend/img/lifestyle2.jpg') }}" alt="" class="w-100 mb-3 mt-1"
                    style="max-height: 300px; object-fit: cover;">
                <p class="text-news">Kamu mungkin sudah tahu bahwa pola makan yang kaya akan buah, sayur, dan makanan
                    berbasis tumbuhan lainnya lebih baik daripada yang didominasi oleh daging dan produk susu. Namun,
                    hingga saat ini, penelitian masih belum menjelaskan secara pasti dampak lemak dari makanan tertentu
                    terhadap kesehatan.</p>

                <p class="text-news text-justify">Sebuah penelitian baru-baru ini melihat bagaimana lemak dari tumbuhan
                    dibandingkan dengan lemak dari hewan mempengaruhi harapan hidup. Hasilnya sesuai dugaan: Diet yang
                    lebih tinggi dengan buah, sayuran, biji-bijian, dan minyak nabati memberikan perlindungan yang lebih
                    baik terhadap kematian dari semua penyebab dan penyakit jantung serta pembuluh darah (penyakit
                    kardiovaskular).</p>

                <p class="text-news text-justify">Jumlah yang kamu konsumsi juga penting. Orang yang mengonsumsi lebih
                    banyak lemak dari tumbuhan memiliki risiko kematian 9% lebih rendah dari semua penyebab dan risiko
                    kematian 14% lebih rendah dari penyakit kardiovaskular dibandingkan mereka yang makan lebih sedikit
                    makanan tersebut.</p>

                <p class="text-news text-justify">Sebaliknya, orang yang mengonsumsi banyak lemak berbasis hewan,
                    termasuk dari daging, produk susu, dan telur, memiliki risiko kematian yang lebih tinggi dari semua
                    penyebab dan penyakit kardiovaskular dibandingkan mereka yang makan lebih sedikit. Mereka yang
                    mengonsumsi lemak hewani dalam jumlah tertinggi memiliki risiko kematian 16% lebih tinggi dan risiko
                    penyakit kardiovaskular 14% lebih tinggi dibandingkan dengan mereka yang mengonsumsi lebih sedikit.
                </p>

                <h5 class="title-sub">Data dari Studi Kesehatan Jangka Panjang</h5>
                <p class="text-news text-justify">Lebih dari 400.000 orang dalam penelitian ini adalah bagian dari Studi
                    Diet dan Kesehatan NIH-AARP. Dalam kelompok yang diteliti, sedikit lebih banyak pria daripada
                    wanita, dan usia rata-rata mereka adalah 61 tahun. Mereka terdaftar pada tahun 1995 dan diikuti
                    hingga 2019. Saat terdaftar, para peserta mengisi kuesioner tentang kebiasaan makan mereka, yang
                    mencakup 124 item makanan dan ukuran porsi. Asupan lemak makanan total mencakup sumber tumbuhan
                    (seperti biji-bijian, kacang-kacangan, legum, dan minyak nabati) serta sumber hewan (seperti daging
                    merah dan putih, produk susu, dan telur).</p>

                <p class="text-news text-justify">Selama 24 tahun tindak lanjut, tercatat 185.111 kematian, termasuk
                    58.526 dari penyakit kardiovaskular (45.634 dari penyakit jantung dan 10.877 dari stroke). Para
                    peneliti menghubungkan kematian tersebut dengan informasi makanan dalam kuesioner awal untuk
                    menghitung risiko kematian terkait diet, setelah menyesuaikan dengan faktor-faktor lain yang mungkin
                    berkontribusi terhadap kematian. Mereka juga melihat lemak dalam kelompok makanan tertentu untuk
                    menentukan kaitannya dengan risiko kematian. Misalnya, konsumsi lemak dari kacang-kacangan dan legum
                    tidak terkait dengan hasil kematian apa pun.</p>

                <p class="text-news text-justify">
                    Sebaliknya, konsumsi lemak dari produk susu dan telur menunjukkan peningkatan risiko kematian secara
                    keseluruhan, termasuk dari penyakit kardiovaskular, sementara konsumsi lemak dari daging putih
                    dikaitkan dengan risiko yang lebih rendah. Lemak dari daging merah membawa risiko kematian lebih
                    tinggi; sebaliknya, lemak dari ikan tidak secara signifikan terkait dengan peningkatan risiko
                    kematian secara keseluruhan atau dari penyakit jantung dan pembuluh darah.</p>

                <h5 class="title-sub">Hubungan dengan Perubahan Pola Makan</h5>
                <p class="text-news text-justify">Para peneliti juga memeriksa apakah mengubah pola makan dapat
                    mempengaruhi risiko kematian. Jawabannya? "Iya." Mengganti hanya 5% kalori dari lemak hewani, lemak
                    daging merah, lemak susu, atau lemak telur dengan jumlah lemak nabati yang sama terkait dengan
                    penurunan risiko kematian keseluruhan sebesar 4% hingga 24%, dan penurunan risiko kematian akibat
                    penyakit jantung sebesar 5% hingga 30%.</p>

                <p class="text-news text-justify">Kesimpulan lain: Mengganti lemak nabati dengan lemak ikan dan daging
                    putih tidak menurunkan risiko kematian.</p>

                <p class="text-news text-justify mt-4">Karena plak lemak dapat menumpuk di arteri manusia seiring waktu,
                    mengubah pola makan dapat memiliki dampak berbeda pada kesehatan jantung tergantung pada kapan
                    seseorang melakukan perubahan tersebut, kata Walter Willett, MD, profesor epidemiologi dan nutrisi
                    di Harvard T.H. Chan School of Public Health. “Butuh waktu lama bagi plak tersebut untuk berkurang,
                    jadi semakin cepat seseorang beralih ke diet berbasis tumbuhan, semakin baik,” katanya.</p>



                <div class="news-separator"></div>
                <h5 class="title-sub">Rekomendasi Diet</h5>
                <p class="text-news text-justify mt-4">Dr. Demetrius Albanes, salah satu penulis studi dan peneliti
                    senior di Divisi Epidemiologi dan Genetika Kanker Institut Kanker Nasional, setuju. "Lebih baik
                    mengubah diet lebih awal, di bawah pengawasan dokter, sambil menghindari jenis diet yang terlalu
                    drastis." Data dari studi ini cukup kuat untuk digunakan dalam rekomendasi diet, tambahnya. Di
                    antara sumber lemak nabati yang dia rekomendasikan, selain buah dan sayur, adalah lemak dari makanan
                    biji-bijian (seperti roti, pasta) dan minyak nabati, termasuk minyak zaitun, canola, dan jagung.</p>
            </div>


            <div class="related-news">
                <h3>Berita Lainnya</h3>
                <div class="news-item">
                    <h4><a href="/lifestyle1">Cara Memperlambat Perkembangan Kanker</a></h4>
                    <p class="text-muted">Meskipun masih dalam tahap awal, beberapa penelitian menunjukkan...</p>
                </div>
                <div class="news-item">
                    <h4><a href="/lifestyle3">Kapan Waktu Terbaik untuk Minum Air?</a></h4>
                    <p class="text-muted">Saat Kamu Merasa Lapar Mungkin sebenarnya kamu sedang haus...</p>
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
