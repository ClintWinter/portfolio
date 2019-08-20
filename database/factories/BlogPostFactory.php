<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\BlogPost::class, function (Faker $faker) {
    $published = $faker->boolean(50);
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'cover_img_url' => $faker->url,
        'published' => $published,
        'published_at' => $published ? Carbon::now() : null
    ];
});
