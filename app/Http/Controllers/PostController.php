<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    public function posts(){
        return view('post/index');
    }
    public function post($id){
        return view('post/articles/'.$id);
    }
}
