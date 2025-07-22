<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $test = "hello1";
    $test2 = "hello2";

    return view('index',[
        't'=> "Hello, Suleiman",
        't2'=> $test2,
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});
