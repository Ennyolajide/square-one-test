<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\WithFaker;
use Database\Seeders\SystemDesignatedAdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class BlogPostImportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase,DatabaseMigrations;

    public function test_fetch_blog_posts_command()
    {
        $this->seed(SystemDesignatedAdminSeeder::class);
        $this->artisan('blogpost:fetch')->assertExitCode(0);
    }

}
