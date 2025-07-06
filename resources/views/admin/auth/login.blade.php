<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/town-hall.png') }}" type="image/png">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background: linear-gradient(135deg, #f0f8ff, #bff0bf);
        }

        .btn-light {
            border: 1px solid black
        }
    </style>
    <title>Login</title>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
        <div class="row shadow-lg p-4 bg-white rounded">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('img/keyboard.jpg') }}" width="100%" height="100%" alt="Keyboard">
            </div>
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('balai-kelurahan.proses_login') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-4">Login</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('password.request') }}">Lupa password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="mb-2 mt-2">
                        <p>Belum punya akun? <a href="{{ route('balai-kelurahan.register') }}"> Daftar disini</a></p>
                    </div>
                    <a href="{{ route('google.login') }}" class="btn btn-light w-100">
                        <img src="{{ asset('img/google.png') }}" width="5%" alt=""> Masuk dengan Google
                    </a>
                    <button type="button" class="btn btn-light w-100 mt-3"><img src="{{ asset('img/facebook.png') }}"
                            width="5%" alt=""> Masuk dengan Facebook</button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>
