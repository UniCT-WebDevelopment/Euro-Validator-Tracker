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

Route::get('/note', 'NoteController@create');
Route::get('/note/{id}', 'NoteController@show')->name('id');
Route::get('/create', 'NoteController@create');
Route::get('/learn', 'NoteController@learn');
Route::post('/note', 'NoteController@store');

