<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EventController;

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
    return view('registration');
})->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login'); //pass 'login function that has created in controller
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'registration'])->name('registration'); //pass 'register function that has created in controller
Route::post('/register', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});

Route::get('/homepage', function () {
    return view('homepage');
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

// Route::get('/createevent', function () {
//     return view('createevent');
// });

Route::get('/formparticipantfee', function () {
    return view('formparticipantfee');
});

Route::get('/formparticipantfree', function () {
    return view('formparticipantfree');
});


// Route to display the list of events
Route::get('/', [EventController::class, 'index']);

// Route to show the form for creating a new event
Route::get('/createevent', [EventController::class, 'create']);

// Route to store a newly created event
Route::post('/createevent', [EventController::class, 'store']);
