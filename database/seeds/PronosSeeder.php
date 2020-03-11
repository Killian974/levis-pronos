<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Integer;

class PronosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $team_1 = $faker->city;
        $team_2 = $faker->city ;
         DB::table('pronos')->insert([
             'sport' => $faker->randomElement(['foot','basket']),
             'date_match' =>  $faker->unique()->dateTimeBetween(now(), '+15 days'),
             'status' => '0',
             'team_1' => $team_1,
             'team_2' => $team_2,
             'prono' => $faker->randomElement([$team_1,$team_2]),
             'cote' => $faker->randomFloat(2, 1.15, 4.10),
             'create_at' => \Carbon\Carbon::now()
        ]);
    }
}
