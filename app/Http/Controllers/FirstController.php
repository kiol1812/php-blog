<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    private $allowedPath = ['welcome'];
    public function index($path='welcome') {
        if(in_array($path, $this->allowedPath)) return view($path);
        else return "page didn't exit";
    }
}
