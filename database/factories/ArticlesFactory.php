<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(\App\Models\Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'url_img_article' => $faker->imageUrl(),
        'content' => $faker->paragraph(100),
        'author' => 'Admin',
        'category' => 'test',
        'created_date' => \Carbon\Carbon::now()
    ];
});
