<?php

use Illuminate\Support\Facades\Route;

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

/**Route::get('/', function () {
    return view('homepage');
});
*/

Route::get('/', function () {
    return view('Login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/formcommittee', function () {
    return view('formcommittee');
});

Route::get('/events', function () {
    return view('eventdetails');
});

Route::get('/formparticipantfee', function () {
    return view('formparticipantfee');
});

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});
