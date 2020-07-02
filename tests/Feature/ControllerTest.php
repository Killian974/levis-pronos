<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function testIndexController()
    {
        $response = $this->action('GET', 'IndexController@showView');
        $this->assertResponseOk();
    }

    public function testPresentationController()
    {
        $response = $this->action('GET', 'PresentationController@showView');
        $this->assertResponseOk();
    }

    public function testContactController()
    {
        $response = $this->action('GET', 'ContactUsController@showView');
        $this->assertResponseOk();
    }

    public function testPrognosticsController()
    {
        $response = $this->action('GET', 'PrognosticsController@showView');
        $this->assertResponseOk();
    }

    public function testBlogController()
    {
        $response = $this->action('GET', 'BlogController@showView');
        $this->assertResponseOk();
    }





}
