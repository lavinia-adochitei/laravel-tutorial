<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index($slug)
    {
//        $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();
        return json_encode($post);
    }
}
