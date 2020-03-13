<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
           'admin' => true,
            'name' => 'Admin'.uniqid(),
            'email' => 'admin.'.uniqid().'@gmail.com',
            'password' => bcrypt('testtest'),
            'created_at' => now(),
        ]);
    }
}
