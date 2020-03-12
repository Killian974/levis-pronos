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
        $pronos = factory(\App\Models\Pronos::class,(20))->create();
    }
}
