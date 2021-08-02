<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_liste;

use App\Http\Controllers\TodoListeController;

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

Route::get('/', 'App\Http\Controllers\TodoListeController@index');

Route::get('create', 'App\Http\Controllers\TodoListeController@create');

Route::get('save_new_list', 'App\Http\Controllers\TodoListeController@store');

Route::get('delete/{id}', 'App\Http\Controllers\TodoListeController@destroy');

Route::get('edit/{id}', 'App\Http\Controllers\TodoListeController@edit');

Route::get('update_list/{id}', 'App\Http\Controllers\TodoListeController@update');