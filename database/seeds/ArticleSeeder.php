<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => Str::random(30),
            'content' => Str::random(500),
            'category' => 'Test',
            'author' => 'Admin',
            'created_date' => \Carbon\Carbon::now()
        ]);
    }
}
