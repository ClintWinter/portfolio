<?php

use App\Services\Github;

Route::get('/', function (Github $github) {
    $repos = json_decode($github->get('repos'));

    usort($repos, function ($a, $b) {
        return $b->watchers > $a->watchers;
    });

    return view('welcome', compact('repos'));
});

Route::get('/startpage', function () {
    return view('startpage');
});
