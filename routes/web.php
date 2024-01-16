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

Route::get('/register', function () {
    return view('registration');
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

Route::get('/feeparticipantslist', function () {
    return view('feeparticipantslist');
});

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});

Route::get('/freeparticipantslist', function () {
    return view('freeparticipantslist');
});

Route::get('/freeparticipantslist',[freeparticipantsController::class,'index']);

Route::resource('addfreeparticipant', freeparticipantsController::class);

Route::get('/feeparticipantslist',[feeparticipantsController::class,'index']);

Route::resource('addfeeparticipant', feeparticipantsController::class);
