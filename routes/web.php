<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/tomb-visszaad', function ()
{
    $tomb =
    [
        "kulcs" => "ertek",
    ];
    return $tomb["kulcs"];
});

Route::get('/udvozles',function ()
{
    $name="David";
    $age=20;
    $labmeret=42;
    return view("udvozollek",
    [
        "nev" => $name,
        "kor" => $age,
        "LabMeter" => $labmeret
    ]);
});

Route::get('/bevesarlolista', function ()
{
    $lista =
    [
        "tejfol","tej","liszt","csoki","chips"
    ];

    return view ("sajatBevasarloLista",
    ["bevasarlolista" => $lista]);

});

Route::get('/userdata', function ()
{
    return view("userInput",
    [
        "input"=> request("felhasznalonev"),
        "vnev"=>request("vezeteknev"),
        "knev"=>request("keresztnev")
    ]);
});

Route::get('/posts/{post}', function ($post) {

    //szimuláljuk az adatbázisunkat:
    $posts = [
        'first' => 'Első blogbejegyzés tartalma',
        'second' => 'Második blogbejegyzés tartalma',
        'third' => 'Harmadik blogbejegyzés tartalma',
    ];

 return view(
    'postnezet',
    [
        'postTartalma' => $posts[$post] ?? "Nincs ilyen blogbejegyzés"
    ]
 );
});


Route::get('/vezerlo/{post}', [
    PostController::class,
    'show',
]);
