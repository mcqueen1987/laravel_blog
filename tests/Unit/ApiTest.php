<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function loginApiTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

}
