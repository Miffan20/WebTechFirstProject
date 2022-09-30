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
    return view('index');
}) -> name('index');

Route::get('plebboi', function() {
    return view('plebboi');
}) -> name('plebboi');

Route::get('gigachad', function() {
    return view('gigachad');
}) -> name('gigachad');
