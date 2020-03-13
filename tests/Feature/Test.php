<?php

namespace Tests\Feature;

use App\Models\Articles;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $article = factory(Articles::class)->create();
        $response->assertStatus(200);
    }
}
