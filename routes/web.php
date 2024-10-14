<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::post('/home', function(){
    return "hello world";
});

Route::view('/home/new', 'post.new');
