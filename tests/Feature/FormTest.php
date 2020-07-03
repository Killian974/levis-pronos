<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContact()
    {
        $this->visit('/contact')
            ->type('lastnameTest', 'lastname')
            ->type('firstnameTest', 'firstname')
            ->type('test-email-contact@gmail.com', 'email')
            ->type('Contact','subject')
            ->type('Contact','content')
            ->press('Envoyer votre message');
    }

    public function testNewsletter()
    {
        $this->visit('/home')
            ->type('email@test.com', 'email')
            ->press("S'inscrire");
    }
}
