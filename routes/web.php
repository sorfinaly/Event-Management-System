<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    // Check if the 'loginId' session variable exists
    if (session()->has('loginId')) {
        // User is logged in, redirect to the homepage
        return view('homepage');
    } else {
        // User is not logged in, open the registration page
        return view('registration');
    }
})->name('home');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/login', [AuthManager::class, 'login'])->name('login'); //pass 'login function that has created in controller
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'registration'])->name('registration'); //pass 'register function that has created in controller
Route::post('/register', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});

Route::get('/register', function () {
    return view('registration');
});

Route::get('/profile', function () {
    return view('profile');
});

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
