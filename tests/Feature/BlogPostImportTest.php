<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Controllers\BlogPostFeedContoller;

class BlogPostImportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_system_created_user_admin_exist()
    {
        $user = (new BlogPostFeedContoller())->getSystemCreateAdminUser();
        // var_dump($user);
        // //$this->assertEquals('admin',$user->name);
    }
}
