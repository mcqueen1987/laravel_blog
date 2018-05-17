<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Blog;

class ControllerTest extends TestCase
{
   
    /**
     * test 
     *
     * @return void
     */
    public function HomeControllerIndexTest()
    {
    	$response = $this->action('GET', 'HomeController@index');
    	$this->assertEquals("ANIMAL BLOG", $response);
    }

    
    public function loginApiTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    

}
