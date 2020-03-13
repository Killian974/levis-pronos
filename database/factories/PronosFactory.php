<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Pronos::class, function (Faker $faker) {
    $team_1 = $faker->city;
    $team_2 = $faker->city ;

    return [
        'sport' => $faker->randomElement(['Football','Basket']),
        'date_match' =>  $faker->unique()->dateTimeBetween(now(), '+15 days'),
        'status' => '0',
        'team_1' => $team_1,
        'team_2' => $team_2,
        'prono' => $faker->randomElement([$team_1,$team_2]),
        'cote' => $faker->randomFloat(2, 1.15, 4.10),
        'create_at' => \Carbon\Carbon::now()
    ];
});
