@extends('Frontend.layout')
@section('content')
    {{-- hero section --}}
    <div class="container-fluid hero-container">
        <div class="row hero-section align-items-center">
            <div class="col-md-6 hero-text">
                <h1>Fokus Sehat</h1>
                <p>
                    Explore our resources to help you maintain your health and wellness. Whether you're looking for
                    information on specific conditions or tips for a healthier lifestyle, we have the information you
                    need.
                </p>
            </div>
            <div class="col-md-6 hero-image">
                <img src="{{ asset('assets/Frontend/img/fokus sehat.png') }}">
            </div>
        </div>
    </div>

    {{-- category --}}
    <div class="category-section-top">
        <div class="container">
            <h2 class="title text-center mb-5">fokus Sehat</h2>
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Alergi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/alergi.png') }}" alt="alergi">
                            <h3 class="category-title">Alergi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Bayi & Balita">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/bayi & balita.png') }}" alt="bayi & balita">
                            <h3 class="category-title">Bayi & Balita</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Diabetes">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/diabetes.png') }}" alt="diabetes">
                            <h3 class="category-title">Diabetes</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Hipertensi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/hipertensi.png') }}" alt="hipertensi">
                            <h3 class="category-title">Hipertensi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kanker">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kanker.png') }}" alt="kanker">
                            <h3 class="category-title">Kanker</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kardiovaskular">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kardiovaskular.png') }}" alt="kardiovaskular">
                            <h3 class="category-title">Kardiovaskular</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kecantikan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kecantikan.png') }}" alt="kecantikan">
                            <h3 class="category-title">Kecantikan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kehamilan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kehamilan.png') }}" alt="kehamilan">
                            <h3 class="category-title">Kehamilan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Mental">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mental.png') }}"
                                alt="kesehatan mental">
                            <h3 class="category-title">Kesehatan Mental</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Mulut">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mulut.png') }}" alt="kesehatan mulut">
                            <h3 class="category-title">Kesehatan Mulut</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Pria">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan pria.png') }}" alt="kesehatan pria">
                            <h3 class="category-title">Kesehatan Pria</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kesehatan Wanita">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kesehatan wanita.png') }}"
                                alt="kesehatan wanita">
                            <h3 class="category-title">Kesehatan Wanita</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Kulit">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/kulit.png') }}" alt="kulit">
                            <h3 class="category-title">Kulit</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Mata">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/mata.png') }}" alt="mata">
                            <h3 class="category-title">Mata</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Nutrisi">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/nutrisi.png') }}" alt="nutrisi">
                            <h3 class="category-title">Nutrisi</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Olahraga">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/olahraga.png') }}" alt="olahraga">
                            <h3 class="category-title">Olahraga</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Pencernaan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/pencernaan.png') }}" alt="pencernaan">
                            <h3 class="category-title">Pencernaan</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Sex & Relationships">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/sex & relationships.png') }}"
                                alt="sex & relationships">
                            <h3 class="category-title">Sex & Relationships</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <a href="" title="Turun Berat Badan">
                        <div class="category-card text-center">
                            <img src="{{ asset('assets/Frontend/img/turun berat badan.png') }}"
                                alt="turun berat badan">
                            <h3 class="category-title">Turun Berat Badan</h3>
                        </div>
                    </a>
                </div>  
            </div>
        </div>
    </div>
@stop
