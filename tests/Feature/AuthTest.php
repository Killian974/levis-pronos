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

    public function testRegister()
    {
        $this->visit('/register')
            ->type('toto@chez.fr', 'email')
            ->type('password', 'password')
            ->type('password','password-confirm')
            ->press('Inscription')
            ->see('Dashboard');
    }

    public function testConnexion()
    {
        $this->visit('/login')
            ->type('test@test.fr', 'email')
            ->type('testtest', 'password')
            ->press('Connexion')
            ->see('Dashboard');
    }

    public function getRegister()
    {
        $response = $this->get('/register');
        $response->assertViewIs('auth.register');
        $response->assertStatus(200);
    }

    public function getLogin()
    {
        $response = $this->get('/login');
        $response->assertViewIs('auth.login');
        $response->assertStatus(200);
    }

    public function getHome()
    {
        $response = $this->get('/home');
        $response->assertViewIs('home');
        $response->assertStatus(200);
    }

    public function testAccueil()
    {
        $response = $this->get('/');
        $response->assertViewIs('index');
        $response->assertStatus(200);
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function getWhoWeAre()
    {
        $response = $this->get('/qui-sommes-nous');
        $response->assertViewIs('presentation');
        $response->assertStatus(200);
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
