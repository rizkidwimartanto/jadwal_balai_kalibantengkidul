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

        .show_password {
            position: relative;
            top: 4px;
            z-index: 99999;
        }
    </style>
    <title>Registrasi Akun</title>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
        <div class="shadow-lg p-4 bg-white rounded m-4">
            <form action="">
                <h3 class="text-center mb-4">Registrasi Akun</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="no_handphone" class="form-label">No Handphone <span class="text-danger">*</span></label>
                    <input type="text" inputmode="numeric" class="form-control" id="no_handphone" name="no_handphone" required pattern="[0-9]{10,15}" title="Masukkan nomor handphone yang valid (10-15 digit)">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <input type="checkbox" name="check_password" id="check_password" class="form-check-input mt-2">
                    <span class="show_password">Show Password</span>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password_confirmation" name="password" required>
                    <input type="checkbox" name="check_password_confirmation" id="check_password_confirmation" class="form-check-input mt-2">
                    <span class="show_password">Show Password</span>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
                <div class="mb-2 mt-2">
                    <p>Sudah punya akun? silahkan <a href="{{ route('balai-kelurahan.login') }}"> login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    function togglePassword(checkID, inputId){
        const checkbox = document.getElementById(checkID);
        const input = document.getElementById(inputId);

        checkbox.addEventListener('change', function(){
            input.type = this.checked ? 'text' : 'password';
        })
    }
    togglePassword('check_password', 'password');
    togglePassword('check_password_confirmation', 'password_confirmation');
</script>
<script>
    const noHp = document.getElementById('no_handphone');

    noHp.addEventListener('input', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
    })
</script>

</html>
