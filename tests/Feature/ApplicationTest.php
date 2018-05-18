<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function ApplicationBasicTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
}
