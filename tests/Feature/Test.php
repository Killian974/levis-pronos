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
    public function testAccueil()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function getWhoWeAre()
    {
        $response = $this->get('/qui-sommes-nous');
        $response->assertStatus(200);
    }

    public function getPronostics()
    {
        $response = $this->get('/pronostiques');
        $response->assertStatus(200);
    }

    public function getContact()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }


}
