<?php

use App\Resource;

Route::get('/', function() {
    return redirect('/portfolio');
});

Route::get('/portfolio', function() {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/text-helper', function() {
    return view('helper');
});

Route::get('/library', function() {
    return Resource::first()->languages;
});

// Admin Panel
Route::prefix('admin')->group(function() {

    // Admin Auth
    Auth::routes(['register' => false, 'reset' => false, 'password.request' => false]);

    // Authenticated Admin Panel
    Route::middleware('is_admin')->group(function() {

        Route::get('/', 'AdminController@index');

        // blog posts
        Route::prefix('blogposts')->group(function() {

            // Route::post('/new', 'BlogPostController@create');
            Route::get('/', 'BlogPostController@index');
            Route::post('/', 'BlogPostController@store');

            Route::post('/{slug}/publish', 'BlogPostController@publish');
            Route::get('/{slug}', 'BlogPostController@show');
            Route::post('/{slug}', 'BlogPostController@update');

        });

        Route::prefix('resources')->group(function() {

            Route::get('/', 'ResourceController@index');
            Route::post('/', 'ResourceController@store');
            Route::post('/{id}', 'ResourceController@update');
            Route::delete('/{id}', 'ResourceController@destroy');

        });

        Route::prefix('languages')->group(function() {

            Route::get('/', 'LanguageController@index');
            Route::post('/', 'LanguageController@store');

        });

    });



});


Route::group(['prefix' => 'admin'], function() {

});