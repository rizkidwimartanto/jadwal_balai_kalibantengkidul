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
        }
    </style>
    <title>Lupa Password</title>
</head>

<body class="d-flex align-items-center center justify-content-center min-vh-100">
    <div class="container">
        <div class="row shadow-lg p-4 bg-white rounded justify-content-center">
            @if (session('status'))
                <div class="alert alert-success">
                    Reset password telah dikirim ke email anda.
                </div>
            @endif
            <h3 class="text-center">Lupa Password</h3>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim Link Reset Password</button>
            </form>
        </div>
    </div>
</body>

</html>
