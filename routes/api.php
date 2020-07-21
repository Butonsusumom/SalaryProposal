<?php

use App\User;
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

Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
Route::post('user', 'UserController@create');
Route::put('user/{id}', 'UserController@edit');
Route::delete('user/{id}', 'UserController@destroy');
Route::get('/mathmodel/{city}/{position}/{experience}', 'DefsalController@calculate');
Route::get('/mathmodel', 'DefsalController@index');
