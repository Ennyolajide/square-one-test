<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $order = $request->sort;

        if ($request->has('sort') && $request->sort === 'oldest') {
            $posts = Post::orderBy('publication_date', 'asc')->get();
        } else {
            $posts = Post::latest('publication_date')->get();
        }

        return view('index',compact('posts','order'));
    }

    public function show(Post $post){

        return view('post',compact('post'));
    }
}
