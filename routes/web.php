<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $title = "title from fun";
    $text = "text from fun";
    return view('index', [
        'title' => $title,
        'text' => $text,
    ]);
});
