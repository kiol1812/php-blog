<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function posts(){
//        $post = new Post();
        $posts = Post::all();
        $data = [
            'posts' => $posts
        ];
        return view('post/index', $data);
    }
    public function post($id){
        return view('post/articles/'.$id);
    }
}
