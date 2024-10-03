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
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/quote', 'App\Http\Controllers\QuoteController@index');
Route::get('/quote/post', 'App\Http\Controllers\QuoteController@postquote');
Route::post('/quote/post/save', 'App\Http\Controllers\QuoteController@save');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/porto', function () {
    return view('porto');
});

Route::get('/advisor', function () {
    return view('advisor');
});

Route::get('/blog', function () {
    return view('
    blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/single', function () {
    return view('single');
});
Route::get('/music', function () {
    return view('music');
});
