<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');


Route::resource('events', EventController::class);