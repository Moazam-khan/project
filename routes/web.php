<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');      // Home page
Route::view('/about', 'about');   // About page
Route::view('/contact', 'contact'); // Contact page