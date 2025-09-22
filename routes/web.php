<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>hello world!</h1><br>Üdv!";
});

Route::get('/valami', function () {
    return view('valami');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tomb-visszaad', function () {
    return ["kulcs" => "ertek"];
});
