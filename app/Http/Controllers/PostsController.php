<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index($slug)
    {
        $post = DB::table('posts')->where('slug', $slug)->first();
        return json_encode($post);
    }
}
