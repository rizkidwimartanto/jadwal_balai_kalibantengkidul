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
    <title>Reset Password</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
        <div class="row shadow-lg p-4 bg-white rounded justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3 class="text-center">Reset Password</h3>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{$token}}">
                <input type="hidden" name="email" value="{{request('email')}}">
                <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required>
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            </form>
        </div>
    </div>
</body>

</html>
