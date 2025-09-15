<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "hello world!";
});

Route::get('/valami', function () {
    return view('valami');
});