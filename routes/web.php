<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Web\LanguageController;
use App\Http\Controllers\Web\PostController;
use App\Http\Controllers\Web\ResourceController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
| -----------------------
| HOME
| -----------------------
*/
Route::get('/', function () {
    $latestPosts = Post::latest('published_at')->take(5)->whereNotNull('published_at')->get();

    return view('index', compact('latestPosts'));
});

/*
| -----------------------
| PROJECTS
| -----------------------
*/
Route::get('/projects', function () {
    return view('portfolio');
})->name('projects');

/*
| -----------------------
| POSTS
| -----------------------
*/
Route::resource('posts', 'Web\PostController')->only('index', 'show');

/*
| -----------------------
| USES
| -----------------------
*/
Route::get('/uses', function () {
    return view('uses');
})->name('uses');

/*
| -----------------------
| RESOURCES
| -----------------------
*/
Route::get('/library', function () {
    return view('library.index');
})->name('library');

/*
| -----------------------
| MISC
| -----------------------
*/
Route::get('/text-helper', function () {
    return view('helper');
});

/*
| -----------------------
| ADMIN
| -----------------------
*/
Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false, 'reset' => false, 'password.request' => false]);

    Route::middleware('is_admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        /*
        | -----------------------
        | POSTS
        | -----------------------
        */
        Route::prefix('posts')->group(function () {
            Route::get('/', [AdminPostController::class, 'index']);
            Route::post('/', [AdminPostController::class, 'store']);

            Route::post('/{slug}/publish', [AdminPostController::class, 'publish']);
            Route::get('/{slug}', [AdminPostController::class, 'show']);
            Route::post('/{slug}', [AdminPostController::class, 'update']);
        });

        /*
        | -----------------------
        | RESOURCES
        | -----------------------
        */
        Route::prefix('resources')->group(function () {
            Route::post('/', [ResourceController::class, 'store']);
            Route::post('/{id}', [ResourceController::class, 'update']);
            Route::delete('/{id}', [ResourceController::class, 'destroy']);
        });

        /*
        | -----------------------
        | LANGUAGES
        | -----------------------
        */
        Route::prefix('languages')->group(function () {
            Route::get('/', [LanguageController::class, 'index']);
            Route::post('/', [LanguageController::class, 'store']);
        });
    });
});
