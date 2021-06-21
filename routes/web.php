<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'films' => [
            'Luca',
            'Soul',
            'Toy Story'
        ]
    ];
    return view('home',$data);
});

Route::get('/film', function () {
    //return view('welcome');
    return "Qui ci stanno i film";
});

Route::get('/serie', function () {
    //return view('welcome');
    return "Qui ci stanno le serie";
});

Route::get('/originals', function () {
    //return view('welcome');
    return "Qui ci stanno gli originals";
});

Route::get('/account', function () {
    //return view('welcome');
    return "Qui ci sono le tue impostazioni personali";
});
