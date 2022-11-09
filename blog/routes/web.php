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
    return view('welcome');
});

Route::get('/pronob', function(){
    return "Hello! Pronob. Wellcome to Laravel.";
});

Route::get('/about', function(){
    return "<h2>This is a about page.</h2>";
});

Route::get('/contact', function(){
    return "<h2>This is a contact page.</h2>";
});

Route::match(['get', 'post'], '/create', function () {
    return view('welcome');
});

Route::redirect('/', '/create');