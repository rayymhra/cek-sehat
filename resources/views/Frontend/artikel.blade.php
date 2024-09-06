@extends('Frontend.layout')
@section('content')
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
            {{-- News Section (Left) --}}
            <div class="col-lg-8 news-section">
                <div class="news-item mb-4">
                    <img src="{{ asset('assets/Frontend/img/c4.jpg') }}" alt="News Image 1" class="img-fluid mb-3">
                    <h3><a href="#" class="news-title">Judul Berita 1</a></h3>
                    <p class="news-description">Deskripsi singkat tentang berita ini yang menarik minat pembaca...</p>
                </div>
                <div class="news-item mb-4">
                    <img src="{{ asset('assets/Frontend/img/c4.jpg') }}" alt="News Image 2" class="img-fluid mb-3">
                    <h3><a href="#" class="news-title">Judul Berita 2</a></h3>
                    <p class="news-description">Deskripsi singkat tentang berita ini yang menarik minat pembaca...</p>
                </div>
                <!-- Add more news items as needed -->
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
        <h1 class="title text-center mt-5">Selamat Datang di Halaman Artikel Cek Sehat</h1>
        <p>Di halaman Artikel kami, Anda dapat menemukan berbagai macam informasi dan panduan kesehatan yang dirancang
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
@stop