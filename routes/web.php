<?php

Route::get('/', function() {
    return view('index');
});

Route::get('/projects', function() {
    return view('portfolio');
})->name('projects');

Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/{slug}', 'ArticleController@show')->name('article.show');

Route::get('/text-helper', function() {
    return view('helper');
});

Route::get('/uses', function() {
    return view('uses');
})->name('uses');

Route::get('/library', function() {
    return view('library.index');
})->name('library');

Route::get('/resources', 'ResourceController@index');
Route::get('/languages', 'LanguageController@index');

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
