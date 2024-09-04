<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- bxicons -->
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- bootstrap icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* light color: #1aa6b7 */
        /* primary color: #127681 */
        /* dark color: #3a3a3a */

        * {
            font-family: "Montserrat", sans-serif;
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

        /* login */
        @media {
            .login-container {
            display: flex;
            height: 100vh;
        }

        .login-container .image-section {
            flex: 1;
            background: url('{{ asset('assets/Frontend/img/login.jpg') }}') no-repeat center center;
            background-size: cover;
            margin: 10px;
            border-radius: 10px;
        }

        .login-container .form-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-color: #fff; */
            padding: 20px;
        }

        .login-container .form-section .login-form {
            max-width: 400px;
            width: 100%;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            border-radius: 8px;
            padding: 20px;
        }

        .login-container .form-section .login-form h2 {
            margin-bottom: 20px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-group input {
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            font-size: 16px;
        }

        .form-footer {
            margin-top: 20px;
        }

        .form-footer a {
            text-decoration: none;
            color: #3a3a3a;
        }

        .login-form {
            align-items: center;
            text-align: center;
        }

        .login-form .google-btn {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 50px;
            background-color: transparent;
            border: #1aa6b7 1px solid !important;
            color: #1aa6b7;
            font-weight: 700;
            border: none;
            width: 100%;
            text-align: center;
            line-height: 20px;
            transition: 0.3s;
        }

        .login-form .google-btn img {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .login-form .google-btn:hover {
            background-color: #1aa6b7;
            color: #ffffff;
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 15px 0;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .separator:not(:empty)::before {
            margin-right: 10px;
        }

        .separator:not(:empty)::after {
            margin-left: 10px;
        }

        .separator span {
            font-weight: 700;
            color: #777;
        }

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
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel') }}">ARTIKEL</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">INFO KESEHATAN</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary" href="#">LOGIN</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <!-- Image Section -->
        <div class="image-section"></div>

        <!-- Form Section -->
        <div class="form-section">
            <div class="login-form">
                <h2>Login</h2>
                <form action="/login" method="post">
                    <div class="form-group">
                        {{-- <label for="username">Username or Email</label> --}}
                        <input type="text" id="username" name="username" class="form-control" required placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                        {{-- <label for="password">Password</label> --}}
                        <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-footer">
                        <a href="#">Forgot Password?</a><br>
                        <a href="#">Sign Up</a>
                    </div>
                </form>
                <div class="separator"><span>or</span></div>
                <button class="google-btn">
                    <img src="{{ asset("assets/Frontend/img/google.png") }}" alt="Google Logo">
                    Login with Google
                </button>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="footer-section">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
