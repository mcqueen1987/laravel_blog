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
     * test table Blog table
     * @return void
     */
    public function testBlog()
    {
        $blog = new Blog([
            'title' => "Tesla", 
            'content' => "Aritcle Continent", 
            'author' => "Hello Mr Xu"
        ]);
        $this->assertEquals('Tesla', $blog->title);
        $blogTest = new Blog([
            'title' => "www", 
        ]);
        $this->assertEquals('www', $blogTest->title);
    }

    /**
     * test table User APi
     * @return void
     */
    public function testUser()
    {
        $user = new User([
        'name' => "Tesla", 
        'email' => "test@gmail.com", 
        'password' => "Hello Mr Xu",
    	]);
        $this->assertEquals('Hello Mr Xu', $user->password);
    }

}
