<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ForgetPasswordManager;

Route::get('/', function () {
    if (session()->has('loginId')) {
        return app()->call('App\Http\Controllers\EventController@index');
    } else {
        return view('registration');
    }
})->name('home');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('registration');
Route::post('/register', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/change-password', [AuthManager::class, 'changePassword'])->name('changePassword');
Route::post('/change-password', [AuthManager::class, 'changePassword'])->name('changePassword');

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile', [AuthManager::class, 'showProfile'])->name('profile');

Route::get('/formcommittee', function () {
    return view('formcommittee');
});

Route::get('/formparticipantfee', function () {
    return view('formparticipantfee');
});

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});

Route::get('/homepage', [EventController::class, 'index']);
Route::get('/createevent', [EventController::class, 'create']);
Route::post('/createevent', [EventController::class, 'store']);

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/forget-password', [ForgetPasswordManager::class, "forgetPassword"])->name("forget.password");
Route::post('/forget-password', [ForgetPasswordManager::class, "forgetPassword"])->name("forget.password.post");

Route::get("/reset-password/{token}", [ForgetPasswordManager::class, "resetPassword"])->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManager::class, "resetPasswordPost"])->name("reset.password.post");
