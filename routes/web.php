<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Logout route
Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    session()->destroy();

    return redirect()->intended('/login');
})->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/')->name('home');
    Route::get('/user')->name('user'); // Is kinda equal to a '/profile' route
    Route::get('/user/{user}'); // This route retrieves another user's info (for example, username, avatar, banner, etc)
    Route::post('/user/create');
    Route::put('/user/{user}/update');
    Route::delete('/user/{user}/delete');
    Route::get('/user/{user}/direct-messages');
    Route::post('/user/{user}/direct-messages/create');
    Route::get('/user/{user}/direct-messages/{directMessage}');
    Route::delete('/user/{user}/direct-messages/{directMessage}/delete');
    Route::get('/user/{user}/direct-messages/{directMessage}/messages');
    Route::post('/user/{user}/direct-messages/{directMessage}/messages/create');
    Route::put('/user/{user}/direct-messages/{directMessage}/messages/{message}/update');
    Route::delete('/user/{user}/direct-messages/{directMessage}/messages/{message}/delete');
    Route::get('/user/{user}/direct-messages/{directMessage}/messages/{message}/reactions');
    Route::get('/emojis');
    Route::get('/emojis/{emoji}');
    Route::post('/emojis/create');
    Route::put('/emojis/{emoji}/update');
    Route::delete('/emojis/{emoji}/delete');
    Route::get('/emojis/{emoji}/name');
    Route::get('user/{user}/direct-messages/group/{group}/messages');
    Route::post('user/{user}/direct-messages/group/{group}/messages/create');
    Route::put('user/{user}/direct-messages/group/{group}/messages/{message}/update');
    Route::delete('user/{user}/direct-messages/group/{group}/messages/{message}/delete');
    Route::get('user/{user}/direct-messages/group/{group}/messages/{message}/reactions');
});
