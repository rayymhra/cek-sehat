@extends('Frontend.layout')
@section('section')
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
@stop