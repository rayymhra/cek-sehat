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


    <style>
        /* categories */
        .category-section-top {
            padding: 40px 0;
        }

        .category-for ul {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-for ul li.leaf {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            padding: 15px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            width: 120px;
            text-align: center;
        }

        .category-for ul li.leaf .icon img {
            width: 80px;
            height: 80px;
            border: 2px solid #f0f0f0;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .category-for ul li.leaf span.category {
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="hero bg-primary text-white py-5 d-flex flex-column">
        <h1 class="hero-title">Pusat Kesehatan</h1>
        <p class="hero-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque necessitatibus molestiae rem quidem pariatur officia odit quisquam suscipit sed soluta. Voluptate voluptatem odio optio voluptatum ducimus architecto est harum repellendus vitae nostrum sequi eius at, amet a reprehenderit doloribus tempore? Vel soluta mollitia explicabo nihil commodi eos ut consectetur repellat.</p>
    </div>

    <div class="category-section-top">
        <h3>Pusat Kesehatan</h3>
        <div class="data category-for mb-3">
            <ul>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/diabetes.png') }}" title="Diabetes">
                        </span>
                        <span class="category">Diabetes</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/hipertensi.png') }}" title="Hipertensi">
                        </span>
                        <span class="category">Hipertensi</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kanker.png') }}" title="Kanker">
                        </span>
                        <span class="category">Kanker</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kehamilan.png') }}" title="Kehamilan">
                        </span>
                        <span class="category">Kehamilan</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/mata.png') }}" title="Mata">
                        </span>
                        <span class="category">Mata</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/pencernaan.png') }}" title="Pencernaan">
                        </span>
                        <span class="category">Pencernaan</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/alergi.png') }}" title="Alergi">
                        </span>
                        <span class="category">Alergi</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="data category-for mb-3">
            <ul>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/bayi & balita.png') }}" title="Bayi & Balita">
                        </span>
                        <span class="category">Bayi & Balita</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kardiovaskular.png') }}" title="Kardiovaskular">
                        </span>
                        <span class="category">Kardiovaskular</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kecantikan.png') }}" title="Kecantikan">
                        </span>
                        <span class="category">Kecantikan</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mental.png') }}" title="Kesehatan Mental">
                        </span>
                        <span class="category">Kesehatan Mental</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mulut.png') }}" title="Kesehatan Mulut">
                        </span>
                        <span class="category">Kesehatan Mulut</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/male.png') }}" title="Kesehatan Pria">
                        </span>
                        <span class="category">Kesehatan Pria</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/female.png') }}" title="Kesehatan Wanita">
                        </span>
                        <span class="category">Kesehatan Wanita</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="data category-for mb-3">
            <ul>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kulit.png') }}" title="Kulit">
                        </span>
                        <span class="category">Kulit</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/nutrisi.png') }}" title="Nutrisi">
                        </span>
                        <span class="category">Nutrisi</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/olahraga.png') }}" title="Olahraga">
                        </span>
                        <span class="category">Olahraga</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mental.png') }}" title="Kesehatan Mental">
                        </span>
                        <span class="category">Kesehatan Mental</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/kesehatan mulut.png') }}" title="Kesehatan Mulut">
                        </span>
                        <span class="category">Kesehatan Mulut</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/male.png') }}" title="Kesehatan Pria">
                        </span>
                        <span class="category">Kesehatan Pria</span>
                    </a>
                </li>
                <li class="leaf">
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('assets/Frontend/img/female.png') }}" title="Kesehatan Wanita">
                        </span>
                        <span class="category">Kesehatan Wanita</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>