<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BlogPostRequest;


class PostController extends Controller
{
    public function create(BlogPostRequest $request){
        $status = Post::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'description'  => $request->description
        ]);
        return back()->withStatus($status);
    }
}
