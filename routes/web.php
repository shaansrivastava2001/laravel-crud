<?php

use App\Models\Todo;
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
    return view('show')->with('todoArr',Todo::all());
});

Route::get('/show','App\Http\Controllers\TodoController@show');
Route::get('/delete/{id}','App\Http\Controllers\TodoController@destroy');
Route::get('/create','App\Http\Controllers\TodoController@create');
Route::post('/submit','App\Http\Controllers\TodoController@store');
