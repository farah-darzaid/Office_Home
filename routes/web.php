<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout','LoginController@logout')->name('logout');


//Route::post('/logout','LoginController@logout')->name('logout');


//Route::middleware('auth')->group(function () {
    Route::resource('/todo','TodoController');
    Route::post('/todos/{id}/completed','TodoController@completeTodo')->name('complete-todo');

//});

Route::get('login','LoginController@loginPage')->name('login');
Route::post('login','LoginController@login')->name('login');
Route::get('forget','LoginController@forgetPage')->name('forget');
