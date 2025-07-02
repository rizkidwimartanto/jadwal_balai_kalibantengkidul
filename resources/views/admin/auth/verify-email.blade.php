<!-- resources/views/auth/verify-email.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <div class="alert alert-info p-4 rounded shadow">
            <h4 class="mb-3">Verifikasi Email</h4>
            <p>
                Terima kasih telah mendaftar! Silakan periksa email Anda dan klik link verifikasi.
            </p>

            @if (session('message'))
                <div class="alert alert-success mt-3">{{ session('message') }}</div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Kirim Ulang Email Verifikasi</button>
            </form>
        </div>
    </div>
</body>
</html>
