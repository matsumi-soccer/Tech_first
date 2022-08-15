<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostContoller extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getByLimit()]);  
    }
}
?>