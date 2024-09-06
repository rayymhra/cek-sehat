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

        /* search */
        .form-control {
            border-radius: 50px;
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

        /* title */
        .title {
            font-size: 23px;
            font-weight: 700;
            text-transform: uppercase;
            color: #3a3a3a;
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

        /* CAROUSEL */
        @media {
            .cItem {
                height: 400px;
            }

            .cImg {
                filter: brightness(0.6);
                height: 400px;
                object-fit: cover;
            }

            .carousel-text {
                font-weight: 600;
            }

            .cr-search {
                position: absolute;
                bottom: 100px;
                width: 50%;
                left: 50%;
                transform: translateX(-50%);
                z-index: 100000;
            }
        }


        /* categories */
        @media {
            .category-section-top {
                padding: 40px 0;
                background-color: #ffffff;
                margin-top: 60px;
                padding-top: 0;
            }

            .category-card {
                background: #f6f6f6;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 10px;
                transition: box-shadow 0.3s ease;
            }

            .category-card:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .category-card img {
                width: 60px;
                height: 60px;
                margin-bottom: 5px;
            }

            .category-title {
                font-size: 16px;
                font-weight: 500;
                color: #333;
            }
        }



        /* steps by step */
        @media {
            .steps-section {
                background-color: #f8f9fa;
                padding: 40px 0;
            }

            .section-title {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .timeline-container {
                display: flex;
                flex-direction: column;
                gap: 20px;
                /* justify-content: center;
                align-items: center; */
            }

            .timeline-step {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #ffffff;
                /* border-radius: 10px; */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
                position: relative;

            }

            .step-number {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
                font-weight: bold;
                color: #127681;
            }

            .step-number .step-text {
                font-size: 1rem;
                text-transform: uppercase;
            }

            .step-number .step-digit {
                font-size: 2rem;
            }

            .step-icon {
                width: 60px;
                height: 60px;
                background-color: #1aa6b7;
                color: #ffffff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                margin-right: 20px;
            }

            .step-content {
                flex: 1;
            }

            .step-title {
                font-size: 1.3rem;
                margin-bottom: 5px;
            }

            .step-description {
                font-size: 1 rem;
                color: #555555;
                margin-bottom: 0;
            }

            @media (max-width: 768px) {
                .timeline-step {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .step-icon {
                    margin-right: 0;
                    margin-bottom: 10px;
                }

                .step-number {
                    margin-right: 0;
                    margin-bottom: 10px;
                }
            }
        }






        /* common */
        @media {
            .symptoms-conditions-section {
                background-color: #ffffff;
                padding: 50px 0;
            }

            .comparison-table {
                width: 100%;
                border-collapse: collapse;
                position: relative;
            }

            .comparison-table th,
            .comparison-table td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #dddddd;
                vertical-align: top;
                position: relative;
            }

            .comparison-table th {
                background-color: #1aa6b7;
                font-size: 1.3rem;
                color: #ffffff;
                text-align: center;
                font-weight: 600;
            }

            .comparison-table td {
                background-color: #ffffff;
                font-size: 1.5rem;
                color: #333;
            }

            .item-title {
                font-size: 1.3rem;
                font-weight: 600;
            }

            .item-description {
                font-size: 1rem;
            }

            .symptoms-image,
            .conditions-image {
                max-width: 100%;
                height: auto;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .comparison-table .image-cell {
                text-align: center;
                width: 150px;
            }

            .comparison-table .image-cell img {
                max-width: 100%;
                height: 100px;
                padding: 0 !important;
                object-fit: cover;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            @media (max-width: 768px) {

                .comparison-table th,
                .comparison-table td {
                    display: block;
                    width: 100%;
                    padding: 15px;
                }

                .comparison-table th {
                    position: sticky;
                    top: 0;
                    background-color: #f4f4f4;
                    z-index: 1;
                }

                .comparison-table::before {
                    display: none;
                }
            }
        }





        /* advice */
        @media {
            .advice-section {
                background-color: #f6f6f6;
                padding: 50px 0;
            }

            .advice-wrapper {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .advice-item {
                background-color: #1aa6b7;
                border-radius: 8px;
                overflow: hidden;
                text-align: center;
                color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .advice-item img {
                /* width: 100%;
                height: 150px;
                object-fit: cover;
                Ensure image covers the space without stretching */

                width: 200px;
                height: 200px;
                object-fit: cover;
                border-radius: 8px 8px 0 0;
            }

            .advice-title {
                font-size: 1.5rem;
                font-weight: 500;
                margin: 15px 0 10px 0;
                color: #ffffff;
            }

            .advice-description {
                font-size: 1rem;
                color: #ffffff;
                padding: 0 10px 20px 10px;
            }

            @media (max-width: 1024px) {
                .advice-wrapper {
                    grid-template-columns: repeat(2, 1fr);
                    /* Adjust to two columns on smaller screens */
                }
            }

            @media (max-width: 768px) {
                .advice-wrapper {
                    grid-template-columns: 1fr;
                    /* Adjust to one column on mobile screens */
                }
            }
        }





        /* education */
        @media {
            .educational-resources-section {
                background-color: #ffffff;
                padding: 50px 0;
            }

            .resource-card {
                display: grid;
                grid-template-columns: 1fr 1fr;
                /* Two columns: resources list on the left, large image on the right */
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                gap: 30px;
            }

            .resource-list {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .resource-item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* padding: 10px 0; */
                border-bottom: 1px solid #e0e0e0;
            }

            .resource-item:last-child {
                border-bottom: none;
                /* Remove the bottom border from the last item */
            }

            .resource-title a {
                font-size: 1.4rem;
                color: #1aa6b7;
                text-decoration: none;
                transition: color 0.3s ease;
                flex-grow: 1;
            }

            .resource-title a:hover {
                color: #127681;
            }

            .resource-link-icon {
                font-size: 1.5rem;
                color: #1aa6b7;
                margin-left: 10px;
            }

            .resource-image {
                width: 100%;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Add a subtle shadow to the image */
            }

            @media (max-width: 1024px) {
                .resource-card {
                    grid-template-columns: 1fr;
                    /* Stack the resources and image on smaller screens */
                }

                .resource-image {
                    margin-top: 30px;
                    /* Add spacing between the resources and image when stacked */
                }
            }
        }



        /* faq */
        @media {
            .faqs-section {
                background-color: #f6f6f6;
                padding: 50px 0;
            }

            .faq-wrapper {
                max-width: 800px;
                margin: 0 auto;
            }

            .faq-item {
                margin-bottom: 10px;
                border-bottom: 1px solid #ddd;
                /* Add border between items */
            }

            .faq-question {
                font-size: 19px;
                color: #1aa6b7;
                background: none;
                border: none;
                cursor: pointer;
                text-align: left;
                padding: 15px;
                width: 100%;
                border-radius: 8px;
                transition: color 0.3s ease, background-color 0.3s ease;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .faq-question:hover {
                color: #127681;
                background-color: #e9ecef;
            }

            .faq-question .chevron {
                font-size: 1.2rem;
                transition: transform 0.3s ease;
            }

            .faq-item.active .faq-question .chevron {
                transform: rotate(180deg);
                /* Rotate chevron when active */
            }

            .faq-answer {
                font-size: 1rem;
                color: #3a3a3a;
                line-height: 1.6;
                padding: 0 15px;
                display: none;
                transition: max-height 0.3s ease, padding 0.3s ease;
                overflow: hidden;
            }

            .faq-item.active .faq-answer {
                display: block;
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
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
                            <li><a class="dropdown-item" href="{{ route('ragam-penyakit')}}">Ragam Penyakit</a></li>
                            <li><a class="dropdown-item" href="{{ route('ragam-gejala')}}">Ragam Obat</a></li>
                        </ul>
                    </li>
                    <form action="/pegawai/cari" method="GET">
                    <li class="nav-item"><a class="btn btn-outline-primary rounded-5" id="searchIcon" href="#"><i class="bx bx-search"></i> SEARCH</a></li>
                    <!-- <li class="nav-item"><a class="btn btn-primary" href="#">LOGIN</a></li> -->
                    <!-- {{-- <li class="nav-item"><a class="btn btn-primary" href="#">TULIS ARTIKEL <i
                                class='bx bxs-edit'></i></a></li> --}} -->
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- footer -->
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
                <p>&copy; 2024 Rayya & Aldizar. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

    {{-- faq --}}
    <script>
        document.querySelectorAll('.faq-question').forEach((button) => {
            button.addEventListener('click', () => {
                const faqItem = button.closest('.faq-item');
                const answer = faqItem.querySelector('.faq-answer');

                // Toggle the active class and answer visibility
                if (faqItem.classList.contains('active')) {
                    faqItem.classList.remove('active');
                    answer.style.display = 'none';
                } else {
                    document.querySelectorAll('.faq-item').forEach(item => {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.display = 'none';
                    });
                    faqItem.classList.add('active');
                    answer.style.display = 'block';
                }
            });
        });
    </script>

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