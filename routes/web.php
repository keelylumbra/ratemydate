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
    return view('layouts.master');
});

Route::get('/add', function(){
    return View::make('add');
});
Route::get('/browse', function(){
    return View::make('browse');
});
Route::get('/faq', function(){
    return View::make('faq');
});

