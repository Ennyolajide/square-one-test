<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('publication_date', 'desc')->paginate(50);
        //return $posts; 
        return view('dashboard',compact('posts'));
    }

    public function show(Post $post){
        return view('dashboard-show-post',compact('post'));
    }

    public function showCreatePost(){
        return view('dashboard-create-post');
    }

    
}
