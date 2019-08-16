<?php

Route::get('/', function() {
    return redirect('/portfolio');
});

Route::get('/portfolio', function() {
    return view('portfolio');
});

// Admin Panel
Route::prefix('admin')->group(function() {

    // Admin Auth
    Auth::routes(['register' => false, 'reset' => false, 'password.request' => false]);

    // Authenticated Admin Panel
    Route::middleware('is_admin')->group(function() {
    // Route::group([], function() {

        Route::get('/', 'AdminController@index');

    });

    Route::prefix('blogpost')->group(function() {

        // Route::post('/new', 'BlogPostController@create');
        Route::post('/', 'BlogPostController@store');

    });
    
});


Route::group(['prefix' => 'admin'], function() {
    
});