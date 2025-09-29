<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function show($post)
    {
        return view('postnezet',
        [
            'postcim' => $post,
            'posthossza' => Post::getLength($post)
        ]);
    }
}
