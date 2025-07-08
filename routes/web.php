<?php

use App\Http\Controllers\BalaiKelurahanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\SocialiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BalaiKelurahanController::class)->group(function () {
    Route::get('/', 'index')->name('balai-kelurahan.index');
    Route::get('/balai-kelurahan/dashboard', 'dashboard')->name('balai-kelurahan.dashboard')->middleware('auth');
    Route::get('/balai-kelurahan/create', 'create')->name('balai-kelurahan.create');
    Route::get('/balai-kelurahan/{id}/edit', 'edit')->name('balai-kelurahan.edit');
    Route::put('/balai-kelurahan/{id}', 'update')->name('balai-kelurahan.update');
    Route::delete('/balai-kelurahan/{id}', 'destroy')->name('balai-kelurahan.destroy');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/balai-kelurahan/login', 'login')->name('balai-kelurahan.login');
    Route::get('/balai-kelurahan/register', 'register')->name('balai-kelurahan.register');
    Route::post('/balai-kelurahan/proses_login', 'proses_login')->name('balai-kelurahan.proses_login');
    Route::post('/balai-kelurahan/store', 'store')->name('balai-kelurahan.store');
    Route::post('/balai-kelurahan/logout', 'logout')->name('balai-kelurahan.logout');
});
// Tampilkan halaman "verifikasi email dikirim"
Route::get('/email/verify', function () {
    return view('admin.auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Tangani klik dari link email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('balai-kelurahan.login');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Kirim ulang link verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link verifikasi telah dikirim ke email Anda.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// ==============================
// ✅ Halaman Terproteksi (hanya jika sudah verifikasi)
// ==============================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/forgot-password', function () {
    return view('admin.auth.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', function ($token) {
    return view('admin.auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'password' => 'required|min:5|confirmed',
    ], [
        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password minimal 5 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak sesuai.',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => bcrypt($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('balai-kelurahan.login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('/balai-kelurahan/login/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/balai-kelurahan/login/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
Route::get('/auth/facebook', [SocialiteController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/auth/facebook/callback', [SocialiteController::class, 'handleFacebookCallback']);