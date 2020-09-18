<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($post)
    {
        $posts = [
            'first-post' => 'Hello! This is my first post',
            'second-post' => 'This is my second post'
        ];

        if (!array_key_exists($post, $posts))
        {
            abort(404);
        }

        return $posts[$post];
    }
}
