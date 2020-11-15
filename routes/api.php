<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(function () {
    Route::get('/login','LoginController@loginPage')->name('login');
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/register','LoginController@registerPage')->name('register');
    Route::post('/register','LoginController@register')->name('register');
//});
