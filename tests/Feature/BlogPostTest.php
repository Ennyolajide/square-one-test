<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Contracts\Auth\Authenticatable;
use Tests\TestCase;

use App\Models\User;
use App\Models\Post;


class BlogPostTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_any_user_can_read_all_posts()
    {
        $post = Post::factory()->create();

        $this->get('/')->assertSee($post->title);
    }

    // public function test_any_user_can_sort_posts_by_publication_date()
    // {
    //     $posts = Post::factory()->create(10);

    //     $this->get('/')->assertSee($post->title);
    // }

    public function test_any_user_can_view_a_single_post()
    {
        $post = Post::factory()->create();

        $this->get('/post/'.$post->id)->assertSee($post->title)->assertSee($post->description);
    }
    
    public function test_logged_in_user_can_create_post()
    {
        //generate blog post data
        $data = Post::factory()->make();
        $this->actingAs(User::factory()->create());
        //user submit post request to create a post 
        $response = $this->post('/dashboard/post/create',$data->toArray());
        //check if Post was created 
        $this->assertEquals($data->title,Post::latest()->first()->title);
    }

    public function test_unauthenticated_user_cannot_create_a_new_post()
    {
        //generate blog post data
        $post = (array) Post::factory()->make();
        //When unauthenticated user should redirect to Login
        $this->post('/dashboard/post/create',$post)->assertRedirect('/login');
    }

    public function test_title_is_required_to_create_a_post(){

        $this->actingAs(User::factory()->create());
    
        $post = Post::factory()->make(['title' => null])->toArray();

        $this->post('/dashboard/post/create',$post)->assertInvalid(['title']);
    }
    
    public function test_description_is_required_to_create_a_post(){

        $this->actingAs(User::factory()->create());
    
        $post = Post::factory()->make(['description' => null])->toArray();

        $this->post('/dashboard/post/create',$post)->assertInvalid(['description']);
    }
}
