<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $order = $request->sort;

        if ($request->has('sort') && $request->sort === 'oldest') {
            $posts = Post::where('user_id', Auth::user()->id)->orderBy('publication_date', 'asc')->get();
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->orderBy('publication_date', 'desc')->get();
        }
        //return $posts; 
        return view('dashboard',compact('posts','order'));
    }

    public function show(Post $post){
        return view('dashboard-show-post',compact('post'));
    }

    public function showCreatePost(){
        return view('dashboard-create-post');
    }

    
}
