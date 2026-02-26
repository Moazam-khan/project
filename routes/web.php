<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Welcome',
    'name' => request ('name' ,' Prince' ) //query string
]);  
// Route::view('/', 'welcome');      // Home page
Route::view('/about', 'about');   // About page
Route::view('/contact', 'contact'); // Contact page

   // Home page