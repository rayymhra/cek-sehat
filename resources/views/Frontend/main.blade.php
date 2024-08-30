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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        /* light color: #1aa6b7 */
        /* primary color: #127681 */
        /* secondary color: #e63946 */

        * {
            font-family: "Roboto", sans-serif;
        }

        .btn-primary {
            background-color: #1aa6b7;
            outline: none;
            border:none;
        }

        .btn-primary:hover {
            background-color: #127681;
        }

        .btn-primary:active {
            background-color: #e63946;
        }

        .btn {
            margin-right: 10px;
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
        }

        .navbar-nav .nav-link:hover {
            color: #127681;
        }

        .navbar-nav .nav-item:hover {
            display: block;
        }

        /* CAROUSEL */

        .cItem {
            height: 500px;
        }

        .cImg {
            filter: brightness(0.6);
            height: 400px;
            object-fit: cover;
        }

        .carousel-text {
            font-weight: 700;
        }

        /* .cr-artikel {
            background-color: blue;
        } */

        .cr-search {
            position: absolute;
            bottom: 200px;
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
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }

        .category-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .category-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .category-title {
            font-size: 16px;
            font-weight: 500;
            color: #333;
        }

        
    </style>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Frontend/img/cek sehat.png') }}" alt="Cek Sehat" width="150">
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
            <h2 class="text-center mb-4">Health Categories</h2>
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
                        <img src="{{ asset('assets/Frontend/img/lainnya.png') }}" alt="Lainnya">
                        <h3 class="category-title">Lainnya</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
