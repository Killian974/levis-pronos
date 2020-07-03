<?php

namespace Tests\Feature;

use App\Http\Controllers\Auth\RegisterController;
use Carbon\Carbon;
use Faker\Guesser\Name;
use Faker\Provider\Address;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testRegister(){
        $data = array([
            'name' => 'test',
            'admin' => false,
            'email' => 'email@gmail.com',
            'password' => bcrypt('testtest'),
            'date_created' => Carbon::now()
        ]);
        $response = $this->post('/register', $data);
    }

    public function getRegister()
    {
        $response = $this->get('/register');
        $response->assertViewIs('auth.register');
        $response->assertStatus(302);
    }

    public function getLogin()
    {
        $response = $this->get('/login');
        $response->assertViewIs('auth.login');
        $response->assertStatus(404);
    }

    public function getHome()
    {
        $response = $this->get('/home');
        $response->assertViewIs('home');
        $response->assertStatus(500);
    }

    public function testAccueil()
    {
        $response = $this->get('/');
        $response->assertViewIs('index');
        $response->assertStatus(302);
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function getWhoWeAre()
    {
        $response = $this->get('/qui-sommes-nous');
        $response->assertViewIs('presentation');
        $response->assertStatus(404);
    }

    public function getPrognotics()
    {
        $response = $this->get('/pronostiques');
        $response->assertViewIs('prognotics');
        $response->assertStatus(200);
    }

    public function getContact()
    {
        $response = $this->get('/contact');
        $response->assertViewIs('contact');
        $response->assertStatus(200);
    }
}
