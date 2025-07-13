<!DOCTYPE html>
<html lang="en">

<head>
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

    <title>Balai Desa Kalibanteng Kidul</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Balai Desa Kalibanteng Kidul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak Kami</a>
                    </li>
                </ul>
                <a class="btn btn-outline-success" href="{{ route('balai-kelurahan.login') }}">Login</a>
            </div>
        </div>
    </nav>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="img-carousel" src="{{ asset('img/rapat.jpg') }}" class="d-block w-100" alt="Rapat">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Rapat</h3>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img id="img-carousel" src="{{ asset('img/badminton.jpg') }}" class="d-block w-100" alt="Olahraga">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Olahraga</h3>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img id="img-carousel" src="{{ asset('img/children.jpg') }}" class="d-block w-100"
                    alt="Kegiatan Sosial">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Kegiatan Sosial</h3>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section>
        <div id="about">
            <div class="container mt-5 mb-4">
                <h2 class="text-center">Tentang Kami</h2>
                <div class="row row_about justify-content-center">
                    <div class="card card_about p-2 m-4 shadow-lg" data-aos="fade-up" data-aos-duration="1500"
                        style="width: 20rem;">
                        <img src="{{ asset('img/info lengkap.jpg') }}" class="card-img-top" alt="Info Lengkap">
                        <div class="card-body">
                            <h5 class="card-title">Info Lengkap</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the
                                card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card card_about p-2 m-4 shadow-lg" data-aos="fade-up" data-aos-duration="1500"
                        style="width: 20rem;">
                        <img src="{{ asset('img/sejarah.jpg') }}" class="card-img-top" alt="Sejarah">
                        <div class="card-body">
                            <h5 class="card-title">Sejarah</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the
                                card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card card_about p-2 m-4 shadow-lg" data-aos="fade-up" data-aos-duration="1500"
                        style="width: 20rem;">
                        <img src="{{ asset('img/kegiatan.jpg') }}" class="card-img-top" alt="Kegiatan">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the
                                card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="schedule">
            <div class="container mt-4 mb-4">
                <h2 class="text-center">Jadwal Kegiatan</h2>
                <a href="{{ route('balai-kelurahan.login') }}" class="btn btn-success w-100 mb-3">Booking Jadwal
                    Sekarang</a>
                <table class="table table-striped table-bordered" data-aos="fade-right" data-aos-duration="2000">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Waktu Kegiatan</th>
                            <th>Penanggung Jawab</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_kegiatan as $kegiatan)
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $kegiatan->nama_kegiatan }}</td>
                                <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->translatedFormat('d F Y') }}
                                </td>
                                <td>{{ $kegiatan->waktu_kegiatan }}</td>
                                <td>{{ $kegiatan->penanggung_jawab }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="contact">
            <div class="container mt-4 mb-4">
                <h2 class="text-center">Kontak Kami</h2>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white p-3 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p>Follow us on:
                        <a href="#" style="font-size: 1.5rem; margin: 0 7px" class="text-white"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#" style="font-size: 1.5rem; margin: 0 7px" class="text-white"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#" style="font-size: 1.5rem; margin: 0 7px" class="text-white"><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </p>
                </div>
                <div class="col-6">
                    <p>&copy; 2025 Balai Desa Kalibanteng Kidul. All rights reserved.</p>
                    <p>Designed by <a href="#" class="text-white">Rizki Dwi Martanto</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const input = document.getElementById("searchInput");
        input.addEventListener("focus", () => {
            input.placeholder = "Cari sesuatu di sini...";
        });

        input.addEventListener("blur", () => {
            input.placeholder = "Cari";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
