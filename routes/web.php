<?php

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
    return view('welcome');
});

Route::get('two', function () {
    return view('two');
});
Route::get('three', function () {
    return view('three');
});
Route::post("three","Users@index");
Route::get('four', function () {
    return view('four');
});
Route::get('log',function(){
    return "hello";
});
Route::get("db","Users@dashboard");
Route::resource("posts","posts");