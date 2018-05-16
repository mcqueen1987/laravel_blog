
<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerTest extends TestCase
{

    public function HomeControllerWelcomeTest()
    {
    	$response = $this->action('GET', 'HomeController@welcome');
    	$this->assertEquals("ANIMAL BLOG", $response);
    }

    public function HomeControllerIndexTest()
    {
    	$response = $this->action('GET', 'HomeController@index');
    	$this->assertEquals("ANIMAL BLOG", $response);
    }


}
