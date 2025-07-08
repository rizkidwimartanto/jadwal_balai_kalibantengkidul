<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="{{ asset('img/town-hall.png') }}" type="image/png">
    <title>Dashboard</title>
    <style>
        /* Sembunyikan sidebar di layar kecil */
        @media (max-width: 600px) {
            #sidebar {
                display: none;
                position: absolute;
                z-index: 1000;
                background-color: #dc3545;
                color: white;
                width: 200px;
                height: 100vh;
                top: 0;
                left: 0;
                padding: 20px;
            }

            #toggleSidebarBtn {
                display: block;
            }
        }

        /* Default: tampilkan sidebar di layar besar */
        #toggleSidebarBtn {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Tombol Toggle -->
    <button class="btn btn-danger m-2" id="toggleSidebarBtn"><i class="fa-solid fa-bars"></i> Menu</button>
    <div class="d-flex">
        <div class="bg-danger text-white p-3" id="sidebar" style="width: 200px; min-height: 100vh;">
            <h5>Balai Kelurahan Kalibanteng Kidul</h5>
            <a href="#" class="d-block text-white pt-4 text-decoration-none">Home</a>
            <a href="#" class="d-block text-white pt-4 text-decoration-none">Profil</a>
            <a href="#" class="d-block text-white pt-4 text-decoration-none">Layanan</a>
            <a href="#" class="d-block text-white pt-4 text-decoration-none">Kontak</a>
        </div>
        <div class="flex-grow-1 p-4">
            <p>Konten utama di sini...</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#toggleSidebarBtn').click(function() {
                $('#sidebar').toggle();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
