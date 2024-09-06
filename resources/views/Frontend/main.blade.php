@extends('Frontend.layout')
@section('content')
    {{-- search modal --}}
    <div id="searchModal" class="search-modal">
        <div class="search-modal-content">
            <span id="closeSearch" class="close-search"></span>
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
                <div class="carousel-caption top-0 mt-4 d-block d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">selamat datang</p>
                    <h1 class="carousel-text text-uppercase">Pahami gejala Anda dan jelajahi kemungkinan kondisi di Cek
                        Sehat</h1>
                </div>
            </div>

            <!-- carousel item 2 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c2.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-block d-md-block">
                    <p class="mt-4 text-uppercase cr-artikel">selamat datang</p>
                    <h1 class="carousel-text text-uppercase">Tetap Terinformasi dengan Berita Kesehatan Terbaru</h1>
                </div>
            </div>

            <!-- carousel item 3 -->
            <div class="carousel-item cItem">
                <img src="{{ asset('assets/Frontend/img/c3.jpg') }}" class="d-block w-100 cImg" alt="...">
                <div class="carousel-caption top-0 mt-4 d-block d-md-block">
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
@stop