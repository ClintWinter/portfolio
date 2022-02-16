<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Web\LibraryController;
use App\Http\Controllers\Web\LanguageController;
use App\Http\Controllers\Admin\PublishedPostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\ResourceController;

/*
| -----------------------
| HOME
| -----------------------
*/
Route::get('/', function () {
    $latestPosts = Post::latest('published_at')->take(5)->whereNotNull('published_at')->get();

    return view('index', compact('latestPosts'));
})->name('home');

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
Route::resource('posts', PostController::class)->only('index', 'show');

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
Route::get('/library', LibraryController::class)->name('library');

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
});

Route::prefix('admin')->as('admin.')->group(function () {

    Route::middleware('is_admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        /*
        | -----------------------
        | POSTS
        | -----------------------
        */
        Route::resource('posts', AdminPostController::class)
            ->except('show', 'destroy');

        Route::post('published-posts/{post}', [PublishedPostController::class, 'store'])
            ->name('published-posts.store');
        Route::delete('published-posts/{post}', [PublishedPostController::class, 'destroy'])
            ->name('published-posts.destroy');

        // Route::prefix('posts')->group(function () {
        //     Route::get('/', [AdminPostController::class, 'index']);
        //     Route::post('/', [AdminPostController::class, 'store']);

        //     Route::post('/{slug}/publish', [AdminPostController::class, 'publish']);
        //     Route::get('/{slug}', [AdminPostController::class, 'show']);
        //     Route::post('/{slug}', [AdminPostController::class, 'update']);
        // });

        /*
        | -----------------------
        | RESOURCES
        | -----------------------
        */
        Route::resource('resources', ResourceController::class)->except('create', 'show');

        /*
        | -----------------------
        | LANGUAGES
        | -----------------------
        */
        Route::resource('languages', LanguageController::class)->only('index', 'store');
    });
});
