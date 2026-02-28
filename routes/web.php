<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome', [
//     'greeting' => 'Welcome',
//     'name' => request ('name' ,' Prince' ) //query string
// ]);  

// //
// Route::get('/', function (){
//     return view('welcome', [
//       'task' => [
//         'Go to the morining walk',
//          'Go to the gym',
//           'Eat healthy food',
        
//       ] ,
        
//     ]);
// });  
// // Route::view('/', 'welcome');      // Home page
// Route::view('/about', 'about');   // About page
// Route::view('/contact', 'contact'); // Contact page

   // Home page<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file defines the main routes for the application.
|
*/

/**
 * Home page: Display all ideas stored in session
 */
Route::get('/', function () {
    // Get ideas from session or return empty array if none
    $ideas = session()->get('ideas', []);

    // Pass ideas to the view
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

/**
 * Store a new idea in session
 */
Route::post('/ideas', function () {
    $idea = request('idea'); // Get the idea from the request

    if ($idea) {
        session()->push('ideas', $idea); // Add idea to session array
    }

    return redirect('/'); // Redirect back to home page
});

/**
 * Delete all ideas from session
 */
Route::get('/delete-ideas', function () {
    session()->forget('ideas'); // Remove 'ideas' from session

    return redirect('/'); // Redirect back to home page
});