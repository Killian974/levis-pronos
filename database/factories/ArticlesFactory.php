<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(\App\Models\Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'content' => $faker->paragraph,
        'author' => 'Admin',
        'category' => 'test',
        'created_date' => \Carbon\Carbon::now()
    ];
});
