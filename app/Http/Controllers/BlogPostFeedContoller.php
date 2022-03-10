<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class BlogPostFeedContoller extends Controller
{
    //

    public function fetchBlogPosts(){
        try {
            return Http::get(config('services.blog_feed.url'))->throw()->json();
        } catch (\Exception $e) {
            Log::critical('Blog posts fetch failed! '.$e->getMessage());
            // Maybe mail administrator
        }
    }

    public function insertPosts($data){
        try {
            DB::transaction(function() use($data) {
                $admin = $this->getSystemCreateAdminUser();
                foreach ($data as $key => $value) {
                    $admin->posts()->create($value);
                }
            });
        } catch (\Exception $e) {
            Log::critical('Post Insertion failed! '.$e->getMessage());
            // Maybe mail administrator
        }
    }

    public function getSystemCreateAdminUser(){
        return User::whereName('admin')->where('is_admin', 1)->first();
    }


    public function importBlogPosts(){
        $this->insertPosts($this->fetchBlogPosts()['data']);
    }
}
