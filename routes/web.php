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
    // return view('welcome');
    return "<h1>Hello World</h1>";
});


Route::get('/date/{date1}/{date2}', function($date1, $date2) {
    return "Date1 = ". $date1. ", and Date2 = ". $date2;
});


Route::get('/user/info', function() {
    $name = 'abc';
    $email = "abc@gmail.com";
    return response()->json([
        'name' => $name,
        'email' => $email,
    ]);
});
