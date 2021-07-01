<?php

use App\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ResourceController;

Route::get('/', function () {
    $latestPosts = BlogPost::latest('published_at')->take(5)->whereNotNull('published_at')->get();

    return view('index', compact('latestPosts'));
});

Route::get('/projects', function () {
    return view('portfolio');
})->name('projects');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/text-helper', function () {
    return view('helper');
});

Route::get('/uses', function () {
    return view('uses');
})->name('uses');

Route::get('/library', function () {
    return view('library.index');
})->name('library');

Route::get('/resources', [ResourceController::class, 'index']);
Route::get('/languages', [LanguageController::class, 'index']);

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false, 'reset' => false, 'password.request' => false]);

    Route::middleware('is_admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('blogposts')->group(function () {
            Route::get('/', [BlogPostController::class, 'index']);
            Route::post('/', [BlogPostController::class, 'store']);

            Route::post('/{slug}/publish', [BlogPostController::class, 'publish']);
            Route::get('/{slug}', [BlogPostController::class, 'show']);
            Route::post('/{slug}', [BlogPostController::class, 'update']);
        });

        Route::prefix('resources')->group(function () {
            Route::post('/', [ResourceController::class, 'store']);
            Route::post('/{id}', [ResourceController::class, 'update']);
            Route::delete('/{id}', [ResourceController::class, 'destroy']);
        });

        Route::prefix('languages')->group(function () {
            Route::get('/', [LanguageController::class, 'index']);
            Route::post('/', [LanguageController::class, 'store']);
        });
    });
});
