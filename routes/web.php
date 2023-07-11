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

    $hw = "Hello, World!!";
    return view('home', compact("hw"));
});

Route::get('about-us', function () {

    $au = "About Us";
    return view('about-us', compact("au"));
});

Route::get('shop', function () {

    $sh = "Shop";
    return view('shop', compact("sh"));
});
