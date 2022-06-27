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

Route::get('/book/new', 'App\Http\Controllers\BookController@create');

Route::post('/book/new', 'App\Http\Controllers\BookController@store')->name('salvar_livro');

Route::get('/book/list', 'App\Http\Controllers\BookController@show');

Route::get('/book/delete/{id}', 'App\Http\Controllers\BookController@destroy')->name('excluir_livro');

Route::get('/book/edit/{id}', 'App\Http\Controllers\BookController@edit')->name('editar_livro');

Route::post('/book/edit/{id}', 'App\Http\Controllers\BookController@update')->name('atualizar_livro');