<?php

Route::get('/', function() {
    return redirect('/portfolio');
});

Route::get('/portfolio', function () {
    return view('welcome');
});

Route::get('/startpage', function () {
    return view('startpage');
});
