<?php

use Illuminate\Support\Facades\Route;

Route::get('/{path?}', function ($path='welcome') { // add ? mean can use url without $path
    $allowedPath = ['welcome'];
    if(in_array($path, $allowedPath)) return view($path);
    else return "page didn't exit";
});

/*
 * "str" v.s. 'str'
 * $var=5
 * "$var" -> 5
 * '$var' -> $var
 */

Route::prefix('father')->group(function () {
    Route::get('/{path?}', function ($path='son1') { // /father/{path?}
        $allowedPath = ['son1', 'son2'];
        if(in_array($path, $allowedPath)) return view('father_'.$path);
        else return "page didn't exit";
    });
});

Route::get('/name/{name?}', function ($name="test") {
    return 'hello, '.$name; // . in this case is like +
});

