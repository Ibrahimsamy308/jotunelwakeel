<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('home',function(){
    return view('ProjectFiles.LandingPage');
})->name('home');

Route::get('newprofile',function(){
    return view('profile.show');
})->name('newprofile');


Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
 })->name('logout');
