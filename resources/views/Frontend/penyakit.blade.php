<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        .alphabet-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .alphabet-filter a {
            margin: 5px;
            padding: 10px 15px;
            border: 1px solid #1aa6b7;
            color: #1aa6b7;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .alphabet-filter a:hover {
            background-color: #1aa6b7;
            color: #fff;
        }

        .alphabet-filter a.active {
            background-color: #1aa6b7;
            color: #fff;
            pointer-events: none;
        }

        .illness-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .illness-list-item {
            width: 45%;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .illness-list-item h4 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 700;
            color: #127681;
        }

        .illness-list-item p {
            margin-bottom: 0;
            color: #666;
        }

        @media (max-width: 767px) {
            .illness-list-item {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="title text-center">Nama Penyakit A-Z</h1>

        <div class="alphabet-filter">
            <a href="?prefix=a" class="active">A</a>
            <a href="?prefix=b">B</a>
            <a href="?prefix=c">C</a>
            <a href="?prefix=d">D</a>
            <!-- Add links for other letters -->
            <a href="?prefix=z">Z</a>
        </div>

        <div class="illness-list">
            <!-- Example illness items (repeat as needed) -->
            <div class="illness-list-item">
                <h4>Asthma</h4>
                <p>A chronic disease that affects the airways in the lungs.</p>
            </div>
            <div class="illness-list-item">
                <h4>Arthritis</h4>
                <p>Inflammation of one or more joints, causing pain and stiffness.</p>
            </div>
            <!-- Add more illness items as needed -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
