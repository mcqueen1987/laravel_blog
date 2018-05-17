<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Blog;
use App\User;

class ModelTest extends TestCase
{

    /**
     * test model API
     * test Blog table APi
     * @return void
     */
    public function testBlog()
    {
        $blog = new Blog([
            'title' => "Tesla", 
            'content' => "testetste uonnio test ", 
            'author' => "xudongbo"
        ]);
        $this->assertEquals('Tesla', $blog->title);
    }

    /**
     * test model API
     * test User table APi
     * @return void
     */
    public function testUser()
    {
        $user = new User([
        'name' => "Tesla", 
        'email' => "testetste uonnio test", 
        'password' => "Mr Xu",
    	]);
        $this->assertEquals('Tesla', $user->name);
    }
}
