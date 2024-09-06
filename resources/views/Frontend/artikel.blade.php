<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Sehat | Artikel</title>
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


        /* title */
        .title {
            font-size: 23px;
            font-weight: 700;
            text-transform: uppercase;
            color: #3a3a3a;
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

            /* sticky */
            .navbar {
                position: -webkit-sticky;
                /* For Safari */
                position: sticky;
                top: 0;
                z-index: 10000000000000000000000000000000;
                /* Ensure the navbar stays on top of other content */
                border-bottom: 1px solid #ddd;
                /* Optional: Adds a border at the bottom */
            }

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

        }

        /* artikel categories */
        @media {
            .nav-pills {
                display: flex;
                /* justify-content: center; */
                border-bottom: 1px solid #ddd;
                /* Border below the categories */
                margin-bottom: 20px;
            }

            .nav-pills .nav-link {
                font-size: 14px;
                padding: 10px 15px;
                margin: 0 5px;
                border-radius: 0;
                border-bottom: 2px solid transparent;
                color: #1aa6b7;
                transition: color 0.3s ease, border-color 0.3s ease;
            }

            .nav-pills .nav-link.active {
                color: white;
                background-color: #1aa6b7;
                /* Active background */
                border-bottom: 2px solid #127681;
            }

        }


        /* berita & faq */

        .faq-section {
            position: -webkit-sticky;
            position: sticky;
            top: 80px;
            /* Adjust this value if needed to ensure it's below the navbar */
            z-index: 1000;
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
        }

        .news-section {
            /* background-color: #f7f7f7; */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            text-decoration: none;
            font-weight: 600;
            color: #1aa6b7;
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

        .badge {
            background-color: #127681;
        }

        /* biar ga kelewatan */
        .news-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limit to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .news-description {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limit to 3 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .news-image img {
            object-fit: cover;
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
                    <li class="nav-item">
                        <a class="nav-link" href="" id="searchIcon"><i class='bx bx-search'></i></a>

                    </li>
                    <li class="nav-item"><a class="nav-link" href="">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel') }}">ARTIKEL</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">INFO KESEHATAN</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary" href="#">LOGIN</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- title --}}
    <div class="container">
        <h1 class="title text-center mb-5 mt-5">Semua Artikel</h1>
    </div>

    {{-- artikel categories --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <nav class="nav nav-pills">
                    <a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}"
                        href="{{ route('artikel') }}">Semua</a>
                    <a class="nav-link {{ request()->is('medis') ? 'active' : '' }}"
                        href="{{ route('medis') }}">Medis</a>
                    <a class="nav-link {{ request()->is('love') ? 'active' : '' }}" href="{{ route('love') }}">Sex &
                        Love</a>
                    <a class="nav-link {{ request()->is('lifestyle') ? 'active' : '' }}"
                        href="{{ route('lifestyle') }}">Lifestyle</a>
                </nav>
            </div>
        </div>
    </div>

    {{-- artikel & faq --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 news-section">
                {{-- medis1 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/medis1">
                            <img src="{{ asset('assets/Frontend/img/medis1.webp') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Medis</span>
                        <h3><a href="/medis" class="news-title">Cedera Ginjal Akut Meningkatkan Risiko Demensia,
                                Termasuk Demensia Lewy Body dan Parkinson</a></h3>
                        <p class="news-description">Penelitian terbaru banyak menyoroti dampak negatif paparan cahaya
                            terang di malam hari terhadap kesehatan. </p>
                    </div>
                </div>

                {{-- medis2 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/medis2">
                            <img src="{{ asset('assets/Frontend/img/medis2.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Medis</span>
                        <h3><a href="/medis2" class="news-title">Pengurangan Paparan Cahaya Malam Dapat Menurunkan Risiko Diabetes Tipe 2</a></h3>
                        <p class="news-description">Penelitian terbaru banyak menyoroti dampak negatif paparan cahaya terang di malam hari terhadap kesehatan. Beberapa studi menemukan adanya kemungkinan hubungan antara paparan cahaya di malam hari dengan risiko diabetes. </p>
                    </div>
                </div>

                {{-- medis3 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/medis3">
                            <img src="{{ asset('assets/Frontend/img/medis3.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>

                    <div class="news-content">
                        <span class="badge mb-2">Medis</span>
                        <h3><a href="/medis3" class="news-title">Kemajuan Teknologi dalam Industri Medis dan Pertumbuhan AI </a></h3>
                        <p class="news-description">Pasar robot medis global diproyeksikan mengalami pertumbuhan pesat dalam dekade mendatang. Ukuran pasar ini diperkirakan melonjak dari USD 11,502.4 juta pada tahun 2024 menjadi USD 38,701.5 juta </p>
                    </div>
                </div>

                {{-- love1 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/love1">
                            <img src="{{ asset('assets/Frontend/img/love1.webp') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Sex & Love</span>
                        <h3><a href="/love1" class="news-title">Apa yang Perlu Diketahui tentang Gonore</a></h3>
                        <p class="news-description">Gonore adalah infeksi menular seksual (IMS) yang umum disebabkan oleh bakteri Neisseria gonorrhoeae. Gejala awal gonore bisa berupa keluarnya nanah (putih, hijau, atau kuning) dan nyeri saat berkemih, meskipun banyak orang tidak menunjukkan gejala sama sekali. Diagnosis dan pengobatan antibiotik yang cepat sangat penting untuk mencegah komplikasi.</p>
                    </div>
                </div>

                {{-- love2 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/love2">
                            <img src="{{ asset('assets/Frontend/img/love2.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Sex & Love</span>
                        <h3><a href="/love2" class="news-title">Apakah Ada Hubungan antara Pil KB dan Kanker Payudara?</a></h3>
                        <p class="news-description">Penggunaan kontrasepsi hormonal bisa sedikit meningkatkan risiko terkena kanker payudara. Risiko ini bervariasi tergantung pada jenis kontrasepsi yang digunakan. </p>
                    </div>
                </div>

                {{-- love3 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/love3">
                            <img src="{{ asset('assets/Frontend/img/love3.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Sex & Love</span>
                        <h3><a href="/love3" class="news-title">Tips untuk Seks Setelah Menopause</a></h3>
                        <p class="news-description">Perubahan hormonal selama menopause dapat mempengaruhi fisik dan emosional yang berdampak pada gairah dan kehidupan seksual. Berikut adalah beberapa tips untuk mengelola dan meningkatkan kehidupan seksual setelah menopaus</p>
                    </div>
                </div>

                {{-- lifestyle1 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/lifestyle1">
                            <img src="{{ asset('assets/Frontend/img/lifestyle1.jpeg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Lifestyle</span>
                        <h3><a href="/lifestyle1" class="news-title">Cara Memperlambat Perkembangan Kanker</a></h3>
                        <p class="news-description">Meskipun masih dalam tahap awal, beberapa penelitian menunjukkan bahwa makan dengan pola makan sehat dan berolahraga secara teratur bisa membantu memperlambat perkembangan kanker prostat.</p>
                    </div>
                </div>

                {{-- lifestyle2 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/lifestyle2">
                            <img src="{{ asset('assets/Frontend/img/lifestyle2.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Lifestyle</span>
                        <h3><a href="/lifestyle2" class="news-title">Penelitian Membuktikan: Makan Sayur Memang Bikin Panjang Umur</a></h3>
                        <p class="news-description">Kamu mungkin sudah tahu bahwa pola makan yang kaya akan buah, sayur, dan makanan berbasis tumbuhan lainnya lebih baik daripada yang didominasi oleh daging dan produk susu. Namun, hingga saat ini, penelitian masih belum menjelaskan secara pasti dampak lemak dari makanan tertentu terhadap kesehatan.</p>
                    </div>
                </div>

                {{-- lifestyle3 --}}
                <div class="news-item mb-4 d-flex align-items-start"
                    style="border-bottom: 1px solid rgba(221, 221, 221, 0.5); padding-bottom: 10px;">
                    <div class="news-image me-3">
                        <a href="/lifestyle3">
                            <img src="{{ asset('assets/Frontend/img/lifestyle3.jpg') }}"
                                class="img-fluid" style="max-width: 200px; height: 150px;">
                        </a>
                    </div>
                    <div class="news-content">
                        <span class="badge mb-2">Lifestyle</span>
                        <h3><a href="/lifestyle3" class="news-title">Kapan Waktu Terbaik untuk Minum Air?</a></h3>
                        <p class="news-description">Saat Kamu Merasa Lapar Mungkin sebenarnya kamu sedang haus. Banyak orang tidak sadar bahwa rasa lapar sering kali disebabkan oleh haus. Otak kita mengenali kedua sinyal ini dengan cara yang sama. Jadi, sebelum kamu mencari camilan, coba minum air terlebih dahulu dan tunggu beberapa menit untuk melihat apakah rasa lapar itu hilang.</p>
                    </div>
                </div>
            </div>

            {{-- FAQ Section (Right) --}}
            <div class="col-lg-4">
                <div class="faq-section">
                    <h2 class="mb-4 title">FAQ</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Bagaimana cara menggunakan alat pemeriksa gejala?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Cukup masukkan gejala yang Anda alami ke dalam kolom pencarian, dan sistem kami akan
                                    memberikan daftar kemungkinan kondisi yang terkait dengan gejala tersebut.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah hasil pemeriksaan gejala ini akurat?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Alat ini memberikan informasi berdasarkan data yang tersedia, namun tidak dapat
                                    menggantikan diagnosis medis profesional. Kami menyarankan Anda untuk berkonsultasi
                                    dengan dokter jika Anda memiliki kekhawatiran kesehatan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Apa yang harus saya lakukan jika hasilnya menunjukkan kondisi serius?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Jika alat ini menunjukkan kondisi yang serius, segera hubungi dokter atau pusat
                                    kesehatan terdekat untuk mendapatkan bantuan medis lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <!-- Add more FAQs as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- deskripsi --}}
    <div class="container">
        <h1 class="title text-center mt-5 mb-4">Selamat Datang di Halaman Artikel Cek Sehat</h1>
        <p class="text-muted" style="text-align: justify;">Di halaman Artikel kami, Anda dapat menemukan berbagai
            macam informasi dan panduan kesehatan yang dirancang
            untuk membantu Anda memahami gejala dan kondisi medis dengan lebih baik. Kami telah mengkategorikan
            artikel-artikel kami menjadi beberapa kategori utama, yaitu Semua, Medis, Sex & Love, dan Lifestyle, untuk
            memudahkan Anda dalam mencari topik yang paling relevan dengan kebutuhan Anda.
            Kami berkomitmen untuk memberikan informasi yang akurat dan terpercaya. Dengan menggunakan sistem pencarian
            kami, Anda dapat dengan mudah menemukan artikel yang sesuai dengan gejala atau topik yang Anda minati. Jika
            Anda mencari informasi spesifik atau memiliki pertanyaan tentang kesehatan, halaman ini adalah sumber yang
            berharga untuk membantu Anda menemukan jawaban yang Anda butuhkan.

            Jelajahi kategori-kategori kami dan temukan artikel yang relevan untuk mendukung kesehatan dan kesejahteraan
            Anda!
        </p>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    {{-- faq scrolling --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("DOMContentLoaded", function() {
                var faq = document.querySelector('.faq-section');
                var news = document.querySelector('.news-section');
                var faqHeight = faq.offsetHeight;
                var newsHeight = news.offsetHeight;
                var navbarHeight = 80; // Adjust based on your navbar height

                function updateFAQPosition() {
                    var scrollTop = window.scrollY;
                    var newsTop = news.offsetTop;
                    var newsBottom = newsTop + newsHeight;
                    var windowBottom = scrollTop + window.innerHeight;

                    if (windowBottom > newsBottom) {
                        faq.style.position = 'absolute';
                        faq.style.top = (newsHeight - faqHeight + navbarHeight) +
                            'px'; // Position within the news section
                    } else {
                        faq.style.position = 'sticky';
                        faq.style.top = navbarHeight + 'px'; // Stick below the navbar
                    }
                }

                window.addEventListener('scroll', updateFAQPosition);
                updateFAQPosition(); // Initial call
            });
        });
    </script>

</body>

</html>
