<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

    Route::get('/home', function() {
        return view('home');
    })->name('home')->middleware('auth');

    Auth::routes();

    Route::post('/logout', function (Request $request) {
        Auth::logout();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
