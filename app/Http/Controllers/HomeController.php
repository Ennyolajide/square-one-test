<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('publication_date', 'desc')->paginate(50);

        return view('index',compact('posts'));
    }

    public function show(Post $post){

        return view('post',compact('post'));
    }
}
